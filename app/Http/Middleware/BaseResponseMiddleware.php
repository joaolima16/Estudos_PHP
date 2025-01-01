<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BaseResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $originalData = $response->getData(true);
        $formattedResponse = [
            'success' => $response->isSuccessful(),
            'status' => $response->getStatusCode(),
            'data' => $response->isSuccessful() ? $originalData: null
        ];
        $response->setData($formattedResponse);
        return $response;
    }
}
