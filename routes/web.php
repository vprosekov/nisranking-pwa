<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsTokenValid;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/mainpage');
})->middleware(IsTokenValid::class);
Route::get('/auth', function(){
    return view('auth', ['showNavbar'=>false]);
});

Route::get('/mainpage', function () {
    return view('mainpage');
})->middleware(IsTokenValid::class);

Route::post('/login', function (Request $request) {
    return Controller::login($request);
});
Route::post('/exit',function(Request $request) {
    return Controller::exit($request);
});
