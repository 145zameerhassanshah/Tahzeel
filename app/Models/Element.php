<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasTranslations;
    protected $fillable = [
        'element_name',
        'title',
        'subtitle',
        'description',
        'icon',
        'image',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description'
    ];
    public function features()
    {
        return $this->hasMany(ElementFeature::class);
    }
}