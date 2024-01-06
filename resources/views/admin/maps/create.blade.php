@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Create New Maps Section Content</h3>
        </div>
        <form action="{{ route('maps.store') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group">
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Alias Name</label>
                        <input required type="text" name="alias_name" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Link</label>
                        <input required type="text" name="link" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_active" id="is_active1" checked value="true">
                            <label class="form-check-label" for="is_active1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_active" id="is_active2" value="false">
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
