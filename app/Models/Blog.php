<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasTranslations;
    use HasTranslations;

    protected $fillable = [
        'bcategory_id',
        'title',
        'content',
        'slug',
        'image',
        'status',
        'meta_keywords',
        'meta_description',
        'serial_number',
    ];

    public $translatable = ['title', 'content'];

    public function bcategory()
    {
        // return $this->belongsTo(Bcategory::class);
        return $this->belongsTo(Bcategory::class, 'bcategory_id');
    }
}