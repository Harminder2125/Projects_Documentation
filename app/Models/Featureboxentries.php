<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featureboxentries extends Model
{
    use HasFactory;
    protected $fillable = [
        'featurebox_id',
        'title',
        'description',
        'position'
     ];

public function featurebox()
{
 return $this->belongsTo(featurebox::class);
}
}
