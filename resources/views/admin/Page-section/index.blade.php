@extends('admin.layouts.master')
@section('title', 'Page Section')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Page Section') }}</h3>
                            <div class="card-tools d-flex">
                                <a href="{{ route('admin.page.section.add', $page->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> {{ __('Add Page Section') }}
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Type</th>
                                        <th>Order No</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pageSections as $section)
                                        <tr>
                                            <td>{{ $section->id }}</td>
                                            <td>{{ $section->title['en'] ?? 'N/A' }}</td> <!-- Example of getting JSON data for 'en' -->
                                            <td>{{ $section->subtitle['en'] ?? 'N/A' }}</td>
                                            <td>{{ $section->description['en'] ?? 'N/A' }}</td>
                                            <td><img src="{{ asset('storage/'.$section->image) }}" alt="Image" width="100"></td>
                                            <td>{{ $section->type }}</td>
                                            <td>{{ $section->order_no }}</td>
                                            <td>
                                                <a href="{{ route('admin.page.section.edit', $section->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                                                <form action="{{ route('admin.page.section.delete', $section->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this section?')">Delete</button>
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
