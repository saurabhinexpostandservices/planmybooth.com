<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckExhibitorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check karo user logged in hai ya nahi
        if (auth()->check()) {

            // 2. Agar uska role 'vendor' hai, toh use register/login page pe mat jaane do
            if (auth()->user()->role === 'vendor') {

                // 3. Redirect karo aur ek "error" message bhej do
                return redirect()->back()->with('error', 'You are logged in as a Vendor. You cannot access Exhibitor registration.');
            }
        }

        return $next($request);
    }
}
