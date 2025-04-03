<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\FrontController;



Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('setLanguage');



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

Route::get('/ded-businessLicense', [FrontController::class, 'DEDbusinessLicense'])->name('front.ded.businessLicense');

Route::post('/store-inquiry', [FrontController::class, 'storeInquiry'])->name('front.store.inquiry');


Route::get('/test', [FrontController::class, 'test'])->name('front.test')->middleware(Localization::class);;






Route::get('/vat-registration-for-businesses', [FrontPageController::class, 'vatBusiness'])->name('front.vat.business');
Route::get('/vat-return-filing', [FrontController::class, 'vatReturnFilling'])->name('front.vat.return-filling');



?>
