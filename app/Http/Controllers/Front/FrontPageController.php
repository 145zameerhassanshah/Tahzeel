<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Notifications\InquiryNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;
use App\Helpers\LanguageHelpers;
use App\Models\Page;
use App\Models\Procedure;
use App\Models\CallToAction;
use App\Models\SectionTitle;
use App\Models\IntroductionSection;
use App\Models\HeroSection;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use App\Models\DocumentRequired;
use App\Models\WhyUsImage;
use App\Models\FeatureImage;

use App\Models\Enquiry;
use App\Models\Service;
use App\Mail\InquiryEmail;
use App\Models\User;

class FrontPageController extends Controller
{
    // 'hero', 'section_title' , 'intro_section', 'features', 'faq', 'why_choose_us',
    //'testimonials', 'documents_required', 'procedure', 'cta','img_features'


    public function vatBusiness()
    {
        app()->setLocale(session('locale', 'en'));
        $locale = app()->getLocale();  // Current language ('en' or 'ar')
        $page = Page::where('slug', 'vat-registration-for-businesses')->firstOrFail();

        // In the PageController or wherever you're fetching the data
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
        ])
        ->findOrFail($page->id);

        return $page_detail;


              $data['hero_section'] = localizeHeroSection($page_detail->heroSections, $locale);
              $data['intro_section'] = localizeIntroductionSection($page_detail->introductionSections, $locale);

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
}
