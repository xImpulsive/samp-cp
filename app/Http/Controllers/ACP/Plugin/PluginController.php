<?php
namespace App\Http\Controllers;

use App\Models\Plugin;
use App\Models\Routes;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Chumper\Zipper\Zipper;
use Illuminate\Support\Facades\Lang;
use Nathanmac\Utilities\Parser\Exceptions\ParserException;
use Nathanmac\Utilities\Parser\Facades\Parser;


class PluginController extends BaseController
{

    public function overview()
    {
        $plugins = Plugin::all();
        return view("acp.plugins.overview")->with("plugins", $plugins);
    }

    public function remove( $id )
    {
        $plugin = Plugin::find( $id );
        if( !$plugin ) return App::abort( 404 );

        $title = $plugin->title;

        $plugin->remove();

        return response()
            ->redirectToRoute("acp.plugins.overview")
            ->withSuccess( Lang::get("acp.plugin.messages.remove", ["name" => $title]) );
    }

    public function doImport()
    {
        // list of strings -> catched errors!
        $error_log = [];

        $file = Input::file("archive");

        $zipper = new Zipper;

        $zipper->make( $file );
        $pluginData = $zipper->getFileContent("plugin.json");

        $data = null;
        try {
            $data = Parser::json($pluginData);
        } catch( ParserException $ex ) {
            $error_log[] = $ex->getMessage();
        }

        $collection = collect( $data );
        $developer = collect( $collection->get("developer", []) );


        // First Step register plugin in Database

        $plugin = new Plugin();

        $plugin->name = $collection->get("name", "");
        $plugin->title = $collection->get("title", "");
        $plugin->description = $collection->get("description", "");
        $plugin->version = $collection->get("version", "");
        $plugin->license = $collection->get("license", "");

        $plugin->developer_name = $developer->get("name", "");
        $plugin->developer_website = $developer->get("website", "");
        $plugin->save();



        $routes = collect( $collection->get("routes", []) )->map(function( $route ) {
            return collect( $route );
        });

        foreach( $routes as $route )
        {
            $matches = collect( $route->get("matches", []) )->map( function($match) {
                return collect( $match );
            });

            $regex = implode(";;", $matches->map( function( $match ) {
                return $match->get("matcher", ""). "::" . $match->get("regex", "");
            })->toArray());


            $routeModel = new Routes();
            // @TODO here the plugin id!!
            $routeModel->plugin_id = $plugin->id;
            $routeModel->type = $route->get("type", Routes::$REQUEST_GET);
            $routeModel->route_match = $route->get("route_match", "");
            $routeModel->alias = $route->get("alias", "");
            $routeModel->uses = $route->get("uses", "");
            $routeModel->regex = $regex;
            $routeModel->save();


        }

        $title = $plugin->title;

        return response()
                ->redirectToRoute("acp.plugins.overview")
                ->withSuccess( Lang::get("acp.plugin.messages.add", ["name" => $title]) );
    }
}