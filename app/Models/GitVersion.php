<?php
namespace App\Models;

class GitVersion
{
    public static function getVersion($branch = "master")
    {
        if ( $hash = file_get_contents( sprintf( base_path() . '.git/refs/heads/%s', $branch ) ) ) {
            return $hash;
        } else {
            return false;
        }
    }
}