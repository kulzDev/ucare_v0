<?php

namespace ucare\Http\Middleware;

use Closure;

class Reception
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

            if (Auth::user()->isReceptionist()) {

                return $next($request);

            }

        }

        return redirect('/');
    }
}
