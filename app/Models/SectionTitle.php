<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SectionTitle extends Model
{
    use HasTranslations;
    protected $fillable = [
        'page_id',
        'type',
        'title',
        'subtitle',
        'description',
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