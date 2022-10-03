<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a list of users.
   *
   * @return \Illuminate\Http\Response
   */
  public function allusers()
  {
      return users::getAllUsers();
  }
  
  /**
   * Insert user into database users
   *
   * @param \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function registrate(Request $request){
     //validate data from request
      $request->validate([
        'iin'=> 'required|unique:users|max:12',
        'name'=>'required|max:255',
        'photo'=>'max:255',
        'password'=>'required',
      ]);
      //if data is valid
      //create instance of users model to save new user
      $user = new users();
      $user->name = $request->name;
      $user->photo = $request->photo;
      $user->iin = $request->iin;
      $user->password = md5($request->password);
      $user->apiKey = $user->generateApiKey();
      //return save response
      return $user->save();
   }
  /**
    * Get user by api key
    *
    * @param \Illuminate\Http\Request $request
    * @return array
  */
  public function getUserByApiKey($apiKey)
  {
      return users::getUserByApiKey($apiKey);
  }
  /**
    * Remove yourself from table
    *
    * @param \Illuminate\Http\Request $request
    * @return true|false
  */
  public function removeOwn()
  {
      $userId = $this->getUserByApiKey(session('token')[0]['apiKey'])[0]['id'];
      $user = users::find($userId);
      return $user->delete();
  }
}
