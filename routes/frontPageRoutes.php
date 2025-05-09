<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\HumanResourceController;
use App\Http\Controllers\Front\RealEstateController;
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
    Route::get('/manpower-recruitments', [FrontController::class, 'manpowerRecruitment'])->name('front.manpower-recruitment');

    Route::get('manpower-recruitment', [HumanResourceController::class, 'manpowerRecruitment'])->name('front.manpower.recruitment');
    Route::get('/hr-consultancy-services', [HumanResourceController::class, 'hrConsultancyServices'])->name('front.hr.consultancy');
    Route::get('/employment-contracts', [HumanResourceController::class, 'employmentContracts'])->name('front.employment.contracts');
    Route::get('/work-permits-labor-cards', [HumanResourceController::class, 'workPermitsLaborCards'])->name('front.work.permits');
    Route::get('/employee-onboarding-compliance', [HumanResourceController::class, 'employeeOnboardingCompliance'])->name('front.employee.onboarding');
    Route::get('/payroll-management', [HumanResourceController::class, 'payrollManagement'])->name('front.payroll.management');



    Route::get('/property-buying-selling-assistance', [RealEstateController::class, 'propertyBuyingSelling'])->name('front.realestate.buying.selling');
    Route::get('/real-estate-transactions', [RealEstateController::class, 'realEstateTransactions'])->name('front.realestate.transactions');
    Route::get('/property-management-solutions', [RealEstateController::class, 'propertyManagement'])->name('front.realestate.management');
    Route::get('/rental-agreements-renewals', [RealEstateController::class, 'rentalAgreements'])->name('front.realestate.rentals');















    Route::get('/testingpage', [FrontPageController::class, 'testPage'])->name('front.page.testing');

    // Testing View's
    Route::get('/testing', function () {return view('test');})->name('test.view');
    Route::get('/testing0', function () {return view('test0');})->name('test0.view');
    Route::get('/testing1', function () {return view('test1');})->name('test1.view');
    Route::get('/testing2', function () {return view('test2');})->name('test2.view');
    Route::get('/testing3', function () {return view('test3');})->name('test3.view');
    Route::get('/testing4', function () {return view('test4');})->name('test4.view');
    Route::get('/testing5', function () {return view('test5');})->name('test5.view');
    Route::get('/testing6', function () {return view('test6');})->name('test6.view');
    Route::get('/testing7', function () {return view('test7');})->name('test7.view');
    Route::get('/testing8', function () {return view('test8');})->name('test8.view');
    Route::get('/testing9', function () {return view('test9');})->name('test9.view');
    Route::get('/testing10', function () {return view('test10');})->name('test10.view');
    Route::get('/testing11', function () {return view('test11');})->name('test11.view');
    Route::get('/testing12', function () {return view('test12');})->name('test12.view');
});
