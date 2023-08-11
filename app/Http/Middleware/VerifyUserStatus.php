<?php

namespace App\Http\Middleware;

use App\Traits\VerifyEmailAccount;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyUserStatus
{
    use VerifyEmailAccount;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->verify !== 1) {

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            $user = request()->user();

            $this->sendAccountOtp($user);
            $request->session()->put('user', $user->email);
            return redirect()->route('email.verify');
        }
        return $next($request);
    }
}
