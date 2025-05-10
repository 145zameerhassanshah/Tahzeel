<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    public function propertyBuyingSelling()
    {
        $slug = 'property-buying-selling-assistance';
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
        return view('front.real-estate.property-buying-selling', ['page' => $page]);
    }

    public function realEstateTransactions()
    {
        $slug = 'real-estate-transactions';
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
        return view('front.real-estate.real-estate-transactions', ['page' => $page]);
    }

    public function propertyManagement()
    {
        $slug = 'property-management-solutions';
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
        return view('front.real-estate.real-estate-transactions', ['page' => $page]);
    }

    public function rentalAgreements()
    {
        $slug = 'rental-agreements-renewals';
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
        return view('front.real-estate.real-estate-transactions', ['page' => $page]);
    }
}