<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasTranslations;

    protected $casts = [
        'question' => 'array',
        'answer' => 'array'
    ];
    protected $fillable = ['page_id', 'question', 'answer'];

    public $translatable = [
        'question',
        'answer',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
