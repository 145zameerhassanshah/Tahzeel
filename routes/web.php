<?php

use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSectionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Middleware\Localization;
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

        // Partner Routes

        Route::get('/partner', [PartnerController::class, 'index'])->name('admin.partner.index');
        Route::get('/partner/add', [PartnerController::class, 'add'])->name('admin.partner.add');
        Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
        Route::post('/partner/delete/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');

        // End of Partner Routes

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
        Route::get('/enquiry/edit/{id}', [EnquiryController::class, 'edit'])->name('admin.enquiry.edit');
        Route::post('/enquiry/update/{id}', [EnquiryController::class, 'update'])->name('admin.enquiry.update');
        Route::post('/enquiry/delete/{id}', [EnquiryController::class, 'delete'])->name('admin.enquiry.delete');

        // End of Enquiry Routes

    }); // end of income routes

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

Route::post('/store-inquiry', [FrontController::class, 'storeInquiry'])->name('front.store.inquiry');


Route::get('/test', [FrontController::class, 'test'])->name('front.test')->middleware(Localization::class);;



