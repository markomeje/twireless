<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;

class ProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if (!empty($user->client)) {
            if (empty($user->client->status) || $user->client->status === 'incomplete') {
                if (strtoupper($request->method()) === 'GET') {
                    return response()->view('client.profile.setup', [
                        'client' => auth()->user()->client
                    ]);
                }
            }
        }

        return $next($request);
    }
}
