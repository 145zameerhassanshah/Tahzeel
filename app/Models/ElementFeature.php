<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class ElementFeature extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'element_id', 
        'title', 
        'description', 
        'order_no',
    ];
    public $translatable = ['title', 'subtitle', 'description'];

    /**
     * Get the element that owns the feature.
     */
    public function element()
    {
        return $this->belongsTo(Element::class);
    }
}


