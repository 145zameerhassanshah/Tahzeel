<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class BlockFeature extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'block_id', 
        'title', 
        'order_no',
    ];
    public $translatable = ['title', 'subtitle'];

    /**
     * Get the element that owns the feature.
     */
    public function block()
    {
        return $this->belongsTo(Block::class);
    }
}