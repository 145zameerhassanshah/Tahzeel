<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class TypingAttestationController extends Controller
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

        return view("front.typing-attestation.$view", compact('page'));
    }

    public function policeClearance()
    {
        return $this->renderPage('police-clearance', 'police-clearance');
    }

    public function newPassportRequest()
    {
        return $this->renderPage('new-passport-request', 'new-passport-request');
    }

    public function passportRenewal()
    {
        return $this->renderPage('passport-renewal', 'passport-renewal');
    }

    public function passportLostReport()
    {
        return $this->renderPage('passport-lost-report', 'passport-lost-report');
    }

    public function mofaAttestation()
    {
        return $this->renderPage('mofa-attestation', 'mofa-attestation');
    }

    public function powerOfAttorneyDrafting()
    {
        return $this->renderPage('power-of-attorney-drafting', 'power-of-attorney-drafting');
    }

    public function documentTypingFormatting()
    {
        return $this->renderPage('document-typing-formatting', 'document-typing-formatting');
    }
}