<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function serviceCategories()
    {
        return $this->hasMany(ServiceCategory::class);
    }

    public function serviceFeatures()
    {
        return $this->hasMany(ServiceFeature::class);
    }
}
