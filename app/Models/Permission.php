<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'role_id',
        'group_id',
        'project_id'
    ];

    public function rolename()
    {
        return $this->belongsTo(role::class,'role_id','id');
    }
     public function groupname()
    {
        return $this->belongsTo(group::class);
    }
    public function projectname()
    {
        return $this->belongsTo(project::class);
    }

}
