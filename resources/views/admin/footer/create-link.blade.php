@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Create New Link</h3>
        </div>
        <form action="{{ route('footer.store') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group">
                        <label class="mb-2" for="">Link Icon</label>
                        <input required type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Title</label>
                        <input required type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">URL</label>
                        <input required type="text" name="link" id="" class="form-control">
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
