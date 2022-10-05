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
Route::middleware(IsTokenValid::class)->group(function(){
  Route::get('/', function () {
      return redirect('/mainpage');
  });
  Route::get('/mainpage', function () {
      return Controller::mainpage();
  });
<<<<<<< HEAD
=======
  Route::get('/myachievements', function () {
      return Controller::myachievements();
  });
	
>>>>>>> 0182f344453c4caac581daedc1ea7faf4ce6b4e4
});

Route::get('/auth', function(){
    return view('auth', ['showNavbar'=>false]);
});
Route::post('/login', function (Request $request) {
    return Controller::login($request);
});
Route::post('/exit',function(Request $request) {
    return Controller::exit($request);
});
