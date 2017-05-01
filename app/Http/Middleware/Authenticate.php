<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // @TODO Language System
        if( !Auth::user() )
            return response()
                ->redirectTo("/")
                ->withError("Du musst angemeldet sein, um diese Aktion durchzuführen!");

        return $next($request);
    }

}