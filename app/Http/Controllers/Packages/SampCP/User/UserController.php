<?php
namespace App\Http\Controllers\Packages\SampCP\User;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function userRequest( $userID )
    {
        return $userID;
    }
}