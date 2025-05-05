<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceSection extends Model
{

    use HasTranslations;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'type',
        'order_no',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
