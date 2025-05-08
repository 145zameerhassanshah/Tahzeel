<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Page, SectionTitle, IntroductionSection, HeroSection, Testimonial, Procedure, CallToAction, DocumentRequired, FeatureImage, PageGroup, Enquiry, Service, User, WhyChooseUs, WhyUsImage, Feature, Faq};
use App\Mail\InquiryEmail;
use App\Notifications\InquiryNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function pagedetail($slug)
    {
        $page = Page::with([
            'procedures',
            'callToActions',
            'sectionTitles',
            'introductionSections',
            'heroSections',
            'features',
            'faqs',
            'testimonials',
            'whyChooseUs',
            'documentRequireds',
            'whyUsImages',
            'featureImages',
            'sections'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.page-detail', ['page' => $page]);
    }

    public function emirateId()
    {
        return view('front.otherPages.emirateId');
    }
    public function visitVisa()
    {
        return view('front.otherPages.visitVisa');
    }
    public function domesticWorkerVisa()
    {
        return view('front.otherPages.domesticWorkerVisa');
    }
    public function medicalFitnessTest()
    {
        return view('front.otherPages.medicalFitnessTest');
    }

    public function residencyVisa()
    {
        $page = Page::with([
            'procedures',
            'callToActions',
            'sectionTitles',
            'introductionSections',
            'heroSections',
            'faqs',
            'testimonials',
            'whyChooseUs',
            'documentRequireds',
            'whyUsImages',
            'features',
            'featureImages',
            'sections'
        ])->where('slug', 'residency-visa')->firstOrFail();
        return view('front.otherPages.residencyVisa', compact('page'));
    }

    public function openFile()
    {
        $page = Page::with([
            'procedures',
            'callToActions',
            'sectionTitles',
            'introductionSections',
            'heroSections',
            'features',
            'faqs',
            'testimonials',
            'whyChooseUs',
            'documentRequireds',
            'whyUsImages',
            'featureImages',
            'sections'
        ])->where('slug', 'open-file')->firstOrFail();
        return view('front.otherPages.openfile', compact('page'));
    }
    public function entryPermit()
    {
        return view('front.otherPages.entryPermits');
    }

    public function visaCancellation()
    {
        return view('front.otherPages.visaCancellation');
    }

    public function notaryDocumentAuthentication()
    {
        return view('front.otherPages.notaryDocumentAuthentication');
    }

    public function DEDbusinessLicense()
    {
        return view('front.otherPages.DED-businessLicense');
    }

    public function test()
    {
        $service = Service::with('serviceFeatures')->where('status', 'publish')->first();
        if (isset($service)) {
            return view('front.otherPages.test', compact('service'));
        } else {
            return back();
        }
    }
    public function storeInquiry(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
        $inquiry = new Enquiry();
        $inquiry->name = $request->name;
        $inquiry->phone_no = $request->phone;
        $inquiry->email = $request->email;
        $inquiry->enquiry_message = $request->message;
        $inquiry->save();
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new InquiryEmail($inquiry));
        }
        foreach ($users as $user) {
            $user->notify(new InquiryNotification($inquiry));
        }
        return response()->json([
            'success' => true,
            'message' => 'Inquiry submitted successfully!',
        ]);
    }

    public function vatBusiness1()
    {
        $hero = HeroSection::find(2);
        return $hero->getTranslation('title', 'ar'); // كرسي
        app()->setLocale(session('locale', 'en'));
        $locale = app()->getLocale();  // Current language ('en' or 'ar')
        $data['page'] = Page::where('slug', 'vat-registration-for-businesses')->firstOrFail();
        $page_detail = Page::with([
            'procedures',
            'callToActions',
            'sectionTitles',
            'introductionSections',
            'heroSections',
            'features',
            'faqs',
            'testimonials',
            'whyChooseUs',
            'documentRequireds',
            'whyUsImages',
            'featureImages'
        ])->findOrFail($data['page']->id);
        $data['hero_sections'] = $page_detail->heroSections->map(function ($section) use ($locale) {
            return localizeHeroSection($section, $locale);
        });
        $data['intro_sections'] = $page_detail->introductionSections->map(function ($item) use ($locale) {
            return localizeIntroductionSection($item, $locale);
        });
        $data['section_titles'] = $page_detail->sectionTitles->map(function ($item) use ($locale) {
            return localizeSectionTitle($item, $locale);
        });
        $data['call_to_actions'] = $page_detail->callToActions->map(function ($item) use ($locale) {
            return localizeCTA($item, $locale);
        });
        $data['procedures'] = $page_detail->procedures->map(function ($item) use ($locale) {
            return localizeProcedure($item, $locale);
        });
        $data['feature_images'] = $page_detail->featureImages->map(function ($item) use ($locale) {
            return localizeFeatureImage($item, $locale);
        });
        $data['testimonials'] = $page_detail->testimonials->map(function ($item) use ($locale) {
            return localizeTestimonial($item, $locale);
        });
        $data['document_requireds'] = $page_detail->documentRequireds->map(function ($item) use ($locale) {
            return localizeDocumentRequired($item, $locale);
        });
        $data['faqs'] = $page_detail->faqs->map(function ($item) use ($locale) {
            return localizeFaq($item, $locale);
        });
        $data['features'] = $page_detail->features->map(function ($item) use ($locale) {
            return localizeFeature($item, $locale);
        });
        $data['why_choose_us'] = $page_detail->whyChooseUs->map(function ($item) use ($locale) {
            return localizeWhyChooseUs($item, $locale);
        });
        // dd($data['why_choose_us']);
        $data['why_us_images'] = $page_detail->whyUsImages->map(function ($item) use ($locale) {
            return localizeWhyUsImage($item, $locale);
        });
        //return $data['intro_sections'];
        return view('front.vat.vat-reg-business', $data);
    }

    public function vatBusiness()
    {
        $hero = HeroSection::find(2);
        $locale = app()->getLocale();  // Current language ('en' or 'ar')
        $data['page'] = Page::where('slug', 'vat-registration-for-businesses')->firstOrFail();
        $page_detail = Page::with([
            'procedures',
            'callToActions',
            'sectionTitles',
            'introductionSections',
            'heroSections',
            'features',
            'faqs',
            'testimonials',
            'whyChooseUs',
            'documentRequireds',
            'whyUsImages',
            'featureImages'
        ])->findOrFail($data['page']->id);
        $data['testimonials'] = Testimonial::all();
        // return $data['intro_sections'];
        return view('front.vat.vat-reg-business', $data);
    }

    public function vatReturnFilling()
    {

        // return  $data['testimonials'];
        return view('front.vat.vat-return-filling');
    }

    public function testPage()
    {
        $slug = 'corporate-bank-account-setup';
        $page = Page::with([
            'elements',
            'blocks',
            'sections'
        ])->where('slug', $slug)->firstOrFail();
        return view('front.test-page', ['page' => $page]);
    }
}