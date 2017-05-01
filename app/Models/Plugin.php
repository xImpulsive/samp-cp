<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Plugin extends Model
{
    protected $table = "plugins";

    public function remove()
    {
        $dir = app_path() . "/Plugins/" . ucfirst( $this->name );
        if( File::exists( $dir . "/Installer.php") ) {
            require_once($dir . "/Installer.php");
            $installer = new \Installer();
            $installer->uninstall();
        }


        Listener::where("plugin_id", $this->id )->delete();
        Routes::where("plugin_id", $this->id )->delete();
        //$res = Storage::deleteDirectory( $dir, true );
        File::deleteDirectory( $dir . "/", true );
        File::deleteDirectory( $dir );

        $this->delete();
    }

    public function listener()
    {
        return $this->hasMany("App\\Models\\Listener", "plugin_id", "id");
    }
}