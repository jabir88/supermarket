<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Editor
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
      if (Auth::user()->role_id >= 5 ) {

        return redirect('admin/permission');
      }
        return $next($request);
    }
}
