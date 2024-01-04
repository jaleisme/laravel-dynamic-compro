@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Edit Hero Content</h3>
        </div>
        <form action="{{ route('hero.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('/file/'.$data->image) }}" alt="{{$data->image}}" class="card-image" style="width: 100%; height:100%; object-fit: cover; border-radius: 8px;">
                    <small>
                        <code>This is the current image. Upload a new image if you want to replace this.</code>
                    </small>
                </div>
                <div class="col-8" style="height: auto;">
                    <div class="form-group">
                        <label class="mb-2" for="">Hero Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Title</label>
                        <input required type="text" name="title" id="" class="form-control" value="{{ $data->title }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Subtitle</label>
                        <input required type="text" name="subtitle" id="" class="form-control" value="{{ $data->subtitle }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_active" id="is_active1" value="true" @if($data->is_active === 1) checked @endif>
                            <label class="form-check-label" for="is_active1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_active" id="is_active2" value="false" @if($data->is_active === 0) checked @endif>
                            <label class="form-check-label" for="is_active2">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/admin/hero" class="button btn btn-secondary me-3">Back</a>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
