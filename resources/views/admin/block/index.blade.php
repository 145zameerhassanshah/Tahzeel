@extends('admin.layouts.master')
@section('title', 'Blocks')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2 card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">Block</h3>
                        <div class="card-tools d-flex">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.block.add', $page->id) }}"><i class="fas fa-plus"></i> Add Block</a>

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

                                @foreach ($blocks as $index => $block)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><img src="{{ asset($block->icon) }}" width="70px" alt="Icon"></td>
                                    <td><img src="{{ asset($block->image) }}" width="70px" alt="Image"></td>
                                    <td>{{ $block->getTranslation('title', 'en') }}</td>
                                    <td>{{ $block->getTranslation('subtitle', 'en') }}</td>
                                    <td>{!! $block->getTranslation('description', 'en') !!}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.block.edit', $block->id) }}" class="btn btn-sm btn-info" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                
                                        <!-- Delete Button with form -->
                                        <form action="{{ route('admin.block.delete', $block->id) }}" method="POST" style="display:inline-block;">
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