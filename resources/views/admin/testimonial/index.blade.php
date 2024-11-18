@extends('admin.layouts.master')
@section('title', 'Testimonials')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Testimonials') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                                {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Testimonials') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('All Testimonials') }}</h3>
                            <a href="{{ route('testimonials.create') }}"
                                class="btn btn-success float-right">{{ __('Add New Testimonial') }}</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Testimonial (English)') }}</th>
                                        <th>{{ __('Testimonial (Arabic)') }}</th>
                                        <th>{{ __('Designation (English)') }}</th>
                                        <th>{{ __('Designation (Arabic)') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->getTranslation('testimonial', 'en') }}</td>
                                            <td>{{ $testimonial->getTranslation('testimonial', 'ar') }}</td>
                                            <td>{{ $testimonial->getTranslation('designation', 'en') }}</td>
                                            <td>{{ $testimonial->getTranslation('designation', 'ar') }}</td>
                                            <td>
                                                @if ($testimonial->img)
                                                    <img src="{{ asset('storage/' . $testimonial->img) }}"
                                                        alt="{{ $testimonial->name }}" width="50" height="50">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                    class="btn btn-primary btn-sm">{{ __('Edit') }}</a>
                                                <form id="deleteform" class="d-inline-block"
                                                    action="{{ route('testimonials.destroy', $testimonial->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="card-footer">
                        {{ $testimonials->links() }} <!-- Pagination links -->
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
