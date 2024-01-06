@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Edit Maps Section Content</h3>
        </div>
        <form action="{{ route('maps.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Alias Name</label>
                        <input required type="text" name="alias_name" id="" class="form-control" value="{{ $data->alias_name }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Link</label>
                        <input required type="text" name="link" id="" class="form-control" value="{{ $data->link }}">
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
                        <a href="/admin/maps" class="button btn btn-secondary me-3">Back</a>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
