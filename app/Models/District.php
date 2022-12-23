<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'name',
        'state_id'
    ];

    public function state(){
        
        $this->belongsTo(State::class);
    }
}
