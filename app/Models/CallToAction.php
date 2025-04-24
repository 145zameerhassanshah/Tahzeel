<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CallToAction extends Model
{
    use HasTranslations;
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
