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

     public function projectrole()
    {
        return $this->belongsTo(ProjectRoles::class,'projectrole_id');
    }
    public function privileges()
    {
        return $this->belongsTo(Privileges::class,'privilege_id');
    }
}
