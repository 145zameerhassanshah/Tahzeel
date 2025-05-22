@extends('admin.layouts.master')
@section('title', 'Add Package')

@section('content')
<div class="container">
    <h2>Add New Package</h2>
    <form action="{{ route('admin.package.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Package Fields -->
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control">
        </div>

        <div class="mb-3">
            <label>Icon</label>
            <input type="file" name="icon" class="form-control">
        </div>

        <div class="mb-3">
            <label>Amount</label>
            <input type="number" name="amount" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Discount %</label>
            <input type="number" name="discount_percentage" step="0.01" class="form-control">
        </div>

        <div class="mb-3">
            <label>Discounted Amount</label>
            <input type="number" name="discounted_amount" step="0.01" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Publish</label>
            <select name="publish" class="form-control">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

        <!-- Package Details -->
        <h4>Package Details</h4>
        <div id="details-wrapper"></div>
        <button type="button" id="add-detail" class="btn btn-secondary btn-sm mb-3">Add Detail</button>

        <br><button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
    let detailIndex = 0;

    document.getElementById('add-detail').addEventListener('click', function () {
        const wrapper = document.getElementById('details-wrapper');
        const row = document.createElement('div');
        row.classList.add('row', 'mb-2');
        row.innerHTML = `
            <div class="col-md-6">
                <input type="text" name="details[${detailIndex}][title]" class="form-control" placeholder="Detail Title" required>
            </div>
            <div class="col-md-3">
                <select name="details[${detailIndex}][status]" class="form-control">
                    <option value="included">Included</option>
                    <option value="excluded">Excluded</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="details[${detailIndex}][order_no]" class="form-control" value="0">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger btn-sm remove-detail">&times;</button>
            </div>
        `;
        wrapper.appendChild(row);
        detailIndex++;
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-detail')) {
            e.target.closest('.row').remove();
        }
    });
</script>
@endsection
