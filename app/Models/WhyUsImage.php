<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhyUsImage extends Model
{
    use HasTranslations;

    protected $fillable = [
        'page_id',
        'image',
        'title',
        'subtitle',
        'description',
        'order_no',
        'status',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
