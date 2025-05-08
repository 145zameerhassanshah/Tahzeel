<?php

namespace App\Http\Controllers\Front;


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
use App\Http\Controllers\Controller;

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
}