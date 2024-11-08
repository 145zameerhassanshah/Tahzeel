<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceFeature extends Model
{
    use HasTranslations;
   
    protected $fillable = [
        'name',
        'service_id',
    ];

    public $translatable = ['name'];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
