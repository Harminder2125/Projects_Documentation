<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRoles extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
    ];

    public function Projectrole_privilege_mapping()
    {
        return $this->hasMany(Projectrole_privilege_mapping::class,'projectrole_id');
    }
}
