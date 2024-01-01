<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SessionTimeout
{
    public function handle($request, Closure $next)
    {
        // Set session start time if not already set
        if (!session('start_time')) {
            session(['start_time' => time()]);
        }

        // Retrieve session start time
        $start_time = session('start_time');

        // Check for timeout (30 minutes in this example)
        if ($start_time < time() - (60 * 30)) {
            Auth::logout();
            return redirect('/login');
        }

        // Update last activity timestamp
        session()->put('last_activity', time());

        return $next($request);
    }
}