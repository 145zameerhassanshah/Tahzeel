
@php
use Illuminate\Support\Facades\Route;
@endphp
<div class="bg-light p-2 rounded mb-3" style="overflow-x: auto; white-space: nowrap;">
    <ul class="nav nav-pills flex-row" style="min-width: max-content;">
        <li class="nav-item">
            <a href="{{ route('admin.page.detail', ['slug' => $slug ]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.page.detail' ? 'active' : '' }}">
                Edit Page
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.section_title.index', ['slug' => $slug ]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.section_title.index' || Route::currentRouteName() == 'admin.section_title.add' || Route::currentRouteName() == 'admin.section_title.edit' ? 'active' : '' }}">
                Section Titles
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.page.section.index', ['slug' => $slug]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.page.section.index' || Route::currentRouteName() == 'admin.page.section.add' || Route::currentRouteName() == 'admin.page.section.edit' ? 'active' : '' }}">
                Sections
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.element.index', ['slug' => $slug]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.element.index' || Route::currentRouteName() == 'admin.element.add' || Route::currentRouteName() == 'admin.element.edit' ? 'active' : '' }}">
                 Elements
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.block.index', ['slug' => $slug]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.block.index' || Route::currentRouteName() == 'admin.block.add' || Route::currentRouteName() == 'admin.block.edit' ? 'active' : '' }}">
                Blocks
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.testimonial.index', ['slug' => $slug]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.testimonial.index' || Route::currentRouteName() == 'admin.testimonial.add' || Route::currentRouteName() == 'admin.testimonial.edit' ? 'active' : '' }}">
                Testimonials
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.hero_section.index', ['slug' => $slug]) }}" class="nav-link {{ Route::currentRouteName() == 'admin.hero_section.index' || Route::currentRouteName() == 'admin.hero_section.add' || Route::currentRouteName() == 'admin.hero_section.edit' ? 'active' : '' }}">
                Heros
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Intros
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.feature_image.index',['slug' => $slug])}}" class="nav-link {{ Route::currentRouteName() == 'admin.feature_image.index' || Route::currentRouteName() == 'admin.feature_image.add' || Route::currentRouteName() == 'admin.feature_image.edit' ? 'active' : ''}}">
                Feature Images
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Procedures
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Call to Actions
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.faq.index',['slug' => $slug])}}" class="nav-link {{ Route::currentRouteName() == 'admin.faq.index' || Route::currentRouteName() == 'admin.faq.add' || Route::currentRouteName() == 'admin.faq.edit' ? 'active' : ''}}">
                FAQs
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Document Requireds
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.why-choose-us.index',['slug' => $slug])}}" class="nav-link {{ Route::currentRouteName() == 'admin.why-choose-us.index' || Route::currentRouteName() == 'admin.why-choose-us.add' || Route::currentRouteName() == 'admin.why-choose-us.edit' ? 'active' : ''">
                Why Choose Us'
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Features
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Why Us Images
            </a>
        </li>
    </ul>
</div>
