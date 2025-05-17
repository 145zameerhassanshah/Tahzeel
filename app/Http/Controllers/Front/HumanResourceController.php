<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class HumanResourceController extends Controller
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


    public function manpowerRecruitment()
    {
        $page = $this->getPageBySlug('manpower-recruitment');
        return view('front.hr.manpower-recruitment', ['page' => $page]);
    }
    public function hrConsultancyServices()
    {
         $page = $this->getPageBySlug('hr-consultancy-services');
        return view('front.hr.hr-consultancy-services', ['page' => $page]);
    }

    public function employmentContracts()
    {
        $page = $this->getPageBySlug('employment-contracts');
        return view('front.hr.employment-contracts', ['page' => $page]);
    }

    public function workPermitsLaborCards()
    {
        $page = $this->getPageBySlug('work-permits-labor-cards');
        return view('front.hr.workPermits_LaborCards', ['page' => $page]);
    }

    public function employeeOnboardingCompliance()
    {
     $page = $this->getPageBySlug('employee-onboarding-compliance');
        return view('front.hr.employee-onboarding', ['page' => $page]);
    }
    public function payrollManagement()
    {
        $page = $this->getPageBySlug('payroll-management');
        return view('front.hr.payroll-management', ['page' => $page]);
    }
}
