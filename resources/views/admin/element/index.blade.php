@extends('admin.layouts.master')
@section('title', 'Elements')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Elements</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>Home</a></li>
                    <li class="breadcrumb-item">Element</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">Element</h3>
                        <div class="card-tools d-flex">
                            <a class="dropdown-item" href="{{ route('admin.element.add', $page->id) }}">Add Element</a>

                            {{-- <a href="{{ route('admin.element.add') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Add New Element</a> --}}
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered data_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($elements as $index => $element)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><img src="{{ asset($element->icon) }}" width="70px" alt="Icon"></td>
                                    <td><img src="{{ asset($element->image) }}" width="70px" alt="Image"></td>
                                    <td>{{ $element->getTranslation('title', 'en') }}</td>
                                    <td>{{ $element->getTranslation('subtitle', 'en') }}</td>
                                    <td>{{ $element->getTranslation('description', 'en') }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.element.edit', $element->id) }}" class="btn btn-sm btn-info" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                
                                        <!-- Delete Button with form -->
                                        <form action="{{ route('admin.element.delete', $element->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this element?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
@endsection