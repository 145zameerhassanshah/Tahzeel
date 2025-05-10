<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    public function manpowerRecruitment()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.manpower-recruitment', ['page' => $page]);
    }


    public function hrConsultancyServices()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.hr-consultancy-services', ['page' => $page]);
    }


    public function employmentContracts()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.employment-contracts', ['page' => $page]);
    }

    public function workPermitsLaborCards()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.workPermits_LaborCards.blade', ['page' => $page]);
    }

    public function employeeOnboardingCompliance()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.employee-onboarding', ['page' => $page]);
    }


    public function payrollManagement()
    {
        $slug = 'manpower-recruitment';
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
        return view('front.hr.payroll-management', ['page' => $page]);
    }
}
