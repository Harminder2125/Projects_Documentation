<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_privilege_mapping extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'privilege_id'
     ];

     function role()
    {
        return $this->belongsTo(Role::class);
    }
    function privileges()
    {
<<<<<<< HEAD
        return $this->belongsTo(Privileges::class);
=======
        return $this->belongsTo(Privileges::class,'privilege_id');
>>>>>>> a2fda8fb5c33c09657bd75c9f872ed0689748a24
    }

 
}

