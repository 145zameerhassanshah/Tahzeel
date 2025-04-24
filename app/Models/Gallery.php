<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasTranslations;
    protected $fillable = [
        'category_id',
        'status',
        'title',
        'image',
        'video_link',
        'serial_number',
    ];


    public function gcategory()
    {
        return $this->belongsTo(Gcategory::class, 'category_id');
    }

}
