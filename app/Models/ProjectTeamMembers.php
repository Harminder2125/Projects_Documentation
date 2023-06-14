<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeamMembers extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
        'projectrole_id',
        
    ];
    public function project()
   {
    return $this->belongsTo(Project::class);
   }

   public function user()
   {
    return $this->belongsTo(User::class,'user_id','id');
   }
    public function getuser()
   {
    return $this->belongsTo(User::class,'user_id','id');
   }

   public function group()
   {
    return $this->belongsTo(ProjectRoles::class,'projectrole_id','id');
   }

   public function ProjectRoles()
   {
    return $this->belongsTo(ProjectRoles::class,'projectrole_id');
   }

   

   public function Projectrole_privilege_mapping()
   {
    return $this->hasmany(Projectrole_privilege_mapping::class,'projectrole_id','projectrole_id');
   }

   
}
