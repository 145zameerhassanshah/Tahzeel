@extends('admin.layouts.master')
@section('title', 'Add Testimonial')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Add New Testimonial') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> {{ __('Home') }}</a>
                        </li>
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
                    <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('Add Testimonial') }}</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="group_id" value="{{ $group->id }}">

                                
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">{{ __('Add Testimonial') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
