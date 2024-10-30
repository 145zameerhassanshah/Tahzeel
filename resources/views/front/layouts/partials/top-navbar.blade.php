<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none position-absolute">
            <div class="container">
                <div
                    class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ route('front.index') }}">
                            <img src="{{ asset('front/uploads/static/logo-tehzeel.png') }}" srcset="./assets/img/logo@2x.png 2x"
                                alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="{{ route('front.index') }}"><img src="./assets/img/logo-light.png"
                                    srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100 hover">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link " href="{{ route('front.index') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.about.us') }}">About Us</a></li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                        href="/amerServices.html" data-bs-toggle="dropdown"
                                        onclick="window.location='{{ route('front.amr.services') }}'; return false;">Amer
                                        Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="#">Residency Visa
                                                Issuance/Renewal</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Open File</a>
                                        </li>

                                        <!-- <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Visa</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="/visa.html">Visa</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Employement Visa</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Family Visa</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Investor Visa</a></li>

                    </ul>
                  </li> -->
                                        <li class="nav-item"><a class="dropdown-item" href="#">Visa
                                                Cancellations</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.emirate.id') }}">Emirates ID Applications</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.medical.fitness.test') }}">Medical Fitness
                                                Tests</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Entry
                                                Permits</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Change
                                                Status</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="{{ route('front.visit.visa') }}">Visit Visas</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('front.domestic.worker.visa') }}">Domestic Worker
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
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="#">Under Construction</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="#">Under Construction</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Under
                                                Construction</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('front.blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('front.contact.us') }}">Contact</a></li>


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
                                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Ar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item d-none d-md-block ">
                                <a href="./contactUs.html"
                                    class="btn btn-sm btn-success rounded-pill text-white">Apply Now</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.navbar-collapse-wrapper -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    
</div>