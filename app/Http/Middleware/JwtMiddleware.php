<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JwtMiddleware
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
        try {
            if($request->bearerToken()) {
                // 
            } else {
                return response()->json([
                    'success' => false,
                    'status' => 401,
                    'message' => __("api.TOKEN_NOT_FOUND"),
                ]);
            }
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json([
                    'success' => false,
                    'status' => 401,
                    'message' => __("api.TOKEN_INVALID"),
                ]);
            } elseif ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json([
                    'success' => false,
                    'status' => 401,
                    'message' => __("api.TOKEN_IS_EXPIRED"),
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'status' => 401,
                    'message' => __("api.TOKEN_NOT_FOUND"), 
                ]);
            }
        }
        return $next($request);
    }
}
