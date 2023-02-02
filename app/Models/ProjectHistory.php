<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;

class ProjectHistory extends Model
{
    use HasFactory;
     protected $fillable = [
        'project_id',
        'action_performed',
        'action_description',
        'first_user_id',
        'second_user_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id' , 'id');
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class,'first_user_id' , 'id');
    }
     public function toUser()
    {
        return $this->belongsTo(User::class,'second_user_id' , 'id');
    }
}
