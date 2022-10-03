<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolelist extends Model
{
    use HasFactory;
    protected $table = 'rolelist';
    public function getShanyraqRole($id)
    {
       return $this->join('shanyraqs',function($query){
                        $query->on('shanyraqs.id','=','rolelist.roleId')
                              ->on('shanyraqs.name','=','rolelist.roleName');
                    })->where('rolelist.id',$id)
                    ->select('rolelist.roleName','rolelist.roleType')->get();
    }
    public function getMinistryRole($id)
    {
       return $this->join('ministries',function($query){
                        $query->on('ministries.id','=','rolelist.roleId')
                             ->on('ministries.ministryName','=','rolelist.roleName');
                      })
                    ->where('rolelist.id',$id)
                    ->select('rolelist.roleName','rolelist.roleType')->get();
    }
    public function getClubRole($id)
    {
       return $this->join('clubs', function($query){
                        $query->on('clubs.id','=','rolelist.roleId')
                              ->on('clubs.shanyraqName','=','rolelist.roleName');
                      })->where('rolelist.id',$id)
                      ->select('rolelist.roleName','rolelist.roleType')->get();
    }
}
