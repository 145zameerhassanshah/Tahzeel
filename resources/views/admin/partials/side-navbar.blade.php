<aside class="main-sidebar elevation-4 main-sidebar elevation-4 sidebar-primary-primary">
    <!-- Sidebar -->
    @php
        use Illuminate\Support\Facades\Route;
    @endphp

    <div class="sidebar pt-0 mt-0">

        <div class="user-panel">
            <a href="{{ route('admin.dashboard') }}" class="name text-dark">
                <img src="{{ asset('assets/core/logo.png') }}" alt="" width="200px">
            </a>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }} @if (request()->path() == 'admin/dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'admin.profile.edit' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.profile.edit') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.profile.edit' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            {{ __('Profile') }}
                        </p>
                    </a>
                </li>




                {{-- Groups --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.group.index' || Route::currentRouteName() == 'admin.group.create' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            {{ __('Groups') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        {{-- All Groups --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.group.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.group.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Groups') }}</p>
                            </a>
                        </li>

                        {{-- Add New Group --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.group.create') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.group.create' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add New Group') }}</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{-- users --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.user.index' || Route::currentRouteName() == 'admin.user.pendingUsers' || Route::currentRouteName() == 'admin.user.approvedUsers' || Route::currentRouteName() == 'admin.user.blockedUsers' ? 'menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Users') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.user.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.pendingUsers') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.user.pendingUsers' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Pending Users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.approvedUsers') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.user.approvedUsers' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Approved Users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.blockedUsers') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.user.blockedUsers' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Blocked Users') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Partner --}}

                {{-- Gallery --}}

                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.gcategory.index' || Route::currentRouteName() == 'admin.gallery.index' ? 'menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Gallery') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.gallery.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.gallery.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Galleries') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.gcategory.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.gcategory.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Categories') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Gallery --}}

                {{-- Blog --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.bcategory.index' || Route::currentRouteName() == 'admin.blog.index' ? 'menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Blog') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.blog.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.blog.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Blogs') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.bcategory.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.bcategory.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Categories') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Blog --}}


                {{-- Job --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.job.index' || Route::currentRouteName() == 'admin.jcategory.index' ? 'menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Job') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.job.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.job.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Jobs') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.jcategory.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.jcategory.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Categories') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Job --}}


                {{-- Feature --}}
                <li class="nav-item">
                    <a href="{{ route('admin.feature.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.feature.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Features') }}
                        </p>
                    </a>

                </li>

                {{-- End Feature --}}

                {{-- Section Title --}}
                <li class="nav-item">
                    <a href="{{ route('admin.section_title.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.section_title.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Section Titles') }}
                        </p>
                    </a>

                </li>

                {{-- End Section Title --}}
                
                {{-- Introduction Section --}}
                <li class="nav-item">
                    <a href="{{ route('admin.introduction_section.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.introduction_section.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Introduction Sections') }}
                        </p>
                    </a>

                </li>

                {{-- End Introduction Section --}}

                {{-- Hero Section --}}
                <li class="nav-item">
                    <a href="{{ route('admin.hero_section.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.hero_section.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Hero Sections') }}
                        </p>
                    </a>

                </li>

                {{-- End Hero Section --}}


                {{-- Procedure --}}
                <li class="nav-item">
                    <a href="{{ route('admin.procedure.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.procedure.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Procedures') }}
                        </p>
                    </a>

                </li>

                {{-- Call To Action --}}
                <li class="nav-item">
                    <a href="{{ route('admin.call-to-action.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.call-to-action.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('CallToActions') }}
                        </p>
                    </a>

                </li>

                {{-- Testimonial --}}
                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link {{ Route::currentRouteName() == 'testimonials.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Testimonials') }}
                        </p>
                    </a>

                </li>

                {{-- Faq --}}
                <li class="nav-item">
                    <a href="{{ route('faqs.index') }}" class="nav-link {{ Route::currentRouteName() == 'faqs.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('Faqs') }}
                        </p>
                    </a>

                </li>

                {{-- WhyChooseUs --}}
                <li class="nav-item">
                    <a href="{{ route('admin.why-choose-us.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.why-choose-us.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('WhyChooseUs') }}
                        </p>
                    </a>

                </li>

                {{-- WhyChooseUs --}}
                <li class="nav-item">
                    <a href="{{ route('admin.document-required.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.document-required.index' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ __('DocumentRequired') }}
                        </p>
                    </a>

                </li>

                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.partner.index' || Route::currentRouteName() == 'admin.partner.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.partner.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            {{ __('Partner') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.partner.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.partner.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Partners') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.partner.add') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.partner.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Partner') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Partner End --}}

                    {{-- Services Category --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.service.category.index' || Route::currentRouteName() == 'admin.service.category.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.service.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            {{ __('Service Category') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.service.category.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.service.category.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Service Category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.category.add') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.service.category.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Service Category') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Services Category End --}}

                    {{-- Services --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.service.index' || Route::currentRouteName() == 'admin.service.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.service.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            {{ __('Service') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.service.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Services') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.add') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.service.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Service') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Services End --}}


                </li>
                {{-- Services End --}}

                {{-- Enquiry --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.enquiry.index' || Route::currentRouteName() == 'admin.enquiry.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.enquiry.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            {{ __('Enquiry') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.enquiry.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Enquiries') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.add') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.enquiry.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Enquiry') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Enquiry End --}}





                {{-- faq --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'faqs.index' || Route::currentRouteName() == 'faqs.create' ? 'menu-open' : '' }}">
                    <a href="{{ route('faqs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            {{ __('Faq') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('faqs.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'faqs.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Faq') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faqs.create') }}"
                                class="nav-link {{ Route::currentRouteName() == 'faqs.create' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Faq') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- end Faq --}}

                {{-- testimonila --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'testimonials.index' || Route::currentRouteName() == 'testimonials.create' ? 'menu-open' : '' }}">
                    <a href="{{ route('testimonials.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            {{ __('Testimonial') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('testimonials.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'testimonials.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Testimonial') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonials.create') }}"
                                class="nav-link {{ Route::currentRouteName() == 'testimonials.create' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Testimonial') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- end --}}


                {{-- Settings --}}

                <li class="nav-item">
                    <a href="{{ route('admin.setting.edit') }}"
                        class="nav-link {{ Route::currentRouteName() == 'admin.setting.edit' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            {{ __('Settings') }}
                        </p>
                    </a>
                </li>

                {{-- Settings End --}}

                {{-- Trash --}}

                <li class="nav-item {{ Route::currentRouteName() == 'menu-open' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-trash"></i>

                        <p>
                            {{ __('Trash') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.restore.page') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.enquiry.restore.page' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Enquiries') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- End of Trash --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
