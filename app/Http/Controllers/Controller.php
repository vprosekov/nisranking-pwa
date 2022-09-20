<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Models\users;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function boot(Router $router)
    {

        $router->model('users', '\App\Models\users');
    }
    public static function login(Request $request)
    {
        $credentials = $request->validate([
            'iin' => ['required'],
            'password' => ['required'],
        ]);
        //session()->forget('token');
        session()->forget('token');
        $user = \App\Models\users::where("iin","=",$request->input('iin'))->where("password","=",md5($request->input('password')))->get('apiKey');
        if (count($user) == 0) {
            return back()->withErrors([
               'iin' => "The provided iin is empty or not match with records",
               'password' => "The provided password is empty or not match with records"
            ]);
        }
        session(['token'=>$user]);
        return redirect('/mainpage');
    }
    public static function exit(Request $request)
    {
        session()->forget('token');
        return redirect('/');
    }
}
