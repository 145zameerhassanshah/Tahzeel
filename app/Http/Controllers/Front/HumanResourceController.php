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
        $slug = 'hr-consultancy-services';
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


<<<<<<< HEAD
=======
<<<<<<< HEAD


   


=======
>>>>>>> 6fd6e13189ccae5b49e7dfc1dcd3a630d33af46e
>>>>>>> 54e1aedfdbb10d950b5f4f55c41e6075f409747e
    public function employmentContracts()
    {
        $slug = 'employment-contracts';
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
        $slug = 'work-permits-labor-cards';
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
        return view('front.hr.workPermits_LaborCards', ['page' => $page]);
    }

    public function employeeOnboardingCompliance()
    {
        $slug = 'employee-onboarding-compliance';
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
        $slug = 'payroll-management';
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