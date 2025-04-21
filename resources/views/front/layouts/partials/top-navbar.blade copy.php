<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none position-absolute">
            <div class="container">
                <div
                    class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset($setting->logo) }}" width="150px" srcset="{{ asset($setting->logo) }}" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="{{ route('front.index') }}"><img src="{{ asset($setting->logo) }}"
                                    width="150px" srcset="{{ asset($setting->logo) }}" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100 hover">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item"><a class="nav-link" href="{{ route('front.index') }}">Home</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.index') }}">{{ __('header.home') }}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.about.us') }}">{{ __('header.about_us') }}</a></li>
                                <li class="nav-item dropdown">
                                    <!-- <a class="nav-link dropdown-toggle" href="/amerServices.html" data-bs-toggle="dropdown" onclick="window.location='{{ route('front.amr.services') }}'; return false;">Amer Services</a>  -->
                                    <a class="nav-link dropdown-toggle" href="{{ route('front.amr.services') }}" data-bs-toggle="dropdown">{{ __('header.amer_services') }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.residency.visa') }}">{{ __('header.residency_visa') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.open.file') }}">{{ __('header.open_file') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.visa.cancellation') }}">{{ __('header.visa_cancellation') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.emirate.id') }}">{{ __('header.emirates_id') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.medical.fitness.test') }}">{{ __('header.medical_test') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.entry.permit') }}">{{ __('header.entry_permit') }}</a></li>
                                        {{-- <li class="nav-item"><a class="dropdown-item" href="#">Change Status</a></li> --}}
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.visit.visa') }}">{{ __('header.visit_visa') }}</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.domestic.worker.visa') }}">{{ __('header.domestic_worker') }}</a></li>
                                        {{-- <li class="nav-item"><a class="dropdown-item" href="#">Travel History</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Absconding Removal & Overstay Fines</a></li> --}}
                                    </ul>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">{{ __('header.tasheel_services') }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="#">Under Construction</a></li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Under Construction</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Under Construction</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="nav-item"><a class="dropdown-item" href="#">Under Construction</a></li>
                                                        <li class="nav-item"><a class="dropdown-item" href="#">Under Construction</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item" href="#">Under
                                                        Construction</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="#">Under
                                                        Construction</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Under
                                                Construction</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('header.other_services') }}</a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Bank Account Opening Services</a></li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Vat Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="{{ route('front.vat.business') }}">VAT Registration for Businesses</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">VAT Return Filing</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">VAT Consultation & Compliance</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">VAT Deregistration</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">DED Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="{{ route('front.ded.businessLicense') }}">Business Setup and Licensing</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Trade Name Reservation</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Initial Approval</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">License Renewal and Amendments</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Company Deregistration</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Commercial Permits</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                                Dubai Notary Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="{{ route('front.ded.businessLicense') }}">Document Authentication</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Real Estate Transaction</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Affidavits & Declarations</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Power of Attorney (POA) Notarization</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.dhaServices') }}">DHA Services</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.blog') }}">{{ __('header.blog') }}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.contact.us') }}">{{ __('header.contact') }}</a></li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                                <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!-- /offcanvas-nav-other -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Lang Switcher Start -->
                            <li class="nav-item dropdown language-select text-uppercase">
                                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ strtoupper(app()->getLocale()) }}
                                </a>
                                <ul class="dropdown-menu text-center">
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">English</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a></li>
                                </ul>
                            </li>
                            <!-- Lang Switcher End -->
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ route('front.contact.us') }}"
                                    class="btn btn-sm btn-success rounded-pill text-white">Apply Now</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>