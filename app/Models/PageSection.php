<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageSection extends Model
{
    use HasTranslations;

    protected $fillable = [
        'page_id',
        'title',
        'subtitle',
        'description',
        'image',
        'type',
        'order_no',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description',
    ];

    // Relationship (optional if needed)
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
