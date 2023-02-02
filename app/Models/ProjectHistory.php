<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ProjectHistory extends Model
{
    use HasFactory;
     protected $fillable = [
        'action_performed',
        'action_description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
