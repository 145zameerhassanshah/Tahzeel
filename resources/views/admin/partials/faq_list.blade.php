@extends('admin.layouts.master')
@section('title', 'Elements')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2 card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><strong>Element List</strong></h3>
                        <div class="card-tools d-flex ">

                            <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.page.index') }}"><i class=""></i> All Pages</a>
                            <a class="btn btn-sm btn-primary"  href="{{ route('admin.element.add', $page->id) }}"><i class="fas fa-plus"></i> Add Element</a>

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
                                    <td>@if ($element->icon)
                                        <img src="{{ asset($element->icon) }}" width="70px" alt="Icon">
                                        @else
                                        N/A
                                    @endif</td>
                                    <td>@if ($element->image)
                                        <img src="{{ asset($element->image) }}" width="70px" alt="Image">
                                    @else
                                        N/A
                                    @endif</td>
                                    <td>{{ $element->getTranslation('title', 'en') }}</td>
                                    <td>{{ $element->getTranslation('subtitle', 'en') }}</td>
                                    <td>{!! $element->getTranslation('description', 'en') !!}</td>
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