@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Create New Link</h3>
        </div>
        <form action="{{ route('edit-link', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group d-flex flex-row">
                        <div class="wrapper me-2">
                            <img src="{{ asset('/file/'.$data->image) }}" alt="{{$data->image}}" class="card-image" style="width: 80px; height:80px; object-fit: cover; border-radius: 8px;">
                        </div>
                        <div class="wrapper w-100">
                            <label class="mb-2" for="">Link Icon</label>
                            <input required type="file" name="image" class="form-control">
                            <small>
                                <code>This is the current image. Upload a new image if you want to replace this.</code>
                            </small>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Title</label>
                        <input required value="{{ $data->title }}" type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">URL</label>
                        <input required value="{{ $data->link }}" type="text" name="link" id="" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/admin/footer" class="button btn btn-secondary me-3">Back</a>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
