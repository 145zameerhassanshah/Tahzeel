<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class DedServiceController extends Controller
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

    public function businessSetup()
    {
        $page = $this->getPageBySlug('business-setup-licensing');
        return view('front.ded-services.business-setup', compact('page'));
    }

    public function tradeNameReservation()
    {
        $page = $this->getPageBySlug('trade-name-reservation');
        return view('front.ded-services.trade-name', compact('page'));
    }

    public function initialApproval()
    {
        $page = $this->getPageBySlug('initial-approval');
        return view('front.ded-services.initial-approval', compact('page'));
    }

    public function licenseRenewal()
    {
        $page = $this->getPageBySlug('license-renewal-amendments');
        return view('front.ded-services.license-renewal', compact('page'));
    }

    public function deregistration()
    {
        $page = $this->getPageBySlug('company-deregistration');
        return view('front.ded-services.deregistration', compact('page'));
    }

    public function commercialPermits()
    {
        $page = $this->getPageBySlug('commercial-permits');
        return view('front.ded-services.commercial-permits', compact('page'));
    }
}
