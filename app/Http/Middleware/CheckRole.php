<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user() || $request->user()->role !== $role) {
            return redirect()->route('login')->withErrors(['role' => 'Anda tidak memiliki akses ke halaman tersebut.']);
        }

        return $next($request);
    }
} 