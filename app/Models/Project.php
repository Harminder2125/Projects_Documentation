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
        
        'logo_image',
        'banner_image',
        'division_id',
        'publish_status',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
