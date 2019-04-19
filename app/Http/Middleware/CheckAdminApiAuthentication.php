<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Route;

class CheckAdminApiAuthentication
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
        if (! Auth::check()) {
            return response()->json([
               'code' => 401,
               'data' => [],
               'msg' => 'Unauthorized !'
            ]);
        }

        return $next($request);
    }
}
