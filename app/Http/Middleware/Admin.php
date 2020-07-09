<?php



namespace App\Http\Middleware;



use Closure;
use Auth;




class Admin

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
          if (!$request->user()->is_admin == 1) {
            if ($request->wantsJson()) {
                return response()->json(['Message', 'You do not access to this module.'], 403);
            }
            abort(403, 'You are not not authorize for admin access.');
        }
        return $next($request);
    }


  
    
        }
    

       

    



