<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class TasheelServiceController extends Controller
{
    protected function getPage($slug)
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

    public function governmentTransactions()
    {
        $slug = 'government-transactions';
        $page = $this->getPage($slug);
        return view('front.tasheel.government-transactions', compact('page'));
    }

    public function mohreServices()
    {
        $slug = 'mohre-services';
        $page = $this->getPage($slug);
        return view('front.tasheel.mohre-services', compact('page'));
    }

    public function legalTranslation()
    {
        $slug = 'legal-translation';
        $page = $this->getPage($slug);
        return view('front.tasheel.legal-translation', compact('page'));
    }
}
