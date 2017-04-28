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

});

/*
 * DYNAMIC ROUTES
 */
require_once( base_path() . "/routes/database.php" );