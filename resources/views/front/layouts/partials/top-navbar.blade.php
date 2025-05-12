<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none position-absolute">
            <div class="container">
                <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('front.index') }}">
                            <!-- <img src="{{ asset($setting->logo) }}" width="150px" alt="" /> -->
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="{{ route('front.index') }}"><img src="{{ asset($setting->logo) }}" width="150px" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100 hover">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.index') }}">{{ __('header.home') }}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.about.us') }}">{{ __('header.about_us') }}</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('front.amr.services') }}" data-bs-toggle="dropdown">{{ __('header.amer_services') }}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('front.residency.visa') }}">{{ __('header.residency_visa') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.open.file') }}">{{ __('header.open_file') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.visa.cancellation') }}">{{ __('header.visa_cancellation') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.emirate.id') }}">{{ __('header.emirates_id') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.medical.fitness.test') }}">{{ __('header.medical_test') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.entry.permit') }}">{{ __('header.entry_permit') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.visit.visa') }}">{{ __('header.visit_visa') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.domestic.worker.visa') }}">{{ __('Domestic Worker Visa') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('front.page.detail','corporate-bank-account-setup') }}" data-bs-toggle="dropdown">{{ __('header.tasheel_services') }}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('front.page.testing') }}">{{ __('header.under_construction') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.manpower.recruitment') }}">ManPower Recuruitment</a></li>
                                        
                                        <li><a class="dropdown-item" href="{{ route('front.realestate.buying.selling') }}">Property buying & selling</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('header.other_services') }}</a>
                                    <ul class="dropdown-menu">

                                        {{-- <li><a class="dropdown-item" href="{{ route('front.vat.business') }}">{{ __('"Under Construction"') }}</a></li> --}}
                                        <li><a class="dropdown-item" href="{{ route('front.ded.businessLicense') }}">{{ __('DED License') }}</a></li>
                                        <li><a class="dropdown-item" href="{{ route('front.dhaServices') }}">{{ __('DHA Services') }}</a></li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Human Resources</a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.manpower-recruitment') }}">Manpower Recruitment</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.manpower.recruitment') }}">Manpower Recruitment2</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.hr.consultancy') }}">HR consultancy</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.employment.contracts') }}">Employment Contracts</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.work.permits') }}">Work Permits & Labour Cards</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.employee.onboarding') }}">Employee Onboarding & Compliance</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.payroll.management') }}">Payroll Management</a></li>

                                            </ul>
                                          </li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Real Estate Services</a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.realestate.buying.selling') }}">Property Buying & Selling Assistance</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.realestate.transactions') }}">Real Estate Transactions</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.realestate.management') }}">Property Management Solutions</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('front.realestate.rentals') }}">Rental Agreements and Renewals</a></li>
                                             

                                            </ul>
                                          </li>
                                        
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">VAT Services</a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('vat.registration') }}">VAT Registration for Businesses</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('vat.return_filing') }}">VAT Return Filing</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('vat.consultation_compliance') }}">  VAT Consultation & Compliance</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('vat.deregistration') }}">VAT Deregistration</a></li>
                                             

                                            </ul>
                                          </li>

                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Legal Services</a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('legal.document_drafting') }}"> Document Drafting</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('legal.consultations') }}">Consultations</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('legal.representation') }}">Representation </a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('legal.dispute_resolution') }}">Dispute Resolution</a></li>
                                             

                                            </ul>
                                          </li>

                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">DHA Services</a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('dha.medical_fitness_tests') }}">Medical Fitness Tests</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('dha.health_insurance_approvals') }}">Health Insurance Approvals</a></li>
                                             

                                            </ul>
                                          </li>
                                        
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Typing & Attestation Services </a>
                                            <ul class="dropdown-menu">

                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.police_clearance') }}">Police Clearance</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.new_passport_request') }}">New Passport Request</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.passport_renewal') }}">Passport Renewal</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.passport_lost_report') }}">Passport Lost Report</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.mofa_attestation') }}"> MOFA Attestation (Ministry of Foreign Affairs)</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.power_of_attorney_drafting') }}">Power of Attorney (POA) Drafting</a></li>
                                              <li class="nav-item"><a class="dropdown-item" href="{{ route('typing.document_typing_formatting') }}">Document Typing and Formatting</a></li>

                                            </ul>
                                          </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.blog') }}">{{ __('header.blog') }}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.contact.us') }}">{{ __('header.contact') }}</a></li>
                            </ul>
                            <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                                <a href="mailto:{{ $setting->email }}" class="link-inverse">{{ $setting->email }}</a>
                                <br /> {{ $setting->phone_no }}
                            </div>
                        </div>
                    </div>

                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item dropdown language-select text-uppercase">
                                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ strtoupper(app()->getLocale()) }}</a>
                                <ul class="dropdown-menu text-center">
                                    <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">{{ __('header.en') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">{{ __('header.ar') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-none d-md-block">
                                @auth
                                    <!-- If the user is authenticated -->
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-success rounded-pill text-white">{{ __('Dashboard') }}</a>
                                 @endauth

                            @guest
                                <!-- If the user is a guest (not authenticated) -->
                                <a href="{{ route('front.contact.us') }}" class="btn btn-sm btn-success rounded-pill text-white">{{ __('header.apply_now') }}</a>
                            @endguest

                            </li>
                            <li class="nav-item d-lg-none"><button class="hamburger offcanvas-nav-btn"><span></span></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
