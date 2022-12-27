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
        $this->belongsTo(role::class);
    }
     public function groupname()
    {
        $this->belongsTo(group::class);
    }
    public function projectname()
    {
        $this->belongsTo(project::class);
    }

}
