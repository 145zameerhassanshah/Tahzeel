<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Bcategory extends Model
{
    use HasTranslations;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'status',
        'serial_number',
    ];

    public $translatable = ['name', 'description'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
