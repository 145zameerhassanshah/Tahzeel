<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DocumentRequired extends Model
{
    use HasTranslations;

    protected $fillable = [
        'page_id',
        'icon',
        'title',
        'description',
        'order_no',
        'status',
    ];

    public $translatable = [
        'title',
        'description',
    ];


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
