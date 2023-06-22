<?php

namespace App\Models;
use App\Models\Scopes\GroupScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manual;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'abbreviation',
        'description',
        'launch_date',
        'launched_by',
        'group_id',
        'category',
        'logo_image',
        'banner_image',
        'publish_status',
    ];
    protected $dates = ['launch_date'];

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
    public function team()
    {   // Returns all team members - Project Head , Team Leader and Team Members
        return $this->hasMany(ProjectTeamMembers::class,'project_id','id');
    }
    public function head()
    {
         // Returns only project head
        return $this->hasMany(ProjectTeamMembers::class,'project_id','id')->where('projectrole_id',1);
    }
    public function leader()
    {
         // Returns only team leader
        return $this->hasMany(ProjectTeamMembers::class,'project_id','id')->where('projectrole_id',2);
    }
    public function members()
    {
         // Returns only team members
       return $this->hasMany(ProjectTeamMembers::class,'project_id','id')->where('projectrole_id',3);
    }
    public function featurebox()
    {
         // Returns only team members
       return $this->hasMany(Featurebox::class,'project_id','id');
    }

    public function manuals()
    {
         // Returns only team members
       return $this->hasMany(Manual::class,'project_id','id');
    }
    


    public function status()
    {
         return $this->belongsTo(ProjectStatus::class,'publish_status','id');
    }
    public function project_category()
    {
         return $this->belongsTo(Category::class,'category','id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
    
}
