<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class BankServiceController extends Controller
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

    public function corporate()
    {
        $page = $this->getPageBySlug('corporate-bank-account-setup');
        return view('front.bank-services.corporate', compact('page'));
    }

    public function personal()
    {
        $page = $this->getPageBySlug('personal-bank-account-assistance');
        return view('front.bank-services.personal', compact('page'));
    }

    public function consultation()
    {
        $page = $this->getPageBySlug('business-banking-consultation');
        return view('front.bank-services.consultation', compact('page'));
    }

    public function online()
    {
        $page = $this->getPageBySlug('online-banking-solutions');
        return view('front.bank-services.online', compact('page'));
    }
}
