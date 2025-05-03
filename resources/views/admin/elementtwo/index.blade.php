@extends('admin.layouts.master')
@section('title', 'Elements')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Elements') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> {{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Elements') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.element.create') }}" class="btn btn-primary">{{ __('Add Element') }}</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>{{ __('Element Name') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Features') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($elements as $element)
                                        <tr>
                                            <td>{{ $element->name['en'] }}</td>
                                            <td>{{ $element->description['en'] }}</td>
                                            <td>
                                                @if($element->image)
                                                    <img src="{{ asset('storage/' . $element->image) }}" alt="Image" width="100">
                                                @endif
                                            </td>
                                            <td>
                                                @foreach ($element->features as $feature)
                                                    <span>{{ $feature->feature_name['en'] }}</span><br>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.element.edit', $element->id) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                                <form action="{{ route('admin.element.destroy', $element->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
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
    </section>
@endsection
