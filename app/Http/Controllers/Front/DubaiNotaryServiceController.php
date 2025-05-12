<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class DubaiNotaryServiceController extends Controller
{
    public function documentAuthentication()
    {
        $slug = 'document-authentication';
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

        return view('front.dubai-notary.authentication', compact('page'));
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

        return view('front.dubai-notary.transactions', compact('page'));
    }

    public function affidavitsDeclarations()
    {
        $slug = 'affidavits-and-declarations';
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

        return view('front.dubai-notary.affidavits-declarations', compact('page'));
    }

    public function powerOfAttorney()
    {
        $slug = 'power-of-attorney-poa-notarization';
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

        return view('front.dubai-notary.attorney', compact('page'));
    }
}
