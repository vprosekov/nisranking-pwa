<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
    * function that generates random api key
    *
    * @return string
    */
    public function generateApiKey(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 100; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }
    /**
    * Get the student associated with user
    */
    public function students()
    {
        return $this->hasOne(students::class);
    }
    /**
    * Get the admin associated with user
    */
    public function admins($value='')
    {
        return $this->hasOne(admins::class);
    }
    /**
    * Display all users by id, photo, name and iin from users table
    *
    * @return array
    */
    public static function getAllUsers()
    {
        return self::select('id','photo','name','iin')->get();
    }
    /**
    * Get user by api key
    *
    * @return array
    */
    public static function getUserByApiKey($apiKey)
    {
        return self::where('apiKey',$apiKey)->select('id','photo','name','iin')->get();
    }
    
}
