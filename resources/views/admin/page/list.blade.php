@extends('admin.layouts.master')
@section('title', 'Page list')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline mt-3">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><b>{{ __('List of Pages') }}</b></h3>
                        <div class="card-tools d-flex">
                            <a href="{{ route('admin.page.create') }}" class="btn btn-primary btn-sm mx-1">
                                <i class="fas fa-plus"></i> {{ __('Add Page') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="tableContent">
                            <table class="table table-striped table-bordered table-sm text-center">
                                <thead>
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Page Name') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    @forelse ($pages as $id => $page)
                                    <tr>
                                        <td class="text-center">{{ ++$id }}</td>
                                        <td>
                                            {{ $page->title }}
                                        </td>
                                        <td>
                                            {{ $page->slug }}
                                        </td>
                                        <td>
                                            {{ $page->status }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <!-- <a href="{{ route('admin.page.add-groups', $page->id) }}" class="btn btn-info btn-sm mx-1">
                                                    <i class="fas fa-plus"></i> {{ __('Add Groups') }}
                                                </a> -->
                                                <a href="{{ route('admin.page.detail', ['id' => $page->id, 'slug' => $page->slug]) }}" class="btn btn-info btn-sm mx-1">
                                                    <i class="fas fa-info"></i> {{ __('Details') }}
                                                </a>
                                                <form id="deleteform" class="d-inline-block mx-1" action="#" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">No Groups available.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="loader text-center" id="loader" style="display: none">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection