<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasTranslations;
    protected $fillable = [
        'block_name',
        'title',
        'subtitle',
        'description',
        'icon',
        'image',
    ];

    public $translatable = [
        'title',
        'subtitle',
        'description'
    ];
    public function features()
    {
        return $this->hasMany(BlockFeature::class);
    }
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
