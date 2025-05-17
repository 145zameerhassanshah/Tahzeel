<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class DocumentClearanceServiceController extends Controller
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


    public function governmentDocumentSubmission()
    {
        $page = $this->getPageBySlug('government-document-submission');
        return view('front.document-clearance.government-document', ['page' => $page]);
    }

    public function clearanceForVisaResidency()
    {
        $page = $this->getPageBySlug('clearance-for-visa-residency');
        return view('front.document-clearance.visa-residency', ['page' => $page]);
    }

    public function laborImmigrationDocuments()
    {
        $page = $this->getPageBySlug('labor-immigration-documents');
        return view('front.document-clearance.labor-immigration-document', ['page' => $page]);
    }

    public function corporateDocumentClearance()
    {
        $page = $this->getPageBySlug('corporate-document-clearance');
        return view('front.document-clearance.corporate-document', ['page' => $page]);
    }

    public function legalDocumentProcessing()
    {
        $page = $this->getPageBySlug('legal-document-processing');
        return view('front.document-clearance.legal-document', ['page' => $page]);
    }
}
