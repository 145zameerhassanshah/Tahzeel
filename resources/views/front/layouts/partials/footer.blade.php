<footer class="bg-dark section-frame">
    <div class="container pb-13 pb-md-15">
        <div class="card image-wrapper bg-full bg-image bg-overlay mt-n50p mx-md-5"
            data-image-src="{{ asset('assets/static/contact.webp') }}">
            <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-lg-start">
                <h3 class="display-4 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">
                    {{ __('footer.Ready to simplify your visa process?') }} <br>
                    {{ __('footer.Contact our experts today!') }}
                </h3>
                <a href="{{ route('front.contact.us') }}" class="btn btn-lg btn-white rounded mb-0 text-nowrap">
                    {{ __('footer.Contact Us') }}
                </a>
            </div>
        </div>
        <div class="text-inverse mx-md-5 mt-n15 mt-lg-0">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <a href="{{ route('front.index') }}">
                            <!-- <img src="{{ asset($setting->logo) }}" width="150px" srcset="{{ asset($setting->logo) }}" alt="" /> -->
                        </a>
                        <p class="mb-4">© <script>
                                document.write(new Date().getUTCFullYear());
                            </script>
                            {{ __('footer.© 2025 Tah-zeel.') }} <br class="d-none d-lg-block" />
                            {{ __('footer.All rights reserved.') }}
                        </p>
                        <nav class="nav social social-white">
                            <a href="{{ $setting->fb_link }}"><i class="uil uil-facebook-f"></i></a>
                            <a href="{{ $setting->insta_link }}"><i class="uil uil-instagram"></i></a>
                            <a href="{{ $setting->yt_link }}"><i class="uil uil-youtube"></i></a>
                            <a href="{{ $setting->tiktok_link }}"><i class="uil uil-tiktok"></i></a>
                            <a href="{{ $setting->whatsapp_link }}"><i class="uil uil-whatsapp"></i></a>
                        </nav>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">{{ __('footer.Get in Touch') }}</h4>
                        <address class="pe-xl-15 pe-xxl-17">{{ $setting->address }}</address>
                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a><br />
                        {{ $setting->phone_no }}
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">{{ __('footer.Learn More') }}</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">{{ __('footer.About Us') }}</a></li>
                            <li><a href="#">{{ __('footer.Our Story') }}</a></li>
                            <li><a href="#">{{ __('footer.Projects') }}</a></li>
                            <li><a href="#">{{ __('footer.Terms of Use') }}</a></li>
                            <li><a href="#">{{ __('footer.Privacy Policy') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">{{ __('footer.Our Newsletter') }}</h4>
                        <p class="mb-5">{{ __('footer.Subscribe to our newsletter to get our news & deals delivered to you.') }}</p>
                        <div class="newsletter-wrapper">
                            <div id="mc_embed_signup2">
                                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control"
                                                placeholder="{{ __('footer.Email Address') }}" id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">{{ __('footer.Email Address') }}</label>
                                            <input type="submit" value="{{ __('footer.Join') }}" name="subscribe"
                                                id="mc-embedded-subscribe2"
                                                class="btn btn-success text-white"
                                                style="transition: background-color 0.3s ease-in-out;"
                                                onmouseover="this.style.backgroundColor='#E2626B'; this.style.Color='white'"
                                                onmouseout="this.style.backgroundColor='#45C4A0'; this.style.color='white'">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none"></div>
                                            <div class="response" id="mce-success-response2" style="display:none"></div>
                                        </div>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value="">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>