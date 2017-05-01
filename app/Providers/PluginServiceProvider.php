<?php
namespace App\Providers;
use App\Models\Plugin;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {

        // @TODO here configure theme templates?
        $this->loadViewsFrom( resource_path() . "/views/acp/layout", "acp-layout");
        $this->loadViewsFrom( resource_path() . "/views/front/layout", "layout");
        $this->loadViewsFrom( resource_path() . "/views/front/pages", "page");

        // @TODO here load the plugins?
        //$modules = ["userProfile"];#
        $modules = Plugin::all()->load("listener");
        foreach( $modules as $plugin )
        {
            $module = $plugin->name;
            $modulePath = app_path() . "/plugins/" . $module;

            if( is_dir( $modulePath . "/controllers" ) )
            {
                
            }

            if( is_dir( $modulePath . "/listeners" ) )
            {
                foreach( $plugin->listener as $listener )
                {
                    require_once( $modulePath . "/listeners/". $listener->file );
                }
            }

            if( is_dir( $modulePath . "/views") )
            {
                View::composer($module ."::*", function($view) use( $plugin ) {
                    $view->with("_plugin", $plugin);
                });
                $this->loadViewsFrom( $modulePath . "/views", $module );
            }
        }
    }

    public function register(){}
}