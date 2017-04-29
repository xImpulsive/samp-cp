<?php
namespace App\Http\Controllers\Packages\SampCP\User;

use Illuminate\Routing\Controller as BaseController;



class UserController extends BaseController
{

    /*
     * Route: /user/{user}
     * Alias: user.request
     * Regular Expression:
     *      [user] => [0-9]+
     *      ...
     */
    public function userRequest( $userID )
    {
        // @TODO some logic here
    }
}