<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Feature extends Model
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

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'description' => 'array',
        'icon' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
