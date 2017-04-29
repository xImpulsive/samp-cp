<?php
namespace App\Models;

class GitVersion
{
    public static function getVersion()
    {
        if ( $hash = file_get_contents( app_path() . "/version.txt" ) ) {
            $hash = str_replace(['$Id: ', "$"], "", $hash);
            return $hash;
        } else {
            return false;
        }
    }
}