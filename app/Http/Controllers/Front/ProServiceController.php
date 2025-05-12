<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class ProServiceController extends Controller
{
    protected function loadPage($slug)
    {
        return Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'testimonials',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();
    }

    public function documentClearance()
    {
        $page = $this->loadPage('document-clearance-submission');
        return view('front.pro-services.document-clearance', compact('page'));
    }

    public function visaApplications()
    {
        $page = $this->loadPage('visa-applications-renewals');
        return view('front.pro-services.visa-applications', compact('page'));
    }

    public function laborImmigration()
    {
        $page = $this->loadPage('labor-immigration-services');
        return view('front.pro-services.labor_and_immigration', compact('page'));
    }

    public function tradeLicense()
    {
        $page = $this->loadPage('trade-license-processing');
        return view('front.pro-services.trade_license', compact('page'));
    }

    public function attestationNotarization()
    {
        $page = $this->loadPage('attestation-notarization-assistance');
        return view('front.pro-services.attestation_and_notarization', compact('page'));
    }

    public function companyRegistration()
    {
        $page = $this->loadPage('company-registration-setup');
        return view('front.pro-services.company_registration', compact('page'));
    }

    public function governmentLiaison()
    {
        $page = $this->loadPage('government-liaison-services');
        return view('front.pro-services.government_liaison', compact('page'));
    }
}
