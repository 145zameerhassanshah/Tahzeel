<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Procedure extends Model
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

    protected $casts = [
        'title'       => 'array', // Auto-converts to/from JSON
        'subtitle'    => 'array',
        'description' => 'array'
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
