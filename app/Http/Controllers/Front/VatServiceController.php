<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class VatServiceController extends Controller
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

    public function registration()
    {
        $page = $this->loadPage('vat-registration-for-businesses');
        return view('front.vat-services.registration', compact('page'));
    }

    public function filing()
    {
        $page = $this->loadPage('vat-return-filing');
        return view('front.vat-services.filing', compact('page'));
    }

    public function consultation()
    {
        $page = $this->loadPage('vat-consultation-and-compliance');
        return view('front.vat-services.consultation', compact('page'));
    }

    public function deregistration()
    {
        $page = $this->loadPage('vat-deregistration');
        return view('front.vat-services.deregistration', compact('page'));
    }
}
