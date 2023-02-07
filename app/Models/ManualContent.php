<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'manual_id',
        'title',
        'subtitle',
        'description',
        'parent_id',
        'position',
    ];

    public function manual()
   {
    return $this->belongsTo(Manual::class);
   }

   public function manual_parent()
   {
    return $this->belongsTo(ManualContent::class);
   }

   public function manual_children() {
    return $this->hasMany(ManualContent::class, 'parent_id')->orderBy('position');;
}
}
