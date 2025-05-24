<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DHAController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\VATRegController;
use App\Http\Controllers\Front\FrontPageController;
use Spatie\ResponseCache\Middlewares\CacheResponse;
use App\Http\Controllers\Front\DedServiceController;
use App\Http\Controllers\Front\ProServiceController;
use App\Http\Controllers\Front\RealEstateController;
use App\Http\Controllers\Front\BankServiceController;
use App\Http\Controllers\Front\HumanResourceController;
use App\Http\Controllers\Front\LegalServicesController;
use App\Http\Controllers\Front\InvestmentPlanController;
use App\Http\Controllers\Front\TasheelServiceController;
use App\Http\Controllers\Front\TypingAttestationController;
use App\Http\Controllers\Front\DubaiNotaryServiceController;
use App\Http\Controllers\Front\DocumentClearanceServiceController;




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
    Route::get('/manpower-recruitments', action: [FrontController::class, 'manpowerRecruitment'])->name('front.manpower-recruitment');

    Route::get('/manpower-recruitment', [HumanResourceController::class, 'manpowerRecruitment'])->name('front.manpower.recruitment');
    Route::get('/hr-consultancy-services', [HumanResourceController::class, 'hrConsultancyServices'])->name('front.hr.consultancy');
    Route::get('/employment-contracts', [HumanResourceController::class, 'employmentContracts'])->name('front.employment.contracts');
    Route::get('/work-permits-labor-cards', [HumanResourceController::class, 'workPermitsLaborCards'])->name('front.work.permits');
    Route::get('/employee-onboarding-compliance', [HumanResourceController::class, 'employeeOnboardingCompliance'])->name('front.employee.onboarding');
    Route::get('/payroll-management', [HumanResourceController::class, 'payrollManagement'])->name('front.payroll.management');
    //DocumentClearanceServiceController
    Route::get('government-document-submission', [DocumentClearanceServiceController::class, 'governmentDocumentSubmission'])->name('front.document-clearance.government-document');
    Route::get('visa-residency', [DocumentClearanceServiceController::class, 'clearanceForVisaResidency'])->name('front.document-clearance.visa-residency');
    Route::get('labor-immigration-document', [DocumentClearanceServiceController::class, 'laborImmigrationDocuments'])->name('front.document-clearance.labor-immigration-document');
    Route::get('corporate-document', [DocumentClearanceServiceController::class, 'corporateDocumentClearance'])->name('front.document-clearance.corporate-document');
    Route::get('legal-document', [DocumentClearanceServiceController::class, 'legalDocumentProcessing'])->name('front.document-clearance.legal-document');
    //dubai notary 
    Route::get('/dubai-notary/document-authentication', [DubaiNotaryServiceController::class, 'documentAuthentication'])->name('front.dubai-notary.authentication');
    Route::get('/dubai-notary/real-estate-transactions', [DubaiNotaryServiceController::class, 'realEstateTransactions'])->name('front.dubai-notary.transactions');
    Route::get('/dubai-notary/affidavits-declarations', [DubaiNotaryServiceController::class, 'affidavitsDeclarations'])->name('front.dubai-notary.affidavits-declarations');
    Route::get('/dubai-notary/power-of-attorney-notarization', [DubaiNotaryServiceController::class, 'powerOfAttorney'])->name('front.dubai-notary.attorney');
    //ded services
    Route::prefix('ded-services')->name('front.dedservices.')->group(function () {
        Route::get('business-setup-licensing', [DedServiceController::class, 'businessSetup'])->name('business_setup');
        Route::get('trade-name-reservation', [DedServiceController::class, 'tradeNameReservation'])->name('trade_name');
        Route::get('initial-approval', [DedServiceController::class, 'initialApproval'])->name('initial_approval');
        Route::get('license-renewal-amendments', [DedServiceController::class, 'licenseRenewal'])->name('license_renewal');
        Route::get('company-deregistration', [DedServiceController::class, 'deregistration'])->name('deregistration');
        Route::get('commercial-permits', [DedServiceController::class, 'commercialPermits'])->name('commercial_permits');
    });
    //investment plan 
    Route::prefix('investment-plans')->name('front.investmentplans.')->group(function () {
        Route::get('global-investment-solutions', [InvestmentPlanController::class, 'globalInvestment'])->name('global_investment');
        Route::get('investment-planning-advisory', [InvestmentPlanController::class, 'investmentAdvisory'])->name('investment_advisory');
        Route::get('property-investment-opportunities', [InvestmentPlanController::class, 'propertyInvestment'])->name('property_investment');
        Route::get('business-investment-strategies', [InvestmentPlanController::class, 'businessStrategy'])->name('business_strategy');
        Route::get('risk-management-diversification', [InvestmentPlanController::class, 'riskManagement'])->name('risk_management');
    });


    //pro servicess
    Route::get('/document-clearance-submission', [ProServiceController::class, 'documentClearance'])->name('front.proservice.document_clearance');
    Route::get('/visa-applications-renewals', [ProServiceController::class, 'visaApplications'])->name('front.proservice.visa_applications');
    Route::get('/labor-immigration-services', [ProServiceController::class, 'laborImmigration'])->name('front.proservice.labor_immigration');
    Route::get('/trade-license-processing', [ProServiceController::class, 'tradeLicense'])->name('front.proservice.trade_license');
    Route::get('/attestation-notarization-assistance', [ProServiceController::class, 'attestationNotarization'])->name('front.proservice.attestation_notarization');
    Route::get('/company-registration-setup', [ProServiceController::class, 'companyRegistration'])->name('front.proservice.company_registration');
    Route::get('/government-liaison-services', [ProServiceController::class, 'governmentLiaison'])->name('front.proservice.government_liaison');
    //  8. Bank Account Opening Services
    Route::get('/corporate-bank-account-setup', [BankServiceController::class, 'corporate'])->name('front.bankservice.corporate');
    Route::get('/personal-bank-account-assistance', [BankServiceController::class, 'personal'])->name('front.bankservice.personal');
    Route::get('/business-banking-consultation', [BankServiceController::class, 'consultation'])->name('front.bankservice.consultation');
    Route::get('/online-banking-solutions', [BankServiceController::class, 'online'])->name('front.bankservice.online');


    Route::get('/property-buying-selling-assistance', [RealEstateController::class, 'propertyBuyingSelling'])->name('front.realestate.buying.selling');
    Route::get('/real-estate-transactions', [RealEstateController::class, 'realEstateTransactions'])->name('front.realestate.transactions');
    Route::get('/property-management-solutions', [RealEstateController::class, 'propertyManagement'])->name('front.realestate.management');
    Route::get('/rental-agreements-renewals', [RealEstateController::class, 'rentalAgreements'])->name('front.realestate.rentals');

    Route::get('/testingpage', [FrontPageController::class, 'testPage'])->name('front.page.testing');

    // real-estate-transactions
    // Route::get('/propertyBuyingSelling', [RealEstateController::class, 'propertyBuyingSelling'])->name('propertyBuyingSelling');
    // Route::get('/realEstateTransactions', [RealEstateController::class, 'realEstateTransactions'])->name('realEstateTransactions');
    // Route::get('/propertyManagement', [RealEstateController::class, 'propertyManagement'])->name('propertyManagement');
    // Route::get('/rentalAgreements', [RealEstateController::class, 'rentalAgreements'])->name('rentalAgreements');
    // VAT Registration for Businesses
    Route::prefix('vat')->group(function () {
        Route::get('/consultation-compliance', [VATRegController::class, 'vat_consultation_compliance'])->name('vat.consultation_compliance');
        Route::get('/deregistration', [VATRegController::class, 'vat_deregistration'])->name('vat.deregistration');
        Route::get('/return-filing', [VATRegController::class, 'vat_return_filing'])->name('vat.return_filing');
    });
    Route::get('/vat-registration', [VATRegController::class, 'vat_registration_for_businesses'])->name('vat.registration');

    // Legal Services
    Route::prefix('legal')->group(function () {
        Route::get('/document-drafting', [LegalServicesController::class, 'document_drafting'])->name('legal.document_drafting');
        Route::get('/consultations', [LegalServicesController::class, 'consultations'])->name('legal.consultations');
        Route::get('/representation', [LegalServicesController::class, 'representation'])->name('legal.representation');
        Route::get('/dispute-resolution', [LegalServicesController::class, 'dispute_resolution'])->name('legal.dispute_resolution');
    });

    // Dubai Health Authority Services
    Route::prefix('dha')->group(function () {
        Route::get('/medical-fitness-tests', [DHAController::class, 'medicalFitnessTests'])->name('dha.medical_fitness_tests');
        Route::get('/health-insurance-approvals', [DHAController::class, 'healthInsuranceApprovals'])->name('dha.health_insurance_approvals');
    });
    //tasheel 
    Route::get('/government-transactions', [TasheelServiceController::class, 'governmentTransactions'])->name('front.tasheel.government');
    Route::get('/mohre-services', [TasheelServiceController::class, 'mohreServices'])->name('front.tasheel.mohre');
    Route::get('/legal-translation', [TasheelServiceController::class, 'legalTranslation'])->name('front.tasheel.translation');


    Route::prefix('typing-attestation')->group(function () {
        Route::get('/police-clearance', [TypingAttestationController::class, 'policeClearance'])->name('typing.police_clearance');
        Route::get('/passport-renewal', [TypingAttestationController::class, 'passportRenewal'])->name('typing.passport_renewal');
        Route::get('/mofa-attestation', [TypingAttestationController::class, 'mofaAttestation'])->name('typing.mofa_attestation');
        Route::get('/new-passport-request', [TypingAttestationController::class, 'newPassportRequest'])->name('typing.new_passport_request');
        Route::get('/passport-lost-report', [TypingAttestationController::class, 'passportLostReport'])->name('typing.passport_lost_report');
        Route::get('/power-of-attorney-drafting', [TypingAttestationController::class, 'powerOfAttorneyDrafting'])->name('typing.power_of_attorney_drafting');
        Route::get('/document-typing-formatting', [TypingAttestationController::class, 'documentTypingFormatting'])->name('typing.document_typing_formatting');
    });
});
