<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasTranslations;

    protected $fillable = [
        'page_id',
        'name',
        'feedback',
        'designation',
        'image',
        'order_no',
        'status',
    ];

    // Define translatable fields
    public $translatable = ['name', 'feedback', 'designation'];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
