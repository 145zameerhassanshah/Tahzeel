<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Middleware
use App\Http\Middleware\Localization;
use App\Http\Middleware\SetLocale;
// Models
use App\Models\Enquiry;
// Frontend Controllers
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\RealEstateController;
use App\Http\Controllers\Front\VATRegController;
use App\Http\Controllers\Front\TypingAttestationController;
use App\Http\Controllers\{
    DashboardController,
    ProfileController
};
use App\Http\Controllers\Admin\{
    BcategoryController,
    BlogController,
    BlockController,
    BulkDeleteController,
    CallToActionController,
    DocumentRequiredController,
    EnquiryController,
    FaqController,
    FeatureController,
    FeatureImageController,
    GalleryController,
    GcategoryController,
    GroupController,
    HeroSectionController,
    IntroSectionController,
    JcategoryController,
    JobController,
    NotificationController,
    PageController,
    PartnerController,
    ProcedureController,
    SectionTitleController,
    ServiceCategoryController,
    ServiceController,
    ServiceSectionController,
    SettingController,
    TestimonialController,
    UserController,
    WhyChooseUsController,
    WhyUsImageController,
    PageSectionController,
    ElementController,
    PackageController
};
use App\Http\Controllers\Front\DHAController;
use App\Http\Controllers\Front\LegalServicesController;

