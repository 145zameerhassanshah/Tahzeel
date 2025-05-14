<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class VATRegController extends Controller
{
    public function vat_registration_for_businesses()
    {
        $slug = 'vat-registration';
        $page = Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'procedures',
            'whyChooseUs',
            'heroSections',
            'testimonials',
            'introductionSections',
            'features',
            'featureImages',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.vat.vat-reg-business', ['page' => $page]);
    }

    public function vat_return_filing()
    {
        $slug = 'vat-return-filing';
        $page = Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'testimonials',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.vat.vat-return-filling', ['page' => $page]);
    }

    public function vat_consultation_compliance()
    {
        $slug = 'vat-consultation-compliance';
        $page = Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'testimonials',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.vat.vat_consultation', ['page' => $page]);
    }

    public function vat_deregistration()
    {
        $slug = 'vat-deregistration';
        $page = Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'testimonials',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.vat.vat_deregistration', ['page' => $page]);
    }
}