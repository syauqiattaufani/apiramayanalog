<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        /* if ($request->header("Token") != 'RAMAYANA') {
            return response()->json(
                [
                    'status' => 401,
                    'message' => "Unauthorized"
                ]
            );
        } */

        //penambahan (apitokenmiddleware)


        return $next($request);
    }
}
