<?php

namespace App\Http\Middleware;

use Closure;

class CekTerlogin
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
        if(session('berhasil_login')) {
            return redirect('dashboard');
        }
        return $next($request);
    }
  /*   protected function redirectTo($request)
    {
        if ($request->expectsJson()) {
            return route('dashboard');
        }
    } */
}
