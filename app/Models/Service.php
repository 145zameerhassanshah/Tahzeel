<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Service extends Model
{
    use HasTranslations;

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceFeatures()
    {
        return $this->hasMany(ServiceFeature::class);
    }

    public function serviceSections()
    {
        return $this->hasMany(ServiceSection::class);
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
