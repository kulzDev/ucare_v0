<?php

namespace ucare\Http\Middleware;

use Closure;

class Marketing
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
        if (Auth::check()) {

            if (Auth::user()->isMarketing()) {

                return $next($request);

            }

        }

        return redirect('/');
    }
}
