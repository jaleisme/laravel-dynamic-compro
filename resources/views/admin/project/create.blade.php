@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h3 class="fw-bold">Create New Project</h3>
        </div>
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="row">
                <div class="col-12" style="height: auto;">
                    <div class="form-group">
                        <label class="mb-2" for="">Project Snapshot</label>
                        <input required type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2" for="">Title</label>
                        <input required type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2">Description</label>
                        <input id="description" type="hidden" name="description">
                        <trix-editor class="bg-light" input="description"></trix-editor>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2">Category</label>
                        <select class="form-select form-control" aria-label="Project Category" name="category_id">
                            <option selected disabled>Choose one</option>
                            @foreach($category as $key => $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="/admin/project" class="button btn btn-secondary me-3">Back</a>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
