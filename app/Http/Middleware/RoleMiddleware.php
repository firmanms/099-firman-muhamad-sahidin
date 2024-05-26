<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next, $role) {
        if (!Auth::check()) {
            return redirect('admin.login');
        }

        $user = Auth::user();
        if ($user->role->name !== $role) {
            return redirect('unauthorized');
        }

        return $next($request);
    }
}
