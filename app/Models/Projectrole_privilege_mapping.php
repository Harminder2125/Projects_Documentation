<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectrole_privilege_mapping extends Model
{
    use HasFactory;
    protected $fillable = [
        'projectrole_id',
        'privilege_id'
     ];

     function projectrole()
    {
        return $this->belongsTo(ProjectRoles::class);
    }
    function privileges()
    {
        return $this->belongsTo(Privileges::class);
    }
}
