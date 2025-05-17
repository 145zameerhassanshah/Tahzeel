<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class DHAController extends Controller
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

    public function medicalFitnessTests()
    {
        $page = $this->getPageBySlug('medical-fitness-tests');
        return view('front.dha-services.medical-fitness-tests', compact('page'));
    }

     public function healthInsuranceApprovals()
    {
        $page = $this->getPageBySlug('health-insurance-approvals');
        return view('front.dha-services.health-insurance-approvals', compact('page'));
    }
}
