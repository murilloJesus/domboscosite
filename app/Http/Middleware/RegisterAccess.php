<?php

namespace App\Http\Middleware;

use App\Models\Accessed;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class RegisterAccess
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

        $ip = $request->getClientIp();

        Accessed::updateOrCreate(
            ['visitor' => $ip, 'date' => Date::today()],
            ['updated_at' => Date::now()]
        );

        return $next($request);
    }
}
