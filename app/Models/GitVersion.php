<?php
namespace App\Models;

class GitVersion
{
    public static function getVersion($branch = "master")
    {
        if ( $hash = file_get_contents( sprintf('/.git/refs/heads/%s', $branch ) ) ) {
            return $hash;
        } else {
            return false;
        }
    }
}