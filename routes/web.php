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
    return view('welcome');
});

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

    Route::get("/plugins/import", [
        "as" => "acp.plugins.import",
        "uses" => "PluginController@import",
    ]);

    Route::post("/plugins/import", [
        "as" => "acp.plugins.import",
        "uses" => "PluginController@doImport",
    ]);

});

/*
 * DYNAMIC ROUTES
 */
require_once( base_path() . "/routes/database.php" );