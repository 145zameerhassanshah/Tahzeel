<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class TasheelServiceController extends Controller
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



    public function governmentTransactions()
    {
        $page = $this->getPageBySlug('government-transactions');
        return view('front.tasheel.government-transactions', compact('page'));
    }

    public function mohreServices()
    {
        $page = $this->getPageBySlug('mohre-services');
        return view('front.tasheel.mohre-services', compact('page'));
    }

    public function legalTranslation()
    {
        $page = $this->getPageBySlug('legal-translation');
        return view('front.tasheel.legal-translation', compact('page'));
    }
}
