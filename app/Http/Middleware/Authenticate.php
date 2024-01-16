<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class Authenticate extends BaseMiddleware
{
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            app()->bind("user", function () use ($user){
                return $user;
            });
        } catch (\Exception $e) {
            return response()->json(['message' => 'Unauthorized', "error_msg" => "Unauthorized"], 401);
        }

        return $next($request);
    }
}
