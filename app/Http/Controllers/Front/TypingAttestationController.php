<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class TypingAttestationController extends Controller
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

        return view("front.typing-attestation.$view", compact('page'));
    }

    public function policeClearance()
    {
        return $this->getPageBySlug('police-clearance', 'police-clearance');
    }

    public function newPassportRequest()
    {
        return $this->getPageBySlug('new-passport-request', 'new-passport-request');
    }

    public function passportRenewal()
    {
        return $this->getPageBySlug('passport-renewal', 'passport-renewal');
    }

    public function passportLostReport()
    {
        return $this->getPageBySlug('passport-lost-report', 'passport-lost-report');
    }

    public function mofaAttestation()
    {
        return $this->getPageBySlug('mofa-attestation', 'mofa-attestation');
    }

    public function powerOfAttorneyDrafting()
    {
        return $this->getPageBySlug('power-of-attorney-drafting', 'power-of-attorney-drafting');
    }

    public function documentTypingFormatting()
    {
        return $this->getPageBySlug('document-typing-formatting', 'document-typing-formatting');
    }
}