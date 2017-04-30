<?php
namespace App\Http\Injector;

class Injector
{
    public static function event( $name = "*" )
    {
        $response = event("view.inject", $name);

        foreach( $response[0] as $response ) {
            echo $response;
        }
    }
}