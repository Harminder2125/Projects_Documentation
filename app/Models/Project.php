<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'abbreviation',
        'description',
        'launch_date',
        'launched_by',
        'head_user_id',
        'leader_user_id',
        'thumbnail_image'
    ];
    
    public function projectHead()
    {
        $this->belongsTo(User::class,'head_user_id');
    }

    public function projectTeamLeader()
    {
        $this->belongsTo(User::class,'leader_user_id');
    }
}
