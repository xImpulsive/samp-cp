<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LoginController extends BaseController
{
    public function showLogin( )
    {
        return view("page::login");
    }

    public function doLogin( Request $request )
    {
        // @TODO need rework, Validators etc
        $inputs = Input::only("username", "password");
        $validator = Validator::make($inputs, [
            "username" => "required",
            "password" => "required",
        ]);
        if( $validator->fails() ) {
            return redirect( route("page.login") )
                ->withErrors( $validator );
        }

        // @TODO more logic
        $user = User::where("username", $inputs["username"])->where("password", $inputs["password"])->first();
        if( $user )
        {
            Auth::login( $user );
            echo "true";
        } else {
            echo "false";
        }

        return view("page::home");
    }

    public function doLogout()
    {
        // do some shit here
        Auth::logout();

        return response()->redirectTo("/");
    }
}