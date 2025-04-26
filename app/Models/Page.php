<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }

    public function callToActions()
    {
        return $this->hasMany(CallToAction::class);
    }

    public function sectionTitles()
    {
        return $this->hasMany(SectionTitle::class);
    }

    public function introductionSections()
    {
        return $this->hasMany(IntroductionSection::class);
    }

    public function heroSections()
    {
        return $this->hasMany(HeroSection::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function whyChooseUs()
    {
        return $this->hasMany(WhyChooseUs::class);
    }

    public function documentRequireds()
    {
        return $this->hasMany(DocumentRequired::class);
    }

    public function whyUsImages()
    {
        return $this->hasMany(WhyUsImage::class);
    }

    public function featureImages()
    {
        return $this->hasMany(FeatureImage::class);
    }
}