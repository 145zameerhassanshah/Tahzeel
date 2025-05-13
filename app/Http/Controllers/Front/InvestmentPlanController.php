<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class InvestmentPlanController extends Controller
{
    protected function getPageBySlug($slug)
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

    public function globalInvestment()
    {
        $page = $this->getPageBySlug('global-investment-solutions');
        return view('front.investment-plans.global-investment', compact('page'));
    }

    public function investmentAdvisory()
    {
        $page = $this->getPageBySlug('investment-planning-advisory');
        return view('front.investment-plans.investment-advisory', compact('page'));
    }

    public function propertyInvestment()
    {
        $page = $this->getPageBySlug('property-investment-opportunities');
        return view('front.investment-plans.property-investment', compact('page'));
    }

    public function businessStrategy()
    {
        $page = $this->getPageBySlug('business-investment-strategies');
        return view('front.investment-plans.business-strategy', compact('page'));
    }

    public function riskManagement()
    {
        $page = $this->getPageBySlug('risk-management-diversification');
        return view('front.investment-plans.risk-management', compact('page'));
    }
}
