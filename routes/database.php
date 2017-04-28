<?php
use App\Models\Routes as Routes;

$routes = Routes::all();
foreach( $routes as $route )
{
    if( $route->type == Routes::$REQUEST_GET )
    {
        Route::get( $route->route_match, $route->getOptions());
    }
    else if ( $route->type == Route::$REQUEST_POST )
    {
        Route::post( $route->route_match, $route->getOptions());
    }
}