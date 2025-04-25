<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CallToAction extends Model
{
    use HasTranslations;
    protected $fillable = [
        'page_id',
        'title',
        'subtitle',
        'button_text',
        'button_link',
        'status',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'button_text',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
