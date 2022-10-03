<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsTokenValid;
use App\Http\Controllers\api\v1\UserController;
use App\Http\Controllers\api\v1\StudentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(IsTokenValid::class)->prefix('v1')->group(function(){
    Route::controller(UserController::class)->prefix('users')->group(function(){
      Route::get('allusers','allusers');
      Route::get('getuserbyapikey/{apiKey}','getUserByApiKey');
      Route::post('registrate',function(Request $request){
        return UserController::registrate($request);
      });
      Route::post('deleteOwn','removeOwn');
    });
    Route::controller(StudentController::class)->prefix('students')->group(function()
    {
      Route::get('allstudents','allstudents');
      Route::get('getstudentinfo', 'getStudentInfo');
    });
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
