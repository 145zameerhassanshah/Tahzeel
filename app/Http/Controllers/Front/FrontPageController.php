<?php

namespace App\Http\Controllers\Front;
// Helpers
require_once app_path('Helpers/LanguageHelpers.php');

use App\Helpers\LanguageHelpers;
// Controllers
use App\Http\Controllers\Controller;
// Models
use App\Models\{
    Page,
    SectionTitle,
    IntroductionSection,
    HeroSection,
    Testimonial,
    Procedure,
    CallToAction,
    DocumentRequired,
    FeatureImage,
    PageGroup,
    WhyChooseUs,
    WhyUsImage,
    Feature,
    Enquiry,
    Service,
    User,
    Faq
};
// Mail/Notifications
use App\Mail\InquiryEmail;
use App\Notifications\InquiryNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
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
        // 'hero','section_title' ,'intro_section','features','faq','why_choose_us','testimonials','documents_required','procedure','cta','img_features'
        app()->setLocale(session('locale', 'en'));
        $locale = app()->getLocale();  // Current language ('en' or 'ar')
        $page = Page::where('slug', 'vat-return-filing')->firstOrFail();
        $pageGroups = PageGroup::where('page_id', $page->id)->get();
        // Get group IDs
        $hero_ection_id = $pageGroups->where('group_type', 'hero')->pluck('group_id')->first();
        $intro_section_id = $pageGroups->where('group_type', 'intro_section')->pluck('group_id')->first();
        $docs_group_id = $pageGroups->where('group_type', 'documents_required')->pluck('group_id')->first();
        $section_title_ids = $pageGroups->where('group_type', 'section_title')->pluck('group_id');
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
        $feature_image_data = FeatureImage::where('group_id', $img_feature_id)->get()->map(function ($feature_image_data) use ($locale) {
            return localizeFeatureImage($feature_image_data, $locale);
        });
        $procedure_data = Procedure::where('group_id', $procedure_id)->get()->map(function ($procedure_data) use ($locale) {
            return localizeProcedure($procedure_data, $locale);
        });
        $cta_data = CallToAction::where('group_id', $cta_id)->get()->map(function ($cta_data) use ($locale) {
            return localizeCTA($cta_data, $locale);
        });
        $testimonial_data = Testimonial::where('group_id', $testimonial_id)->get()->map(function ($testimonial_data) use ($locale) {
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
