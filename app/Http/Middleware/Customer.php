<?php

namespace App\Http\Middleware;

use Closure;

class Customer
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
        $user = \Auth::User();
        if($user->type_user_id ==1)
            return redirect()->route('vistaErrorSysAdmin.error');
        if($user->type_user_id ==2)
            return redirect()->route('vistasAdminBarberia.error');
        if($user->type_user_id ==3)
            return redirect()->route('vistasBarbero.error');
        return $next($request);
    }
}
