<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class LegalServicesController extends Controller
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


    protected function getPageBySlug(string $slug, string $view)
    {
        $page = Page::with([
            'elements',
            'blocks',
            'sections',
            'callToActions',
            'sectionTitles',
            'faqs',
            'heroSections',
            'testimonials',
            'introductionSections',
            'whyUsImages'
        ])->where('slug', $slug)->firstOrFail();

        return view("front.legal-services.$view", compact('page'));
    }

    public function document_drafting()
    {
        return $this->getPageBySlug('document-drafting', 'document-drafting');
    }

    public function consultations()
    {
        return $this->getPageBySlug('consultations', 'consultations');
    }

    public function representation()
    {
        return $this->getPageBySlug('representation', 'representation');
    }

    public function dispute_resolution()
    {
        return $this->getPageBySlug('dispute-resolution', 'dispute-resolution');
    }
}