@extends('admin.layouts.master')
@section('title', 'Enquiry')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Enquiry') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Enquiry') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Enquiry') }}</h3>
                            <div class="card-tools d-flex">

                                <a href="{{ route('admin.enquiry.add') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> {{ __('Add New Enquiry') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Phone No') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Followup Type') }}</th>
                                        <th>{{ __('Action') }}</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($enquiries as $id => $enquiry)
                                        <tr>
                                            <td>
                                                {{ ++$id }}
                                            </td>
                                            <td>
                                                {{ $enquiry->name }}
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                @if ($enquiry->status == 'published')
                                                    <span class="badge bg-success">Published</span>
                                                @elseif($enquiry->status == 'draft')
                                                    <span class="badge bg-info">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $partner->phone_no }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.partner.edit', $partner->id) }}"
                                                    class="btn btn-info btn-sm"><i
                                                        class="fas fa-pencil-alt"></i>{{ __('Edit') }}</a>


                                                <form id="deleteform" class="d-inline-block"
                                                    action="{{ route('admin.partner.delete', $partner->id) }}"
                                                    method="post">
                                                    @csrf
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
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
@endsection
