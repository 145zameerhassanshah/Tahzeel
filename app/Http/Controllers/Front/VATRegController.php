<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class VATRegController extends Controller

{

            // 'procedures',
            // 'callToActions',
            // 'sectionTitles',
            // 'introductionSections',
            // 'heroSections',
            // 'faqs',
            // 'testimonials',
            // 'whyChooseUs',
            // 'documentRequireds',
            // 'whyUsImages',
            // 'features',
            // 'featureImages',
            // 'sections'
            // 'elements',
            // 'blocks',

    protected function getPageBySlug($slug)
    {
        return Page::with([
            'introductionSections',
            'whyUsImages',
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'testimonials'
        ])->where('slug', $slug)->firstOrFail();
    }

    public function vat_registration_for_businesses()
    {
        $page = $this->getPageBySlug('vat-registration');
        return view('front.vat.vat-reg-business', compact('page'));
    }

     public function vat_return_filing()
    {
        $page = $this->getPageBySlug('vat-return-filing');
        return view('front.vat.vat-return-filling', compact('page'));
    }

     public function vat_consultation_compliance()
    {
        $page = $this->getPageBySlug('vat-consultation-compliance');
        return view('front.vat.vat_consultation', compact('page'));
    }

     public function vat_deregistration()
    {
        $page = $this->getPageBySlug('vat-deregistration');
        return view('front.vat.vat_deregistration', compact('page'));
    }

}