Route::get('/pending-user', [UserController::class, 'pendingUser'])->name('pending.user');
Route::get('/blocked-user', [UserController::class, 'blockedUser'])->name('blocked.user');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('user.profile.edit');
Route::post('/update-Profile', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
Route::post('/update-Password', [ProfileController::class, 'updatePassword'])->name('user.password.update');

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'status'])->group(function () {
    Route::middleware(['auth', 'user'])->group(function () {
        Route::get('/user-dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
    });
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin-dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        // profile routes
        Route::get('/editProfile', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
        Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
        Route::post('/updatePassword', [ProfileController::class, 'updatePassword'])->name('admin.password.update');
        // user routes
        Route::get('/users', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/add-user', [UserController::class, 'add'])->name('admin.user.add');
        Route::post('/store-user', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/update-user/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::post('/delete-user/{id}', [UserController::class, 'delete'])->name('admin.user.delete');

        Route::post('/makependingUser/{id}', [UserController::class, 'makependingUser'])->name('admin.user.makependingUser');
        Route::post('/makeapprovedUser/{id}', [UserController::class, 'makeapprovedUser'])->name('admin.user.makeapprovedUser');
        Route::post('/makeblockedUser/{id}', [UserController::class, 'makeblockedUser'])->name('admin.user.makeblockedUser');

        Route::get('/pendingUsers', [UserController::class, 'pendingUsers'])->name('admin.user.pendingUsers');
        Route::get('/approvedUsers', [UserController::class, 'approvedUsers'])->name('admin.user.approvedUsers');
        Route::get('/blockedUsers', [UserController::class, 'blockedUsers'])->name('admin.user.blockedUsers');
        // Bulk Delete Routes:-
        Route::get('bulk/deletes', [BulkDeleteController::class, 'bulkDelete'])->name('back.bulk.delete');
        // Page Routes:-
        Route::get('/pages', [PageController::class, 'pagelist'])->name('admin.page.index');
        Route::get('/page-detail-old/{slug}', [PageController::class, 'oldDetail'])->name('admin.page.detail');
        Route::get('/page-detail/{slug}', [PageController::class, 'detail'])->name('admin.page.detail');
        Route::get('/add-groups/{id}', [PageController::class, 'addGroupstoPage'])->name('admin.page.add-groups');
        Route::post('/store-groups/{id}', [PageController::class, 'storeGroupstoPage'])->name('admin.page.store-groups');
        Route::get('/edit-page-groups/{id}', [PageController::class, 'edit'])->name('admin.page.edit-groups');
        Route::post('/update-page-groups/{id}', [PageController::class, 'update'])->name('admin.page.update-groups');
        Route::post('/delete--page-groups/{id}', [PageController::class, 'deletePageGroup'])->name('admin.page.delete-groups');

        Route::get('/page/add', [PageController::class, 'add'])->name('admin.page.add');
        Route::post('/page/store', [PageController::class, 'store'])->name('admin.page.store');
        // Route::post('/page/store', [PageController::class, 'store'])->middleware(['auth', 'can:create-page']);
        Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
        Route::put('/page/update/{id}', [PageController::class, 'update'])->name('admin.page.update');
        Route::post('/page/delete/{id}', [PageController::class, 'delete'])->name('admin.page.delete');


        Route::resource('admin/pages', PageController::class)->except(['show']);
        Route::delete('admin/pages/{page}', [PageController::class, 'destroy'])->name('admin.page.destroy');

        // Partner Routes:-
        Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('/partner/add', [PartnerController::class, 'add'])->name('admin.partner.add');
        Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('/partner/delete/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');

        // Gallery Category Routes:-
        Route::get('/gallery-categories', [GcategoryController::class, 'gcategory'])->name('admin.gcategory.index');
        Route::get('/gallery-category/add', [GcategoryController::class, 'add'])->name('admin.gcategory.add');
        Route::post('/gallery-category/store', [GcategoryController::class, 'store'])->name('admin.gcategory.store');
        Route::get('/gallery-category/edit/{id}', [GcategoryController::class, 'edit'])->name('admin.gcategory.edit');
        Route::post('/gallery-category/update/{id}', [GcategoryController::class, 'update'])->name('admin.gcategory.update');
        Route::get('/gallery-category/delete/{id}', action: [GcategoryController::class, 'delete'])->name('admin.gcategory.delete');


        // Gallery Routes:-
        Route::get('/galleries', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::get('/gallery/add', [GalleryController::class, 'add'])->name('admin.gallery.add');
        Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::get('/gallery/delete/{id}', action: [GalleryController::class, 'delete'])->name('admin.gallery.delete');


        // Blog Category Routes:-
        Route::get('/blog-categories', [BcategoryController::class, 'bcategory'])->name('admin.bcategory.index');
        Route::get('/blog-category/add', [BcategoryController::class, 'add'])->name('admin.bcategory.add');
        Route::post('/blog-category/store', [BcategoryController::class, 'store'])->name('admin.bcategory.store');
        Route::get('/blog-category/edit/{id}', [BcategoryController::class, 'edit'])->name('admin.bcategory.edit');
        Route::post('/blog-category/update/{id}', [BcategoryController::class, 'update'])->name('admin.bcategory.update');
        Route::get('/blog-category/delete/{id}', action: [BcategoryController::class, 'delete'])->name('admin.bcategory.delete');


        // Blog Routes:-
        Route::get('/blogs', [BlogController::class, 'blog'])->name('admin.blog.index');
        Route::get('/blog/add', [BlogController::class, 'add'])->name('admin.blog.add');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('/blog/delete/{id}', action: [BlogController::class, 'delete'])->name('admin.blog.delete');

        // Job Routes:-
        Route::get('/jobs', [JobController::class, 'jobs'])->name('admin.job.index');
        Route::get('/job/add', [JobController::class, 'add'])->name('admin.job.add');
        Route::post('/job/store', [JobController::class, 'store'])->name('admin.job.store');
        Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('admin.job.edit');
        Route::post('/job/update/{id}', [JobController::class, 'update'])->name('admin.job.update');
        Route::get('/job/delete/{id}', action: [JobController::class, 'delete'])->name('admin.job.delete');

        // Job Category Routes:-
        Route::get('/job-categories', [JcategoryController::class, 'jcategory'])->name('admin.jcategory.index');
        Route::get('/job-category/add', [JcategoryController::class, 'add'])->name('admin.jcategory.add');
        Route::post('/job-category/store', [JcategoryController::class, 'store'])->name('admin.jcategory.store');
        Route::get('/job-category/edit/{id}', [JcategoryController::class, 'edit'])->name('admin.jcategory.edit');
        Route::post('/job-category/update/{id}', [JcategoryController::class, 'update'])->name('admin.jcategory.update');
        Route::get('/job-category/delete/{id}', action: [JcategoryController::class, 'delete'])->name('admin.jcategory.delete');


        // Feature Routes:-
        // Route::get('/features', [FeatureController::class, 'index'])->name('admin.feature.index');
        Route::get('/feature/{pageId}', [FeatureController::class, 'getByPageId'])->name('admin.feature');
        Route::get('/features/{id}/list', [FeatureController::class, 'list'])->name('admin.feature.list');
        Route::get('/feature/{id}/add', [FeatureController::class, 'add'])->name('admin.feature.add');
        Route::post('/feature/store', [FeatureController::class, 'store'])->name('admin.feature.store');
        Route::get('/feature/edit/{id}', [FeatureController::class, 'edit'])->name('admin.feature.edit');
        Route::put('/feature/update/{id}', [FeatureController::class, 'update'])->name('admin.feature.update');
        Route::delete('/feature/delete/{id}', [FeatureController::class, 'delete'])->name('admin.feature.delete');

        // Feature images Routes
        Route::get('/feature-images/{slug}', [FeatureImageController::class, 'index'])->name('admin.feature_image.index');
        Route::get('/feature-image/{slug}/add', [FeatureImageController::class, 'add'])->name('admin.feature_image.add');
        Route::post('/feature-image/store/{slug}', [FeatureImageController::class, 'store'])->name('admin.feature_image.store');
        Route::get('/feature-image/edit/{id}', [FeatureImageController::class, 'edit'])->name('admin.feature_image.edit');
        Route::put('/feature-image/update/{id}', [FeatureImageController::class, 'update'])->name('admin.feature_image.update');
        Route::post('/feature-image/delete/{id}', [FeatureImageController::class, 'delete'])->name('admin.feature_image.delete');

        // Why Choose Us Routes
        Route::get('/why-choose-us/{slug}', [WhyChooseUsController::class, 'index'])->name('admin.why-choose-us.index');
        Route::get('/why-choose-us/{slug}/add', [WhyChooseUsController::class, 'add'])->name('admin.why-choose-us.add');
        Route::post('/why-choose-us/store/{slug}', [WhyChooseUsController::class, 'store'])->name('admin.why-choose-us.store');
        Route::get('/why-choose-us/edit/{id}', [WhyChooseUsController::class, 'edit'])->name('admin.why-choose-us.edit');
        Route::put('/why-choose-us/update/{id}', [WhyChooseUsController::class, 'update'])->name('admin.why-choose-us.update');
        Route::post('/why-choose-us/delete/{id}', [WhyChooseUsController::class, 'delete'])->name('admin.why-choose-us.delete');

        // Documents Required Routes:-
        // Route::get('/document-required', [DocumentRequiredController::class, 'index'])->name('admin.document-required.index');
        Route::get('/document-required/{slug}', [DocumentRequiredController::class, 'index'])->name('admin.document-required.index');
        Route::get('/document-required/{slug}/add', [DocumentRequiredController::class, 'add'])->name('admin.document-required.add');
        Route::post('/document-required/store/{slug}', [DocumentRequiredController::class, 'store'])->name('admin.document-required.store');
        Route::get('/document-required/edit/{id}', [DocumentRequiredController::class, 'edit'])->name('admin.document-required.edit');
        Route::post('/document-required/update/{id}', [DocumentRequiredController::class, 'update'])->name('admin.document-required.update');
        Route::post('/document-required/delete/{id}', [DocumentRequiredController::class, 'delete'])->name('admin.document-required.delete');

        // Documents Required Routes:-
        // Route::get('/document-required', [DocumentRequiredController::class, 'index'])->name('admin.document-required.index');
        Route::get('/call-to-action/{slug}', [CallToActionController::class, 'index'])->name('admin.call-to-action.index');
        Route::get('/call-to-action/{slug}/add', [CallToActionController::class, 'add'])->name('admin.call-to-action.add');
        Route::post('/call-to-action/store/{slug}', [CallToActionController::class, 'store'])->name('admin.call-to-action.store');
        Route::get('/call-to-action/edit/{id}', [CallToActionController::class, 'edit'])->name('admin.call-to-action.edit');
        Route::post('/call-to-action/update/{id}', [CallToActionController::class, 'update'])->name('admin.call-to-action.update');
        Route::post('/call-to-action/delete/{id}', [CallToActionController::class, 'delete'])->name('admin.call-to-action.delete');

        // SectionTitle Routes
        Route::get('/section-titles/{slug}', [SectionTitleController::class, 'index'])->name('admin.section_title.index');
        Route::get('/section-titles/{slug}/list', [SectionTitleController::class, 'list'])->name('admin.section_title.list');
        Route::get('/section-title/{slug}/add', [SectionTitleController::class, 'add'])->name('admin.section_title.add');
        Route::post('/section-title/store/{slug}', [SectionTitleController::class, 'store'])->name('admin.section_title.store');
        Route::get('/section-title/edit/{id}', [SectionTitleController::class, 'edit'])->name('admin.section_title.edit');
        Route::post('/section-title/update/{id}', [SectionTitleController::class, 'update'])->name('admin.section_title.update');
        Route::post('/section-title/delete/{id}', [SectionTitleController::class, 'delete'])->name('admin.section_title.delete');
        // Route::get('/section-titles', [SectionTitleController::class, 'index'])->name('admin.section_title.index');

        Route::get('/page-section/{slug}', [PageSectionController::class, 'index'])->name('admin.page.section.index');
        Route::get('/page-section/add/{slug}', [PageSectionController::class, 'add'])->name('admin.page.section.add');
        Route::post('/page-section/store/{slug}', [PageSectionController::class, 'store'])->name('admin.page.section.store');
        Route::get('/page-section/edit/{id}', [PageSectionController::class, 'edit'])->name('admin.page.section.edit');
        Route::post('/page-section/update/{id}', [PageSectionController::class, 'update'])->name('admin.page.section.update');
        Route::post('/page-section/delete/{id}', [PageSectionController::class, 'delete'])->name('admin.page.section.delete');

        // Elements Routes
        Route::get('/element/{slug}', [ElementController::class, 'index'])->name('admin.element.index');
        Route::get('/element/add/{slug}', [ElementController::class, 'add'])->name('admin.element.add');
        Route::post('/element/store/{slug}', [ElementController::class, 'store'])->name('admin.element.store');
        Route::get('/element/edit/{id}', [ElementController::class, 'edit'])->name('admin.element.edit');
        Route::post('/element/update/{id}', [ElementController::class, 'update'])->name('admin.element.update');
        Route::post('/element/delete/{id}', [ElementController::class, 'delete'])->name('admin.element.delete');
        // End of Elements Routes

        // Blocks  Routes
        Route::get('/block/{slug}', [BlockController::class, 'index'])->name('admin.block.index');
        Route::get('/block/add/{slug}', [BlockController::class, 'add'])->name('admin.block.add');
        Route::post('/block/store/{slug}', [BlockController::class, 'store'])->name('admin.block.store');
        Route::get('/block/edit/{id}', [BlockController::class, 'edit'])->name('admin.block.edit');
        Route::post('/block/update/{id}', [BlockController::class, 'update'])->name('admin.block.update');
        Route::post('/block/delete/{id}', [BlockController::class, 'delete'])->name('admin.block.delete');
        // End of Blocks Routes

        Route::get('/admin/testimonials/{slug}', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
        Route::get('admin/testimonials/add/{slug}', [TestimonialController::class, 'add'])->name('admin.testimonial.add');
        Route::post('/testimonials/store/{slug}', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
        Route::get('admin/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
        Route::post('/admin/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::post('/admin/testimonials/delete/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');

        // Hero Sections Routes
        // Route::get('/hero-sections/{pageId}', [HeroSectionController::class, 'getByPageId'])->name('admin.hero_section.index');
        Route::get('/hero-sections/{slug}', [HeroSectionController::class, 'index'])->name('admin.hero_section.index');
        Route::get('/hero-section/{slug}/add', [HeroSectionController::class, 'add'])->name('admin.hero_section.add');
        Route::post('/hero-section/store/{slug}', [HeroSectionController::class, 'store'])->name('admin.hero_section.store');
        Route::get('/hero-section/edit/{id}', [HeroSectionController::class, 'edit'])->name('admin.hero_section.edit');
        Route::post('/hero-section/update/{id}', [HeroSectionController::class, 'update'])->name('admin.hero_section.update');
        Route::post('/hero-section/delete/{id}', [HeroSectionController::class, 'delete'])->name('admin.hero_section.delete');
        // Route::get('/hero-sections', [HeroSectionController::class, 'index'])->name('admin.hero_section.index');

        // Why Us Images Routes
        Route::get('/why-us-image/{slug}', [WhyUsImageController::class, 'index'])->name('admin.why-us-image.index');
        Route::get('/why-us-image/{slug}/add', [WhyUsImageController::class, 'add'])->name('admin.why-us-image.add');
        Route::post('/why-us-image/store/{slug}', [WhyUsImageController::class, 'store'])->name('admin.why-us-image.store');
        Route::get('/why-us-image/edit/{id}', [WhyUsImageController::class, 'edit'])->name('admin.why-us-image.edit');
        Route::post('/why-us-image/update/{id}', [WhyUsImageController::class, 'update'])->name('admin.why-us-image.update');
        Route::post('/why-us-image/delete/{id}', [WhyUsImageController::class, 'delete'])->name('admin.why-us-image.delete');
        // faqs Routes
        Route::get('/faqs/{slug}', [FaqController::class, 'index'])->name('admin.faq.index');
        Route::get('/faqs/{slug}/add', [FaqController::class, 'add'])->name('admin.faq.add');
       Route::post('/faqs/store/{slug}', [FaqController::class, 'store'])->name('admin.faq.store');
        Route::get('/faqs/edit/{id}', [FaqController::class, 'edit'])->name('admin.faq.edit');
        Route::put('/faqs/update/{id}', [FaqController::class, 'update'])->name('admin.faq.update');
        Route::delete('/faqs/delete/{id}', [FaqController::class, 'delete'])->name('admin.faq.delete');


        // Route::get('/admin/procedures/{pageId}', [ProcedureController::class, 'getByPageId'])->name('admin.procedures');
        Route::get('/admin/procedures/{slug}', [ProcedureController::class, 'index'])->name('admin.procedures.index');
        Route::get('/admin/procedures/add/{slug}', [ProcedureController::class, 'add'])->name('admin.procedures.add');
        Route::post('/procedures/store/{slug}', [ProcedureController::class, 'store'])->name('admin.procedures.store');
        Route::get('/admin/procedures/{id}/edit', [ProcedureController::class, 'edit'])->name('admin.procedures.edit');
        Route::post('/admin/procedures/update/{id}', [ProcedureController::class, 'update'])->name('admin.procedures.update');
        Route::post('/admin/procedures/{id}', [ProcedureController::class, 'delete'])->name('admin.procedures.delete');


        // Feature Routes:-
        // Route::get('/features', [FeatureController::class, 'index'])->name('admin.feature.index');
        Route::get('/features/{slug}', [FeatureController::class, 'index'])->name('admin.feature.index');
        Route::get('/feature/{slug}/add', [FeatureController::class, 'add'])->name('admin.feature.add');
        Route::post('/feature/store/{slug}', [FeatureController::class, 'store'])->name('admin.feature.store');
        Route::get('/feature/edit/{id}', [FeatureController::class, 'edit'])->name('admin.feature.edit');
        Route::post('/feature/update/{id}', [FeatureController::class, 'update'])->name('admin.feature.update');
        Route::post('/feature/delete/{id}', [FeatureController::class, 'delete'])->name('admin.feature.delete');

        // Feature Routes
        // Route::get('/feature-images/{pageId}', [FeatureImageController::class, 'index'])->name('admin.feature-image.index');
        // Route::get('/feature-images/{pageId}', [FeatureImageController::class, 'getByPageId'])->name('admin.feature-image.index');
        // Route::get('/feature-images/{slug}', [FeatureImageController::class, 'index'])->name('admin.feature-image.list');
        // Route::get('/feature-image/{slug}/add', [FeatureImageController::class, 'add'])->name('admin.feature-image.add');
        // Route::post('/feature-image/store/{slug}', [FeatureImageController::class, 'store'])->name('admin.feature-image.store');
        // Route::get('/feature-image/edit/{id}', [FeatureImageController::class, 'edit'])->name('admin.feature-image.edit');
        // Route::post('/feature-image/update/{id}', [FeatureImageController::class, 'update'])->name('admin.feature-image.update');
        // Route::post('/feature-image/delete/{id}', [FeatureImageController::class, 'delete'])->name('admin.feature-image.delete');

        // introduction Routes
        Route::get('/introduction-sections/{slug}', [IntroSectionController::class, 'index'])->name('admin.introduction_section.index');
        // Route::get('/introduction-sections/{id}/list', [IntroSectionController::class, 'list'])->name('admin.introduction_section.list');
        Route::get('/introduction-section/{slug}/add', [IntroSectionController::class, 'add'])->name('admin.introduction_section.add');
        Route::post('/introduction-section/store/{slug}', [IntroSectionController::class, 'store'])->name('admin.introduction_section.store');
        Route::get('/introduction-section/edit/{id}', [IntroSectionController::class, 'edit'])->name('admin.introduction_section.edit');
        Route::post('/introduction-section/update/{id}', [IntroSectionController::class, 'update'])->name('admin.introduction_section.update');
        Route::post('/introduction-section/delete/{id}', [IntroSectionController::class, 'delete'])->name('admin.introduction_section.delete');

        // // Intro Routes
        // Route::get('/Intro-sections/{pageId}', [IntroSectionController::class, 'getByPageId'])->name('admin.intro_section.index');
        // // Route::get('/Intro-sections', [IntroSectionController::class, 'index'])->name('admin.intro_section.index');
        // Route::get('/Intro-sections/{id}/list', [IntroSectionController::class, 'list'])->name('admin.intro_section.list');
        // Route::get('/Intro-section/{id}/add', [IntroSectionController::class, 'add'])->name('admin.intro_section.add');
        // Route::post('/Intro-section/store', [IntroSectionController::class, 'store'])->name('admin.intro_section.store');
        // Route::get('/Intro-section/edit/{id}', [IntroSectionController::class, 'edit'])->name('admin.intro_section.edit');
        // Route::put('/Intro-section/update/{id}', [IntroSectionController::class, 'update'])->name('admin.intro_section.update');
        // Route::post('/Intro-section/delete/{id}', [IntroSectionController::class, 'delete'])->name('admin.intro_section.delete');

        // Service Category Routes
        Route::get('/service-category', [ServiceCategoryController::class, 'index'])->name('admin.service.category.index');
        Route::get('/service-category/add', [ServiceCategoryController::class, 'add'])->name('admin.service.category.add');
        Route::post('/service-category/store', [ServiceCategoryController::class, 'store'])->name('admin.service.category.store');
        Route::get('/service-category/edit/{id}', [ServiceCategoryController::class, 'edit'])->name('admin.service.category.edit');
        Route::post('/service-category/update/{id}', [ServiceCategoryController::class, 'update'])->name('admin.service.category.update');
        Route::post('/service-category/delete/{id}', [ServiceCategoryController::class, 'delete'])->name('admin.service.category.delete');
        // End of Service Category Routes

        // Service Routes
        Route::get('/service', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('/service/add', [ServiceController::class, 'add'])->name('admin.service.add');
        Route::post('/service/store', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::post('/service/delete/{id}', [ServiceController::class, 'delete'])->name('admin.service.delete');
        // End of Service Routes


        //start package route
        Route::get('/package', [PackageController::class, 'index'])->name('admin.package.index');
        Route::get('/package/add', [PackageController::class, 'add'])->name('admin.package.add');
        Route::post('/package/store', [PackageController::class, 'store'])->name('admin.package.store');
        Route::get('/package/edit/{id}', [PackageController::class, 'edit'])->name('admin.package.edit');
        Route::put('/package/update/{id}', [PackageController::class, 'update'])->name('admin.package.update');
        Route::delete('/package/delete/{id}', [PackageController::class, 'delete'])->name('admin.package.delete');
        // End of package Routes

        // Service Section Routes
        Route::get('/service-section/{id}', [ServiceSectionController::class, 'index'])->name('admin.service.section.index');
        Route::get('/service-section/add/{id}', [ServiceSectionController::class, 'add'])->name('admin.service.section.add');
        Route::post('/service-section/store', [ServiceSectionController::class, 'store'])->name('admin.service.section.store');
        Route::get('/service-section/edit/{id}', [ServiceSectionController::class, 'edit'])->name('admin.service.section.edit');
        Route::post('/service-section/update/{id}', [ServiceSectionController::class, 'update'])->name('admin.service.section.update');
        Route::post('/service-section/delete/{id}', [ServiceSectionController::class, 'delete'])->name('admin.service.section.delete');
        // End of Service Section Routes

        // Enquiry Routes
        Route::get('/enquiry', [EnquiryController::class, 'index'])->name('admin.enquiry.index');
        Route::get('/enquiry/add', [EnquiryController::class, 'add'])->name('admin.enquiry.add');
        Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('admin.enquiry.store');
        Route::get('enquiry/restore', [EnquiryController::class, 'restorePage'])->name('admin.enquiry.restore.page');
        Route::get('/enquiry/edit/{id}', [EnquiryController::class, 'edit'])->name('admin.enquiry.edit');
        Route::post('/enquiry/update/{id}', [EnquiryController::class, 'update'])->name('admin.enquiry.update');
        Route::post('/enquiry/delete/{id}', [EnquiryController::class, 'delete'])->name('admin.enquiry.delete');
        Route::get('/enquiry/detail/{id}', [EnquiryController::class, 'detail'])->name('admin.enquiry.detail');
        Route::post('/enquiry/comment/{id}', [EnquiryController::class, 'comment'])->name('admin.enquiry.comment.store');
        Route::get('/enquiry/comment/delete/{id}', [EnquiryController::class, 'deleteComment'])->name('admin.enquiry.comment.delete');
        Route::get('enquiry/restore/{id}', [EnquiryController::class, 'restore'])->name('admin.enquiry.restore');
        Route::post('enquiry/force_delete/{id}', [EnquiryController::class, 'forceDelete'])->name('admin.enquiry.force.delete');
        // End of Enquiry

        // Setting Routes
        Route::get('/setting', [SettingController::class, 'edit'])->name('admin.setting.edit');
        Route::post('/setting/update', [SettingController::class, 'update'])->name('admin.setting.update');
        // End of Setting Routes
    });


    Route::get('admin-notification', [NotificationController::class, 'adminNotification'])->name('admin.notifications');
    Route::get('admin-notify/{id}', [NotificationController::class, 'adminNotifyDetail'])->name('admin.notify.detail');
    Route::post('admin-mark-as-read', [NotificationController::class, 'admin_Notify_MarkRead'])->name('admin.mark.read');
    Route::get('admin-all-read', [NotificationController::class, 'adminNotify_Mark_all_Read'])->name('admin.all.read');
    // Route::get('/admin/faqs/page/{pageId}', [FaqController::class, 'getByPageId'])->name('faqs.byPage');
    // Route::get('/faqs/{id}/list', [FaqController::class, 'list'])->name('admin.faq.list');
    // Route::resource('admin/faqs', FaqController::class);

    // Testimonial routes start
    // Route::resource('admin/testimonials', TestimonialController::class);
    Route::get('/admin/testimonials/{pageId}', [TestimonialController::class, 'getByPageId'])->name('admin.testimonials');
    Route::get('/admin/testimonials', [TestimonialController::class, 'list'])->name('admin.testimonials');
    Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('admin/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('/admin/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/admin/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
    Route::get('admin/testimonials/{id}/list', [TestimonialController::class, 'list'])->name('admin.testimonial.list');

    // Route::get('/admin/document-requireds/{pageId}', [DocumentRequiredController::class, 'getByPageId'])->name('admin.document-requireds');
    // Route::get('/admin/document-requireds/{id}/list', [DocumentRequiredController::class, 'list'])->name('admin.document-requireds.list');
    // Route::post('/document-requireds/store', [DocumentRequiredController::class, 'store'])->name('document-requireds.store');
    // Route::get('/admin/document-requireds/{id}/edit', [DocumentRequiredController::class, 'edit'])->name('document-requireds.edit');
    // Route::put('/admin/document-requireds/{id}', [DocumentRequiredController::class, 'update'])->name('document-requireds.update');
    // Route::delete('/admin/document-requireds/{id}', [DocumentRequiredController::class, 'destroy'])->name('document-requireds.delete');

    Route::get('/admin/call-to-actions/page/{pageId}', [CallToActionController::class, 'getByPageId'])->name('call-to-actions.byPage');
    Route::resource('admin/call-to-actions', CallToActionController::class);


    // Route::get('language/{locale}', function ($locale) {
    //     if (in_array($locale, config('app.available_locales'))) {
    //         session(['locale' => $locale]);
    //         app()->setLocale($locale);}
    //     return redirect()->back();
    // })->name('setLanguage');
    Route::get('/test', [FrontController::class, 'test'])->name('front.test')->middleware(Localization::class);;
});
