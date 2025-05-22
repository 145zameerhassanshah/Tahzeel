@extends('admin.layouts.master')

@section('title', 'All Users')

@section('content')
<form action="{{ isset($package) && $package->id ? route('admin.package.update', $package->id) : route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($package) && $package->id)
        @method('PUT')
    @endif

    <!-- Package Fields -->
    <div class="form-group mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $package->title ?? '') }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Subtitle</label>
        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $package->subtitle ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label>Amount</label>
        <input type="number" step="0.01" name="amount" class="form-control" value="{{ old('amount', $package->amount ?? '') }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Discount %</label>
        <input type="number" step="0.01" name="discount_percentage" class="form-control" value="{{ old('discount_percentage', $package->discount_percentage ?? '') }}">
    </div>

    <div class="form-group mb-3">
        <label>Discounted Amount</label>
        <input type="number" step="0.01" name="discounted_amount" class="form-control" value="{{ old('discounted_amount', $package->discounted_amount ?? '') }}">
    </div>

    <!-- Status and Publish -->
    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ (old('status', $package->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ (old('status', $package->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <div class="form-group mb-3">
        <label>Publish</label>
        <select name="publish" class="form-control">
            <option value="draft" {{ (old('publish', $package->publish ?? '') == 'draft') ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ (old('publish', $package->publish ?? '') == 'published') ? 'selected' : '' }}>Published</option>
        </select>
    </div>

    <!-- Details Section -->
    <h4>Package Details</h4>
    <div id="details-wrapper">
        @foreach($details ?? [] as $i => $detail)
            <div class="row detail-row mb-2">
                <div class="col-md-6">
                    <input type="text" name="details[{{ $i }}][title]" class="form-control" placeholder="Detail Title" value="{{ $detail->title }}" required>
                </div>
                <div class="col-md-3">
                    <select name="details[{{ $i }}][status]" class="form-control">
                        <option value="included" {{ $detail->status == 'included' ? 'selected' : '' }}>Included</option>
                        <option value="excluded" {{ $detail->status == 'excluded' ? 'selected' : '' }}>Excluded</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="number" name="details[{{ $i }}][order_no]" class="form-control" value="{{ $detail->order_no ?? 0 }}">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm remove-detail">&times;</button>
                </div>
            </div>
        @endforeach
    </div>

    <button type="button" id="add-detail" class="btn btn-secondary btn-sm">Add Detail</button>

    <hr>
    <button type="submit" class="btn btn-primary">Save Package</button>
</form>

<script>
    document.getElementById('add-detail').addEventListener('click', function () {
        let index = document.querySelectorAll('.detail-row').length;
        let wrapper = document.getElementById('details-wrapper');

        let row = document.createElement('div');
        row.classList.add('row', 'detail-row', 'mb-2');
        row.innerHTML = `
            <div class="col-md-6">
                <input type="text" name="details[${index}][title]" class="form-control" placeholder="Detail Title" required>
            </div>
            <div class="col-md-3">
                <select name="details[${index}][status]" class="form-control">
                    <option value="included">Included</option>
                    <option value="excluded">Excluded</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="details[${index}][order_no]" class="form-control" value="0">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm remove-detail">&times;</button>
            </div>
        `;
        wrapper.appendChild(row);
    });

    document.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('remove-detail')) {
            e.target.closest('.detail-row').remove();
        }
    });
</script>
@endsection
