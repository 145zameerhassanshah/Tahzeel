<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class RealEstateController extends Controller
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

    public function propertyBuyingSelling()
    {
        $page = $this->getPageBySlug('property-buying-selling-assistance');
        return view('front.real-estate.property-buying-selling', ['page' => $page]);
    }

    public function realEstateTransactions()
    {
        $page = $this->getPageBySlug('real-estate-transactions');
        return view('front.real-estate.real-estate-transactions', ['page' => $page]);
    }

    public function propertyManagement()
    {
        $page = $this->getPageBySlug('property-management-solutions');
        return view('front.real-estate.property-management', ['page' => $page]);
    }

    public function rentalAgreements()
    {
        $page = $this->getPageBySlug('rental-agreements-renewals');
        return view('front.real-estate.rental-agreements', ['page' => $page]);
    }
}
