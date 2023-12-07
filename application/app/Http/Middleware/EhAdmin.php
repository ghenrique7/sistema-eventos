<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EhAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (auth()->user()->eh_admin == 1) {
                return $next($request);
            } else {
                return redirect()->route('index')->with('message', 'Apenas usuarios administradores podem acessar.');
            }
        } else {
            return redirect()->route('login.index')->with('message', 'Faça login como administrador para ecessar este serviço.');
        }
        return $next($request);
    }
}
