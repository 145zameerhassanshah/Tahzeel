<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasTranslations;
    protected $table = 'job_applications';
    public $timestamps = false;
    public function jcategory()
    {
    	return $this->belongsTo(Jcategory::class);
    }
}
