<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfAuthenticated
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
        if (auth()->check()) {
            return redirect('/home'); // Ganti '/home' dengan URL tujuan jika pengguna sudah terotentikasi
        }

        return $next($request);
    }
}
