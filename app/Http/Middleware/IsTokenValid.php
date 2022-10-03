<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\users;

class IsTokenValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
     public function boot(Router $router)
     {

         $router->model('users', '\App\Models\users');
     }
    public function handle(Request $request, Closure $next)
    {

      if(!session()->has('token')){
          return redirect('/auth');
      }
      $users = users::where("apiKey",session('token')[0]['apiKey'])->count();
      if ($users == 0) {
          return redirect('/auth');
      }

      return $next($request);
    }
}
