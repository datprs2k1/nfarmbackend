<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class ApiPermissionDenied
{
    public function handle($request, Closure $next, ...$roles)
    {
        if ($request->user() && ! $request->user()->hasAnyRole($roles)) {
            return response()->json(['message' => 'Permission denied'], Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
