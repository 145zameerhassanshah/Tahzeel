<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HeroSection extends Model
{
    use HasTranslations;
    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'description' => 'array'
    ];

    protected $fillable = [
        'page_id',
        'title',
        'subtitle',
        'description',
        'background_image',
        'status'
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