<?php

use App\Http\Controllers\Admin\BcategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BulkDeleteController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GcategoryController;
use App\Http\Controllers\Admin\JcategoryController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSectionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GroupController;

use App\Http\Controllers\Admin\NotificationController;

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Middleware\Localization;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('setLanguage');


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


        // bulk delte Route
        Route::get('bulk/deletes', [BulkDeleteController::class, 'bulkDelete'])->name('back.bulk.delete');


        // Group Routes

        Route::get('/groups', [GroupController::class, 'index'])->name('admin.group.index');
        Route::get('/add-group', [GroupController::class, 'create'])->name('admin.group.create');
        Route::post('/store-group', [GroupController::class, 'store'])->name('admin.group.store');
        Route::get('/edit-group/{id}', [GroupController::class, 'edit'])->name('admin.group.edit');
        Route::post('/update-group/{id}', [GroupController::class, 'update'])->name('admin.group.update');
        Route::post('/delete-group/{id}', [GroupController::class, 'destroy'])->name('admin.group.delete');



        // Partner Routes

        Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('/partner/add', [PartnerController::class, 'add'])->name('admin.partner.add');
        Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('/partner/delete/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');

        // Gallery Category Routes
        Route::get('/gallery-categories', [GcategoryController::class, 'gcategory'])->name('admin.gcategory.index');
        Route::get('/gallery-category/add', [GcategoryController::class, 'add'])->name('admin.gcategory.add');
        Route::post('/gallery-category/store', [GcategoryController::class, 'store'])->name('admin.gcategory.store');
        Route::get('/gallery-category/edit/{id}', [GcategoryController::class, 'edit'])->name('admin.gcategory.edit');
        Route::post('/gallery-category/update/{id}', [GcategoryController::class, 'update'])->name('admin.gcategory.update');
        Route::get('/gallery-category/delete/{id}', action: [GcategoryController::class, 'delete'])->name('admin.gcategory.delete');


        // Gallery Routes
        Route::get('/galleries', [GalleryController::class, 'index'])->name('admin.gallery.index');
        Route::get('/gallery/add', [GalleryController::class, 'add'])->name('admin.gallery.add');
        Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
        Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
        Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
        Route::get('/gallery/delete/{id}', action: [GalleryController::class, 'delete'])->name('admin.gallery.delete');


        // Blog Category Routes
        Route::get('/blog-categories', [BcategoryController::class, 'bcategory'])->name('admin.bcategory.index');
        Route::get('/blog-category/add', [BcategoryController::class, 'add'])->name('admin.bcategory.add');
        Route::post('/blog-category/store', [BcategoryController::class, 'store'])->name('admin.bcategory.store');
        Route::get('/blog-category/edit/{id}', [BcategoryController::class, 'edit'])->name('admin.bcategory.edit');
        Route::post('/blog-category/update/{id}', [BcategoryController::class, 'update'])->name('admin.bcategory.update');
        Route::get('/blog-category/delete/{id}', action: [BcategoryController::class, 'delete'])->name('admin.bcategory.delete');


        // Blog Routes
        Route::get('/blogs', [BlogController::class, 'blog'])->name('admin.blog.index');
        Route::get('/blog/add', [BlogController::class, 'add'])->name('admin.blog.add');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::get('/blog/delete/{id}', action: [BlogController::class, 'delete'])->name('admin.blog.delete');

        // Job Routes
        Route::get('/jobs', [JobController::class, 'jobs'])->name('admin.job.index');
        Route::get('/job/add', [JobController::class, 'add'])->name('admin.job.add');
        Route::post('/job/store', [JobController::class, 'store'])->name('admin.job.store');
        Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('admin.job.edit');
        Route::post('/job/update/{id}', [JobController::class, 'update'])->name('admin.job.update');
        Route::get('/job/delete/{id}', action: [JobController::class, 'delete'])->name('admin.job.delete');

        // Job Category Routes
        Route::get('/job-categories', [JcategoryController::class, 'jcategory'])->name('admin.jcategory.index');
        Route::get('/job-category/add', [JcategoryController::class, 'add'])->name('admin.jcategory.add');
        Route::post('/job-category/store', [JcategoryController::class, 'store'])->name('admin.jcategory.store');
        Route::get('/job-category/edit/{id}', [JcategoryController::class, 'edit'])->name('admin.jcategory.edit');
        Route::post('/job-category/update/{id}', [JcategoryController::class, 'update'])->name('admin.jcategory.update');
        Route::get('/job-category/delete/{id}', action: [JcategoryController::class, 'delete'])->name('admin.jcategory.delete');


         // Feature Routes
         Route::get('/features', [FeatureController::class, 'index'])->name('admin.feature.index');
         Route::get('/feature/add', [FeatureController::class, 'add'])->name('admin.feature.add');
         Route::post('/feature/store', [FeatureController::class, 'store'])->name('admin.feature.store');
         Route::get('/feature/edit/{id}', [FeatureController::class, 'edit'])->name('admin.feature.edit');
         Route::post('/feature/update/{id}', [FeatureController::class, 'update'])->name('admin.feature.update');
         Route::get('/feature/delete/{id}', action: [FeatureController::class, 'delete'])->name('admin.feature.delete');


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
    Route::resource('faqs', FaqController::class);
    Route::resource('testimonials', TestimonialController::class);
});

// all admin routes write in admin middleware


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/service-detail/{slug}', [FrontController::class, 'serviceDetail'])->name('front.service.detail');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('front.about.us')->middleware(Localization::class);
Route::get('/amr-services', [FrontController::class, 'amrServices'])->name('front.amr.services');
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('front.contact.us');
Route::get('/emirate-id', [FrontController::class, 'emirateId'])->name('front.emirate.id');
Route::get('/visit-visa', [FrontController::class, 'visitVisa'])->name('front.visit.visa');
Route::get('/domestic-worker-visa', [FrontController::class, 'domesticWorkerVisa'])->name('front.domestic.worker.visa');
Route::get('/medical-fitness-test', [FrontController::class, 'medicalFitnessTest'])->name('front.medical.fitness.test');
Route::get('/residency-visa', [FrontController::class, 'residencyVisa'])->name('front.residency.visa');
Route::get('/open-file', [FrontController::class, 'openFile'])->name('front.open.file');
Route::get('/entry-permit', [FrontController::class, 'entryPermit'])->name('front.entry.permit');
Route::get('/visa-cancellation', [FrontController::class, 'visaCancellation'])->name('front.visa.cancellation');
Route::get('/vat-business', [FrontController::class, 'vatBusiness'])->name('front.vat.business');

Route::post('/store-inquiry', [FrontController::class, 'storeInquiry'])->name('front.store.inquiry');


Route::get('/test', [FrontController::class, 'test'])->name('front.test')->middleware(Localization::class);;


