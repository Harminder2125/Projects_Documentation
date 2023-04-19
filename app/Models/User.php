<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\role_privilege_mapping;
use App\Models\Scopes\GroupScope;




class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'empcode',
        'designation', 
        'role_id',
        'group_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected static function booted()
    {
        if(Auth::check())
        static::addGlobalScope(new GroupScope);  //Only user related to same group
       
    }

    public function isAdmin()
    {
        if($this->role_id == 2)
        {
            return true;
        }
        return false;
    }
    
    /* LOCAL SCOPES START HERE*/
    public function scopeEndUser($query)
    {
        return $query->where('role_id', '=', 3);    // Retrieve all users with roleid-3 or rolename- USER
    }
    public function scopeAdmin($query)
    {
        return $query->where('role_id', '=', 2);    // Retrieve all users with roleid-2 or rolename- ADMIN
    }
     public function scopeSuperAdmin($query)
    {
        return $query->where('role_id', '=', 1);    // Retrieve all users with roleid-1 or rolename- SUPERADMIN
    }
    
    
   /* LOCAL SCOPES ENDS HERE */

    function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function role_privilege_mapping()
    {
        return $this->hasMany(role_privilege_mapping::class,'role_id');
    }

    public function ProjectTeamMembers()
    {
        return $this->hasMany(ProjectTeamMembers::class,'user_id');
    }

}
