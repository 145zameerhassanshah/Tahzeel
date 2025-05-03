<?php
// PHP's cleaner grouped import
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
// 🔹 Helper Functions
require_once app_path('Helpers/LanguageHelpers.php');

use App\Helpers\LanguageHelpers;
// 🔹 Laravel Facades
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// 🔹 Mail & Notifications
use App\Mail\InquiryEmail;
use App\Notifications\InquiryNotification;
// 🔹 Models
use App\Models\{
    Bcategory,
    Blog,
    CallToAction,
    DocumentRequired,
    Faq,
    Feature,
    FeatureImage,
    Group,
    HeroSection,
    IntroductionSection,
    Page,
    PageGroup,
    Procedure,
    SectionTitle,
    Testimonial,
    Service,
    Enquiry,
    User
};

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
        app()->setLocale(session('locale', 'en'));
        $locale = app()->getLocale();
        $blogs = Blog::where('status', '1')->get();
        $categories = Bcategory::where('status', '1')->get();
        $localized_blog = $blogs->map(function ($item) use ($locale) {
            return localize_blog($item, $locale);
        });
        $localized_categories = $categories->map(function ($item) use ($locale) {
            return localize_blog_category($item, $locale);
        });
        return view('front.otherPages.blog', [
            'blogs' => $localized_blog,
            'bCategories' => $localized_categories,
        ]);
    }


    public function contactUs()
    {
        return view('front.otherPages.contactUs');
    }

    public function emirateId()
    {
        app()->setLocale(session('locale', 'en'));
        $locale = app()->getLocale();
        $testimonials = Testimonial::where('status', 'active')->get();
        $introSection = IntroductionSection::first(); // You could check if it's null here
        $sectionTitles = SectionTitle::where('status', 'active')->where('type', 'testimonial')->get();
    
        // Handle case where introSection is null
        if (!$introSection) {
            $introSection = new IntroductionSection(); // Provide a default empty object
            $introSection->images = json_encode([]); // Default empty array for images
        }
    
        $localized_testimonials = $testimonials->map(function ($item) use ($locale) {
            return localizeTestimonial($item, $locale);
        });
    
        $localized_section_titles = $sectionTitles->map(function ($item) use ($locale) {
            return localizeSectionTitle($item, $locale);
        });
    
        $localized_intro_section = localizeIntroductionSection($introSection, $locale);
        $sectionTitle = $localized_section_titles->first();
    
        return view('front.otherPages.emirateId', [
            'testimonials' => $localized_testimonials,
            'sectionTitle' => $sectionTitle,
            'introSection' => $localized_intro_section,
        ]);
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

    public function dhaServices()
    {
        return view('front.otherPages.dhaServices');
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
    public function manpowerRecruitment()
    {
        return view('front.otherPages.manpowerRecruitment');
    }
}
