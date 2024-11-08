<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{
    use HasTranslations;

    public function serviceCategories()
    {
        return $this->hasMany(ServiceCategory::class);
    }

    public function serviceFeatures()
    {
        return $this->hasMany(ServiceFeature::class);
    }
    
    protected $fillable = [
        'name',
        'service_category_id',
        'slug',
        'order_no',
        'status',
        'banner_title',
        'banner_subtitle',
        'description',
        'other_description',
    ];

    public $translatable = [
        'name',
        'banner_title',
        'banner_subtitle',
        'description',
        'other_description',
    ];
}
