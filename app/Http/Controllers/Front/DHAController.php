<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class DHAController extends Controller
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
        return view("front.dha-services.$view", compact('page'));
    }

    public function medicalFitnessTests()
    {
        return $this->renderPage('medical-fitness-tests', 'medical-fitness-tests');
    }

    public function healthInsuranceApprovals()
    {
        return $this->renderPage('health-insurance-approvals', 'health-insurance-approvals');
    }
}