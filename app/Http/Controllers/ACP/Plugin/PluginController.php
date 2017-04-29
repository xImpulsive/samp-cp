<?php
namespace App\Http\Controllers;

use App\Models\Plugin;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Input;
use Chumper\Zipper\Zipper;
use Nathanmac\Utilities\Parser\Exceptions\ParserException;
use Nathanmac\Utilities\Parser\Facades\Parser;


class PluginController extends BaseController
{

    public function import()
    {
        return view("acp.plugins.import");
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


        $plugin = new Plugin();
        $plugin->name = $collection->get("name", "");
        $plugin->title = $collection->get("title", "");
        $plugin->description = $collection->get("description", "");
        $plugin->version = $collection->get("version", "");
        $plugin->license = $collection->get("license", "");
        $plugin->developer_name = $developer->get("name");
        $plugin->developer_website = $developer->get("website");
        $plugin->save();

    }
}