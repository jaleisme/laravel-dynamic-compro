@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Edit Blog Category</h3>
        </div>
        <form action="{{ route('blog-category.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Name</label>
                        <input required type="text" name="name" id="" class="form-control" value="{{ $data->name }}">
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/admin/blog-category" class="button btn btn-secondary me-3">Back</a>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
