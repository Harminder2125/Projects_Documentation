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
        'category',
        'logo_image',
        'banner_image',
        'publish_status',
    ];

     /* LOCAL SCOPES START HERE*/
    public function scopePublished($query)
    {
        return $query->where('publish_status', '=', 1);   
    }
    public function scopeUnpublished($query)
    {
        return $query->where('publish_status', '==', 2); 
    }
    
   /* LOCAL SCOPES ENDS HERE */
    public function status()
    {
         return $this->belongsTo(ProjectStatus::class,'publish_status','id');
    }
    public function project_category()
    {
         return $this->belongsTo(Category::class,'category','id');
    }
    
}
