<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsVisibleto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'event_id',
        'user_id',
        'seen',
      ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
