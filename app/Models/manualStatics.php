<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manualStatics extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'subtitle',
        'description',
        'parent_id',
        'position',
        
    ];
}
