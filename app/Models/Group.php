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

    public function heroSections()
    {
        return $this->hasMany(HeroSection::class);
    }

    public function introductionSections()
    {
        return $this->hasMany(IntroductionSection::class);
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
    public function sectionTitles()
    {
        return $this->hasMany(SectionTitle::class);
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

    public function whyChooseUs()
    {
        return $this->hasMany(WhyChooseUs::class);
    }

    public function documentRequired()
    {
        return $this->hasMany(DocumentRequired::class);
    }

    public function featureImages()
    {
        return $this->hasMany(FeatureImage::class);
    }

    public function whyUsImages()
    {
        return $this->hasMany(WhyUsImage::class);
    }
}
