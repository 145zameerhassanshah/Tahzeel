<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class DubaiNotaryServiceController extends Controller
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


    public function documentAuthentication()
    {
        $page = $this->getPageBySlug('document-authentication');
        return view('front.dubai-notary.authentication', compact('page'));
    }

    public function realEstateTransactions()
    {
        $page = $this->getPageBySlug('real-estate-transaction');
        return view('front.dubai-notary.transactions', compact('page'));
    }

    public function affidavitsDeclarations()
    {
        $page = $this->getPageBySlug('affidavits-and-declarations');
        return view('front.dubai-notary.affidavits-declarations', compact('page'));
    }

    public function powerOfAttorney()
    {
        $page = $this->getPageBySlug('power-of-attorney-poa-notarization');
        return view('front.dubai-notary.attorney', compact('page'));
    }
}
