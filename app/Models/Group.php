<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'description',
    ];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }

    public function callToActions()
    {
        return $this->hasMany(CallToAction::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
