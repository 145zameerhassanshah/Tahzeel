<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none position-absolute">
            <div class="container">
                <div
                    class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset('assets/core/logo.png') }}" width="150px"
                                srcset="{{ asset('assets/core/logo.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="{{ route('front.index') }}"><img src="{{ asset('assets/core/logo.png') }}"
                                    width="150px" srcset="{{ asset('assets/core/logo.png') }}" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100 hover">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link " href="{{ route('front.index') }}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.about.us') }}">About
                                        Us</a></li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                        href="/amerServices.html" data-bs-toggle="dropdown"
                                        onclick="window.location='{{ route('front.amr.services') }}'; return false;">Amer
                                        Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.residency.visa') }}">Residency Visa
                                                Issuance/Renewal</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.open.file') }}">Open File</a>
                                        </li>


                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.visa.cancellation') }}">Visa
                                                Cancellations</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.emirate.id') }}">Emirates ID Applications</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.medical.fitness.test') }}">Medical Fitness
                                                Tests</a></li>
                                        <li class="nav-item"><a class="dropdown-item" 
                                                href="{{ route('front.entry.permit') }}">Entry
                                                Permits</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Change
                                                Status</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.visit.visa') }}">Visit Visas</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.domestic.worker.visa') }}">Domestic Worker
                                                Visa</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Travel
                                                History</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Absconding
                                                Removal & Overstay Fines</a></li>




                                    </ul>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Tasheel Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="#">Under
                                                Construction</a></li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Under Construction</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown dropdown-submenu dropend"><a
                                                        class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">Under Construction</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="nav-item"><a class="dropdown-item"
                                                                href="#">Under Construction</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                                href="#">Under Construction</a></li>
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

                                <li class="nav-item"><a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('front.contact.us') }}">Contact</a></li>


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
                            <li class="nav-item dropdown language-select text-uppercase">
                                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ session('locale', 'En') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('setLanguage', ['locale' => 'en']) }}">En</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('setLanguage', ['locale' => 'ar']) }}">Ar</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nav-item d-none d-md-block">
                                <a href="{{ route('front.contact.us') }}"
                                    class="btn btn-sm btn-success rounded-pill text-white">Apply Now</a>
                            </li>
                            @auth
                                @if (Auth::user()->user_type == 'admin')
                                    <li class="nav-item d-none d-md-block">
                                        <a href="{{ route('admin.dashboard') }}"
                                            class="btn btn-sm btn-primary text-white">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item d-none d-md-block">
                                        <a href="{{ route('user.dashboard') }}"
                                            class="btn btn-sm btn-primary text-white">Dashboard</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item d-none d-md-block">
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-primary text-white">Login</a>
                                </li>
                            @endauth
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
