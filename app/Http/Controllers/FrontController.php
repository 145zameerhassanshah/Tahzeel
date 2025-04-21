<?php
namespace App\Http\Controllers;

require_once app_path('Helpers/LanguageHelpers.php');

use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\InquiryEmail;
use App\Models\User;
use App\Models\Page;
use App\Models\Group;
use App\Models\PageGroup;
use App\Models\CallToAction;
use App\Models\Faq;
use App\Models\IntroductionSection;
use App\Models\Feature;
use App\Models\HeroSection;
use App\Models\Testimonial;
use App\Models\SectionTitle;
use App\Notifications\InquiryNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Helpers\LanguageHelpers;
use App\Models\DocumentRequired;
use App\Models\FeatureImage;
use App\Models\Procedure;

class FrontController extends Controller
{
    public function index()
    {
        $data['services'] = Service::where('status', 'publish')->orderBy('order_no', 'asc')->get();
        return view('front.home.index', $data);
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->where('status', 'publish')->first();
        return view('front.service.detail', compact('service'));
    }
    public function aboutUs()
    {
        return view('front.otherPages.aboutUs');
    }
    public function amrServices()
    {
        return view('front.otherPages.amrServices');
    }
    public function blog()
    {
        return view('front.otherPages.blog');
    }
    public function contactUs()
    {
        return view('front.otherPages.contactUs');
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
        return view('front.otherPages.residencyVisa');
    }

    public function openFile()
    {
        return view('front.otherPages.openfile');
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

    public function vatBusiness()
    {
        // 'hero', 'section_title' , 'intro_section', 'features', 'faq', 'why_choose_us',
        //'testimonials', 'documents_required', 'procedure', 'cta','img_features'

        app()->setLocale(session('locale', 'en'));

        $locale = app()->getLocale();  // Current language ('en' or 'ar')

        $page = Page::where('slug', 'vat-registration-for-businesses')->firstOrFail();
        $pageGroups = PageGroup::where('page_id', $page->id)->get();

            // Get group IDs
            $hero_section_id = $pageGroups->where('group_type', 'hero')->pluck('group_id')->first();
            $intro_section_id = $pageGroups->where('group_type', 'intro_section')->pluck('group_id')->first();
            $docs_group_id = $pageGroups->where('group_type', 'documents_required')->pluck('group_id')->first();
            $faq_group_id = $pageGroups->where('group_type', 'faq')->pluck('group_id')->first();
            $section_title_ids = $pageGroups->where('group_type', 'section_title')->pluck('group_id');


              // Fetching only hero_section with localization
              $hero_section_data = HeroSection::where('group_id', $hero_section_id)->first();
              $intro_section_data = IntroductionSection::where('group_id', $intro_section_id)->first();
              $section_title_data = SectionTitle::whereIn('group_id', $section_title_ids)->get()->map(function ($sectionTitle) use ($locale) {
                                        return localizeSectionTitle($sectionTitle, $locale);
                                    });
            $docs_data = DocumentRequired::where('group_id', $docs_group_id)->get()->map(function ($docs_data) use ($locale) {
                                        return localizeDocumentRequired($docs_data, $locale);
                                    });

            $faqs_data = Faq::where('group_id', $faq_group_id)->get()->map(function ($faqs_data) use ($locale) {
                return localizeFaq($faqs_data, $locale);
            });



              // Apply the localization using your helper function
              $data['hero_section'] = localizeHeroSection($hero_section_data, $locale);
              $data['intro_section'] = localizeIntroductionSection($intro_section_data, $locale);
              $data['docs'] = $docs_data;
              $data['faqs'] = $faqs_data;
              $data['feature_title'] = $section_title_data->where('type', 'feature')->first();



            return view('front.vat.vat-reg-business', $data);
        }


    public function vatReturnFilling()
    {
        // 'hero', 'section_title' , 'intro_section', 'features', 'faq', 'why_choose_us',
        //'testimonials', 'documents_required', 'procedure', 'cta','img_features'

        app()->setLocale(session('locale', 'en'));

        $locale = app()->getLocale();  // Current language ('en' or 'ar')

        $page = Page::where('slug', 'vat-return-filing')->firstOrFail();
        $pageGroups = PageGroup::where('page_id', $page->id)->get();

        // Get group IDs
        $hero_ection_id = $pageGroups->where('group_type', 'hero')->pluck('group_id')->first();
        $intro_section_id = $pageGroups->where('group_type', 'intro_section')->pluck('group_id')->first();
        $docs_group_id = $pageGroups->where('group_type', 'documents_required')->pluck('group_id')->first();
        $section_title_ids = $pageGroups->where('group_type', 'section_title')->pluck( 'group_id');
        $img_feature_id = $pageGroups->where('group_type', 'feature_img')->pluck('group_id')->first();
        $procedure_id = $pageGroups->where('group_type', 'procedure')->pluck('group_id')->first();
        $cta_id = $pageGroups->where('group_type', 'cta')->pluck('group_id')->first();
        $testimonial_id = $pageGroups->where('group_type', 'testimonials')->pluck('group_id')->first();

        // dd($testimonial_id);

        // Fetching only hero_section with localization
        $hero_section_data = HeroSection::where('group_id', $hero_ection_id)->first();
        $intro_section_data = IntroductionSection::where('group_id', $intro_section_id)->first();

        $section_title_data = SectionTitle::whereIn('group_id', $section_title_ids)->get()->map(function ($sectionTitle) use ($locale) {
                                return localizeSectionTitle($sectionTitle, $locale);
                                });
        $docs_data = DocumentRequired::where('group_id', $docs_group_id)->get()->map(function ($docs) use ($locale) {
                                    return localizeDocumentRequired($docs, $locale);
                                });

        $feature_image_data = FeatureImage::where('group_id', $img_feature_id)->get()->map(function($feature_image_data) use ($locale) {
            return localizeFeatureImage($feature_image_data, $locale);
        });

        $procedure_data = Procedure::where('group_id', $procedure_id)->get()->map(function($procedure_data) use ($locale){
            return localizeProcedure($procedure_data, $locale);
        });

        $cta_data = CallToAction::where('group_id', $cta_id)->get()->map(function($cta_data) use ($locale){
            return localizeCTA($cta_data, $locale);
        });

        $testimonial_data = Testimonial::where('group_id', $testimonial_id)->get()->map(function($testimonial_data) use ($locale){
            return localizeTestimonial($testimonial_data, $locale);
        });


        // dd($testimonial_data);


        // Apply the localization using your helper function
        $data['hero_section'] = localizeHeroSection($hero_section_data, $locale);
        $data['intro_section'] = localizeIntroductionSection($intro_section_data, $locale);
        $data['docs'] = $docs_data;
        $data['feature_title'] = $section_title_data->where('type', 'feature')->first();
        $data['feature_images'] = $feature_image_data;
        $data['procedures'] = $procedure_data;
        $data['cta'] = $cta_data;
        $data['testimonials'] = $testimonial_data;

        // return  $data['testimonials'];

        return view('front.vat.vat-return-filling', $data);
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






}
