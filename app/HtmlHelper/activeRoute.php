<?php

Html::macro('activeRoute', function($match, $class = "active", $notActive = "")
{
    $active = Route::currentRouteName();
    return ( $active == $match ) ? $class : $notActive;
});