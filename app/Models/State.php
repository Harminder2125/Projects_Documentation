<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'name',
    ];

    public function districts()
    {
        return $this->hasMany(Districts::class);
    }
}
