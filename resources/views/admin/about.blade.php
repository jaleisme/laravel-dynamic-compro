@extends('layouts.app')

@section('custom-style')
<style>
    [data-trix-button-group="file-tools"] {
        display: none!important;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert {{ Session::get('type') }} alert-dismissible fade show" role="alert">
    <strong>{{ Session::get('message') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <form action="{{ route('about.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="col-12">
                <div class="card w-100 bg-white">
                    <div class="bg-white card-header d-flex flex-row justify-content-between p-4">
                        <div class="title d-flex flex-column p-1">
                            <span style="font-weight: bold; font-size: 16px;">About Page Management</span>
                            <small>Menu manajemen konten di halaman about.</small>
                        </div>
                        <button type="submit" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="save" class="me-2"></i> Simpan Perubahan</button>
                    </div>
                    <div class="bg-white card-body p-0">
                        <div class="d-flex flex-row">
                            <div class="w-25 p-3 d-flex flex-column">
                                <img src="{{ asset('/file/'.$data->image) }}" alt="{{$data->image}}" class="card-image" style="width: 100%; height:100%; object-fit: cover; border-radius: 8px;">
                            </div>
                            <div class="form-group w-75 p-3">
                                <label class="mb-2">About Image</label>
                                <input id="image" value="{{ $data->image }}" type="file" name="image" class="form-control">
                                <small>
                                    <code>This is the current image. Upload a new image if you want to replace this.</code>
                                </small>
                            </div>
                        </div>
                        <div class="form-group w-100 bg-light p-3">
                            <label class="mb-2">Deskripsi</label>
                            <input id="description" value="{{ $data->description }}" type="hidden" name="description">
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <hr style="border: .5px solid #2b2b2b;">
                        <div class="form-group w-100 bg-white p-3">
                            <label class="mb-2">Visi</label>
                            <input id="visi" value="{{ $data->visi }}" type="hidden" name="visi">
                            <trix-editor input="visi"></trix-editor>
                        </div>
                        <hr style="border: .5px solid #2b2b2b;">
                        <div class="form-group w-100 bg-white p-3">
                            <label class="mb-2">Misi</label>
                            <input id="misi" value="{{ $data->misi }}" type="hidden" name="misi">
                            <trix-editor input="misi"></trix-editor>
                        </div>
                    </div>
                    <div class="bg-white card-footer"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
