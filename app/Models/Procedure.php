<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $casts = [
        'title'       => 'array', // Auto-converts to/from JSON
        'subtitle'    => 'array',
        'description' => 'array'
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}