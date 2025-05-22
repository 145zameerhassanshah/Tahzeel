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


                {{-- Pages --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.page.index' || Route::currentRouteName() == 'admin.page.create' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.page.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            {{ __('Pages') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        {{-- All Pages --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.page.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.page.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Pages') }}</p>
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



                    {{-- Packages --}}
                <li
                    class="nav-item {{ Route::currentRouteName() == 'admin.package.index' || Route::currentRouteName() == 'admin.package.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.package.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            {{ __('Package') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.package.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.package.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Packages') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.package.add') }}"
                                class="nav-link {{ Route::currentRouteName() == 'admin.package.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Package') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- package End --}}
                </li>
                {{-- package End --}}




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
