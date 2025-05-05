<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhyChooseUs extends Model
{
    use HasTranslations;

    protected $fillable = [
        'page_id',
        'icon',
        'title',
        'subtitle',
        'description',
        'order_no',
        'status',
    ];

    public $translatable = [
        'icon',
        'title',
        'subtitle',
        'description',
    ];


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
