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
                <li class="nav-item {{ Route::currentRouteName() == 'admin.partner.index' || Route::currentRouteName() == 'admin.partner.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.partner.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-unlock-alt"></i>
                        <p>
                            {{ __('Partner') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.partner.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.partner.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Partners') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.partner.add') }}" class="nav-link {{ Route::currentRouteName() == 'admin.partner.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Partner') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Partner End --}}

                    {{-- Services Category --}}
                <li class="nav-item {{ Route::currentRouteName() == 'admin.service.category.index' || Route::currentRouteName() == 'admin.service.category.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.service.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-unlock-alt"></i>
                        <p>
                            {{ __('Service Category') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.service.category.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.service.category.index' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Service Category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.category.add') }}" class="nav-link {{ Route::currentRouteName() == 'admin.service.category.add' ? 'active' : '' }}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Service Category') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Services Category End --}}

                    {{-- Services --}}
                <li class="nav-item {{ Route::currentRouteName() == 'admin.service.index' || Route::currentRouteName() == 'admin.service.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.service.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-unlock-alt"></i>
                        <p>
                            {{ __('Service') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.service.index' ? 'active' : ''}}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Services') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.add') }}" class="nav-link {{ Route::currentRouteName() == 'admin.service.add' ? 'active' : ''}}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Service') }}</p>
                            </a>
                        </li>
                    </ul>
                    {{-- Services End --}}


                </li>
                {{-- Services End --}}

                {{-- Enquiry --}}
                <li class="nav-item {{ Route::currentRouteName() == 'admin.enquiry.index' || Route::currentRouteName() == 'admin.enquiry.add' ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.enquiry.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-unlock-alt"></i>
                        <p>
                            {{ __('Enquiry') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.enquiry.index' ? 'active' : ''}}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('All Enquiries') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.add') }}" class="nav-link {{ Route::currentRouteName() == 'admin.enquiry.add' ? 'active' : ''}}">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>{{ __('Add Enquiry') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Enquiry End --}}

                {{-- users close --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
