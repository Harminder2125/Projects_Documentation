<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Division extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'group_id'
     ];

   public function group()
   {
    return $this->belongsTo(Group::class);
   }
    
 
}
