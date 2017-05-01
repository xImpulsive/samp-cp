<?php
use Illuminate\Support\Facades\View;

View::composer("*", function($view) {
    $user = \Illuminate\Support\Facades\Auth::user();
    $view->with("user", $user);
});

Route::get("/login", [
    "as" => "page.login",
    "uses" => "LoginController@showLogin",
]);

Route::post("/login", [
    "as" => "page.login",
    "uses" => "LoginController@doLogin",
]);

Route::get("/logout", [
    "as" => "page.logout",
    "uses" => "LoginController@doLogout",
])->middleware("auth");