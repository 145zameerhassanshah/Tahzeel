@extends('admin.layouts.master')
@section('title', 'Page Detail')
@section('content')

    @include('admin.page.top-nav')

    <section class="content">
        @include('admin.page.side-nav')
        <div class="row">



            <div class="col-md-12">
                {{-- content --}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Testimonials List') }}</h3>
                        <a href="{{ route('admin.testimonial.add', ['slug' => $slug]) }}"
                            class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> {{ __('Add New Testimonial') }}</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Id') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Feedback (English)') }}</th>
                                    <th>{{ __('Feedback (Arabic)') }}</th>
                                    <th>{{ __('Designation (English)') }}</th>
                                    <th>{{ __('Designation (Arabic)') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $id => $testimonial)
                                    <tr>
                                        <td>{{ ++$id }}</td>
                                        <td>{{ $testimonial->getTranslation('name', 'en') }}</td>
                                        <td>{{ $testimonial->getTranslation('feedback', 'en') }}</td>
                                        <td>{{ $testimonial->getTranslation('feedback', 'ar') }}</td>
                                        <td>{{ $testimonial->getTranslation('designation', 'en') }}</td>
                                        <td>{{ $testimonial->getTranslation('designation', 'ar') }}</td>
                                        <td>
                                            @if ($testimonial->image)
                                                <img src="{{ asset('assets/admin/uploads/testimonial/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->getTranslation('name', 'en') }}" width="50"
                                                    height="50">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                <form id="deleteform" class="d-inline-block mx-1"
                                                action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
