<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class LegalServicesController extends Controller
{
    protected function renderPage(string $slug, string $view)
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
        return $this->renderPage('document-drafting', 'document-drafting');
    }

    public function consultations()
    {
        return $this->renderPage('consultations', 'consultations');
    }

    public function representation()
    {
        return $this->renderPage('representation', 'representation');
    }

    public function dispute_resolution()
    {
        return $this->renderPage('dispute-resolution', 'dispute-resolution');
    }
}