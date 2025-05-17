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
        $slug = 'clearance-for-visa-residency';
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

        return view('front.document-clearance.visa-residency', ['page' => $page]);
    }

    public function laborImmigrationDocuments()
    {
        $slug = 'labor-immigration-documents';
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

        return view('front.document-clearance.labor-immigration-document', ['page' => $page]);
    }

    public function corporateDocumentClearance()
    {
        $slug = 'corporate-document-clearance';
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

        return view('front.document-clearance.corporate-document', ['page' => $page]);
    }

    public function legalDocumentProcessing()
    {
        $slug = 'legal-document-processing';
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

        return view('front.document-clearance.legal-document', ['page' => $page]);
    }
}
