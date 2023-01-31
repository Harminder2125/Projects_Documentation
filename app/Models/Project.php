<?php

namespace App\Models;
use App\Models\Scopes\GroupScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'abbreviation',
        'description',
        'launch_date',
        'launched_by',
        // 'head_user_id',
        'thumbnail_image',
        'group_id'
    ];

    public function group()
    {
        return $this->belongsTo(group::class);
    }
}
