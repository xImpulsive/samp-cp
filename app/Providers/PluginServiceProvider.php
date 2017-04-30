<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // @TODO here configure theme templates?
        $this->loadViewsFrom( resource_path() . "/views/acp/layout", "acp-layout");


        // @TODO here load the plugins?
        $modules = ["userProfile"];
        foreach( $modules as $module )
        {
            $modulePath = app_path() . "/plugins/" . $module;

            if( is_dir( $modulePath . "/listeners" ) )
            {
                // here the file information -> which listeners to use!
                require_once( $modulePath."/listeners/sidebarListener.php" );
            }

            if( is_dir( $modulePath . "/views") )
            {
                $this->loadViewsFrom( $modulePath . "/views", $module );
            }
        }
    }

    public function register(){}
}