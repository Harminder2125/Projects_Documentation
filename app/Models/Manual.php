<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'subtitle',
        'description',
        'parent_id',
        'position',
    ];

    public function project()
   {
    return $this->belongsTo(Project::class);
   }

   public function manual_parent()
   {
    return $this->belongsTo(Manual::class);
   }

   public function manual_children() {
    return $this->hasMany(Manual::class, 'parent_id')->orderBy('position');;
}
}
