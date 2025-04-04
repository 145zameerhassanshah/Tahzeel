<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $fillable = ['name', 'testimonial', 'designation', 'image'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
