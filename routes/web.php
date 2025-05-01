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
use App\Http\Controllers\Front\FrontPageController;
// General Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
// Admin Controllers
use App\Http\Controllers\Admin\BcategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BulkDeleteController;
use App\Http\Controllers\Admin\CallToActionController;
use App\Http\Controllers\Admin\DocumentRequiredController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FeatureImageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GcategoryController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\IntroSectionController;
use App\Http\Controllers\Admin\JcategoryController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProcedureController;
use App\Http\Controllers\Admin\SectionTitleController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Http\Controllers\Admin\WhyUsImageController;
use App\Http\Controllers\Admin\PageSectionController;


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
        //profile routes
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
        Route::get('/page-detail/{id}/{slug}', [PageController::class, 'detail'])->name('admin.page.detail');
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
        Route::get('/page/delete/{id}', action: [PageController::class, 'delete'])->name('admin.page.delete');


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

        // Feature Routes
        // Route::get('/feature-images/{pageId}', [FeatureImageController::class, 'index'])->name('admin.feature-image.index');
        Route::get('/feature-images/{pageId}', [FeatureImageController::class, 'getByPageId'])->name('admin.feature-image.index');
        Route::get('/feature-images/{id}/list', [FeatureImageController::class, 'list'])->name('admin.feature-image.list');
        Route::get('/feature-image/{id}/add', [FeatureImageController::class, 'add'])->name('admin.feature-image.add');
        Route::post('/feature-image/store', [FeatureImageController::class, 'store'])->name('admin.feature-image.store');
        Route::get('/feature-image/edit/{id}', [FeatureImageController::class, 'edit'])->name('admin.feature-image.edit');
        Route::put('/feature-image/update/{id}', [FeatureImageController::class, 'update'])->name('admin.feature-image.update');
        Route::post('/feature-image/delete/{id}', [FeatureImageController::class, 'delete'])->name('admin.feature-image.delete');

        // Why Choose Us Routes
        Route::get('/why-choose-us/{pageId}', [WhyChooseUsController::class, 'getByPageId'])->name('admin.why-choose-us');
        Route::get('/why-choose-us/{id}/list', [WhyChooseUsController::class, 'list'])->name('admin.why-choose-us.list');
        Route::get('/why-choose-us/{id}/add', [WhyChooseUsController::class, 'add'])->name('admin.why-choose-us.add');
        Route::post('/why-choose-us/store', [WhyChooseUsController::class, 'store'])->name('admin.why-choose-us.store');
        Route::get('/why-choose-us/edit/{id}', [WhyChooseUsController::class, 'edit'])->name('admin.why-choose-us.edit');
        Route::put('/why-choose-us/update/{id}', [WhyChooseUsController::class, 'update'])->name('admin.why-choose-us.update');
        Route::post('/why-choose-us/delete/{id}', [WhyChooseUsController::class, 'delete'])->name('admin.why-choose-us.delete');

        // Why Us Images Routes
        Route::get('/why-us-image/{pageId}', [WhyUsImageController::class, 'getByPageId'])->name('admin.why-us-image');
        Route::get('/why-us-image', [WhyUsImageController::class, 'index'])->name('admin.why-us-image.index');
        Route::get('/why-us-image/{id}/list', [WhyUsImageController::class, 'list'])->name('admin.why-us-image.list');
        Route::get('/why-us-image/{id}/add', [WhyUsImageController::class, 'add'])->name('admin.why-us-image.add');
        Route::post('/why-us-image/store', [WhyUsImageController::class, 'store'])->name('admin.why-us-image.store');
        Route::get('/why-us-image/edit/{id}', [WhyUsImageController::class, 'edit'])->name('admin.why-us-image.edit');
        Route::put('/why-us-image/update/{id}', [WhyUsImageController::class, 'update'])->name('admin.why-us-image.update');
        Route::post('/why-us-image/delete/{id}', [WhyUsImageController::class, 'delete'])->name('admin.why-us-image.delete');

        // Documents Required Routes:-
        // Route::get('/document-required', [DocumentRequiredController::class, 'index'])->name('admin.document-required.index');
        // Route::get('/document-required/{id}/list', [DocumentRequiredController::class, 'list'])->name('admin.document-required.list');
        // Route::get('/document-required/{id}/add', [DocumentRequiredController::class, 'add'])->name('admin.document-required.add');
        // Route::post('/document-required/store', [DocumentRequiredController::class, 'store'])->name('admin.document-required.store');
        // Route::get('/document-required/edit/{id}', [DocumentRequiredController::class, 'edit'])->name('admin.document-required.edit');
        // Route::post('/document-required/update/{id}', [DocumentRequiredController::class, 'update'])->name('admin.document-required.update');
        // Route::post('/document-required/delete/{id}', [DocumentRequiredController::class, 'delete'])->name('admin.document-required.delete');

        // SectionTitle Routes
        Route::get('/section-titles/{pageId}', [SectionTitleController::class, 'getByPageId'])->name('admin.section_title.index');
        Route::get('/section-titles/{id}/list', [SectionTitleController::class, 'list'])->name('admin.section_title.list');
        Route::get('/section-title/{id}/add', [SectionTitleController::class, 'add'])->name('admin.section_title.add');
        Route::post('/section-title/store', [SectionTitleController::class, 'store'])->name('admin.section_title.store');
        Route::get('/section-title/edit/{id}', [SectionTitleController::class, 'edit'])->name('admin.section_title.edit');
        Route::put('/section-title/update/{id}', [SectionTitleController::class, 'update'])->name('admin.section_title.update');
        Route::post('/section-title/delete/{id}', [SectionTitleController::class, 'delete'])->name('admin.section_title.delete');
        // Route::get('/section-titles', [SectionTitleController::class, 'index'])->name('admin.section_title.index');

        // introduction Routes
        Route::get('/introduction-sections', [IntroSectionController::class, 'index'])->name('admin.introduction_section.index');
        Route::get('/introduction-sections/{id}/list', [IntroSectionController::class, 'list'])->name('admin.introduction_section.list');
        Route::get('/introduction-section/{id}/add', [IntroSectionController::class, 'add'])->name('admin.introduction_section.add');
        Route::post('/introduction-section/store', [IntroSectionController::class, 'store'])->name('admin.introduction_section.store');
        Route::get('/introduction-section/edit/{id}', [IntroSectionController::class, 'edit'])->name('admin.introduction_section.edit');
        Route::post('/introduction-section/update/{id}', [IntroSectionController::class, 'update'])->name('admin.introduction_section.update');
        Route::post('/introduction-section/delete/{id}', [IntroSectionController::class, 'delete'])->name('admin.introduction_section.delete');

        // Hero Sections Routes
        Route::get('/hero-sections/{pageId}', [HeroSectionController::class, 'getByPageId'])->name('admin.hero_section.index');
        Route::get('/hero-sections/{id}/list', [HeroSectionController::class, 'list'])->name('admin.hero_section.list');
        Route::get('/hero-section/{id}/add', [HeroSectionController::class, 'add'])->name('admin.hero_section.add');
        Route::post('/hero-section/store', [HeroSectionController::class, 'store'])->name('admin.hero_section.store');
        Route::get('/hero-section/edit/{id}', [HeroSectionController::class, 'edit'])->name('admin.hero_section.edit');
        Route::put('/hero-section/update/{id}', [HeroSectionController::class, 'update'])->name('admin.hero_section.update');
        Route::delete('/hero-section/delete/{id}', [HeroSectionController::class, 'delete'])->name('admin.hero_section.delete');
        // Route::get('/hero-sections', [HeroSectionController::class, 'index'])->name('admin.hero_section.index');

        // Intro Routes
        Route::get('/Intro-sections/{pageId}', [IntroSectionController::class, 'getByPageId'])->name('admin.intro_section.index');
        // Route::get('/Intro-sections', [IntroSectionController::class, 'index'])->name('admin.intro_section.index');
        Route::get('/Intro-sections/{id}/list', [IntroSectionController::class, 'list'])->name('admin.intro_section.list');
        Route::get('/Intro-section/{id}/add', [IntroSectionController::class, 'add'])->name('admin.intro_section.add');
        Route::post('/Intro-section/store', [IntroSectionController::class, 'store'])->name('admin.intro_section.store');
        Route::get('/Intro-section/edit/{id}', [IntroSectionController::class, 'edit'])->name('admin.intro_section.edit');
        Route::put('/Intro-section/update/{id}', [IntroSectionController::class, 'update'])->name('admin.intro_section.update');
        Route::post('/Intro-section/delete/{id}', [IntroSectionController::class, 'delete'])->name('admin.intro_section.delete');



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
    Route::resource('admin/faqs', FaqController::class);
    Route::get('/admin/faqs/page/{pageId}', [FaqController::class, 'getByPageId'])->name('faqs.byPage');
    Route::get('/faqs/{id}/list', [FaqController::class, 'list'])->name('admin.faq.list');

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

    Route::get('/admin/procedures/{pageId}', [ProcedureController::class, 'getByPageId'])->name('admin.procedures');
    Route::get('/admin/procedures/{id}/list', [ProcedureController::class, 'list'])->name('admin.procedures.list');
    Route::post('/procedures/store', [ProcedureController::class, 'store'])->name('procedures.store');
    Route::get('/admin/procedures/{id}/edit', [ProcedureController::class, 'edit'])->name('procedures.edit');
    Route::put('/admin/procedures/{id}', [ProcedureController::class, 'update'])->name('procedures.update');
    Route::delete('/admin/procedures/{id}', [ProcedureController::class, 'destroy'])->name('procedures.delete');

    Route::get('/admin/document-requireds/{pageId}', [DocumentRequiredController::class, 'getByPageId'])->name('admin.document-requireds');
    Route::get('/admin/document-requireds/{id}/list', [DocumentRequiredController::class, 'list'])->name('admin.document-requireds.list');
    Route::post('/document-requireds/store', [DocumentRequiredController::class, 'store'])->name('document-requireds.store');
    Route::get('/admin/document-requireds/{id}/edit', [DocumentRequiredController::class, 'edit'])->name('document-requireds.edit');
    Route::put('/admin/document-requireds/{id}', [DocumentRequiredController::class, 'update'])->name('document-requireds.update');
    Route::delete('/admin/document-requireds/{id}', [DocumentRequiredController::class, 'destroy'])->name('document-requireds.delete');

    Route::get('/admin/call-to-actions/page/{pageId}', [CallToActionController::class, 'getByPageId'])->name('call-to-actions.byPage');
    Route::resource('admin/call-to-actions', CallToActionController::class);







    Route::get('/page-section/{id}', [PageSectionController::class, 'index'])->name('admin.page.section.index');
    Route::get('/page-section/add/{id}', [PageSectionController::class, 'add'])->name('admin.page.section.add');
    Route::post('/page-section/store', [PageSectionController::class, 'store'])->name('admin.page.section.store');
    Route::get('/page-section/edit/{id}', [PageSectionController::class, 'edit'])->name('admin.page.section.edit');
    Route::post('/page-section/update/{id}', [PageSectionController::class, 'update'])->name('admin.page.section.update');
    Route::post('/page-section/delete/{id}', [PageSectionController::class, 'delete'])->name('admin.page.section.delete');
   
    // Route::get('language/{locale}', function ($locale) {
    //     if (in_array($locale, config('app.available_locales'))) {
    //         session(['locale' => $locale]);
    //         app()->setLocale($locale);
    //     }
    //     return redirect()->back();
    // })->name('setLanguage');



    Route::get('/test', [FrontController::class, 'test'])->name('front.test')->middleware(Localization::class);;
});
// all admin routes write in admin middleware
