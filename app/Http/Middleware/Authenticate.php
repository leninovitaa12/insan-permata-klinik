<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Logic untuk memeriksa apakah pengguna sudah terotentikasi
        if (!auth()->check()) {
            return redirect()->route('login'); // Ganti 'login' dengan nama route login Anda
        }

        return $next($request);
    }
}
