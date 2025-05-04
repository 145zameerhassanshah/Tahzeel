<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\FrontController;
use Spatie\ResponseCache\Middlewares\CacheResponse;
use App\Http\Middleware\SetLocale;
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
Route::middleware([SetLocale::class])->group(function () {
    Route::post('/store-inquiry', [FrontController::class, 'storeInquiry'])->name('front.store.inquiry');
    // Frontend routes
    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/service-detail/{slug}', [FrontController::class, 'serviceDetail'])->name('front.service.detail');
    Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('front.about.us');
    Route::get('/amr-services', [FrontController::class, 'amrServices'])->name('front.amr.services');
    Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
    Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('front.contact.us');
    Route::get('/emirate-id', [FrontController::class, 'emirateId'])->name('front.emirate.id');
    Route::get('/visit-visa', [FrontController::class, 'visitVisa'])->name('front.visit.visa');
    Route::get('/domestic-worker-visa', [FrontController::class, 'domesticWorkerVisa'])->name('front.domestic.worker.visa');
    Route::get('/medical-fitness-test', [FrontController::class, 'medicalFitnessTest'])->name('front.medical.fitness.test');
    Route::get('/residency-visa', [FrontPageController::class, 'residencyVisa'])->name('front.residency.visa');
    Route::get('/open-file', [FrontPageController::class, 'openFile'])->name('front.open.file');
    Route::get('/visa-cancellation', [FrontController::class, 'visaCancellation'])->name('front.visa.cancellation');
    Route::get('/ded-businessLicense', [FrontController::class, 'DEDbusinessLicense'])->name('front.ded.businessLicense');
    Route::get('/dha-services', [FrontController::class, 'dhaServices'])->name('front.dhaServices');
    Route::get('/entry-permit', [FrontController::class, 'entryPermit'])->name('front.entry.permit');
    Route::get('/vat-return-filing', [FrontController::class, 'vatReturnFilling'])->name('front.vat.return-filling');
    Route::get('/dubai-notary-document-authentication', [FrontController::class, 'notaryDocumentAuthentication'])->name('front.notaryDocumentAuthentication');    
    Route::get('/vat-registration-for-businesses', [FrontPageController::class, 'vatBusiness'])->name('front.vat.business');
    Route::get('/page/{slug}', [FrontPageController::class, 'pagedetail'])->name('front.page.detail');
    Route::get('/manpower-recruitment', [FrontController::class, 'manpowerRecruitment'])->name('front.manpower-recruitment');
});