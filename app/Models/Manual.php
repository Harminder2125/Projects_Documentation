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
        'version',
        'major_changes',
        'has_document_manual',
        'has_video_manual',
    ];

    public function project()
   {
    return $this->belongsTo(Project::class);
   }

}
