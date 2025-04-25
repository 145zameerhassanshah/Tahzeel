<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Jcategory extends Model
{
    use HasTranslations;
    public function jobs()
    {
    	return $this->hasMany(Job::class);
    }
}
