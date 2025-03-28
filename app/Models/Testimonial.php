<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $fillable = ['name', 'testimonial', 'designation', 'image'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
