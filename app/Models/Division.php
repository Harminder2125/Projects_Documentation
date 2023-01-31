<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\User;

class Division extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'group_id',
        'user_id'
     ];

   public function group()
   {
    return $this->belongsTo(Group::class);
   }

   public function hod()
   {
    return $this->belongsTo(User::class,'user_id','id');
   }
    
 
}
