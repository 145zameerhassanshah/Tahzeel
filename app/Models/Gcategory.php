<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Gcategory extends Model
{
    use HasTranslations;
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'id');
    }
}
