<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Routes;



Route::get('/', function () {
    return view('page::home');
});

require_once( __DIR__ . "/auth.php" );

/*
 * STATIC ROUTES
 */
// @TODO before filter!
Route::group(["prefix" => "/acp"], function() {

    Route::get("/", [
        "as" => "acp.home",
        "uses" => "AdminController@index",
    ]);

    Route::get("/themes/import", [
        "as" => "acp.themes.import",
        "uses" => "AdminController@showImport",
    ]);

    Route::get("/themes/create", [
        "as" => "acp.themes.create",
        "uses" => "AdminController@showThemeCreate",
    ]);

    Route::get("/plugins", [
        "as" => "acp.plugins.overview",
        "uses" => "PluginController@overview",
    ]);

    Route::get("/plugins/{plugin}/remove", [
        "as" => "acp.plugins.remove",
        "uses" => "PluginController@remove",
    ]);

    Route::post("/plugins/import", [
        "as" => "acp.plugins.import",
        "uses" => "PluginController@doImport",
    ]);

});

/*
 * DYNAMIC ROUTES
 */
require_once( __DIR__ . "/database.php" );