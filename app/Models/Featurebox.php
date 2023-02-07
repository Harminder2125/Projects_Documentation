<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Featurebox extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'title',
        'subtitle',
        'position',
        'icon',
     ];

public function project()
{
 return $this->belongsTo(Project::class);
}

public function featureboxentries() {
    return $this->hasMany(Featureboxentries::class, 'featurebox_id');
}

}
