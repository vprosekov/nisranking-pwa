<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    use HasFactory;
    /**
    * Get the user that have the student role.
    */
    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
