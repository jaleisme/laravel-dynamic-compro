@extends('layouts.app')

@section('custom-style')
<style>
    body{
        min-height: 100vh;
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
        <form action="{{ route('footer.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @CSRF
            @method('PUT')
            <div class="col-12">
                <div class="card w-100 bg-white">
                    <div class="bg-white card-header d-flex flex-row justify-content-between p-4">
                        <div class="title d-flex flex-column p-1">
                            <span style="font-weight: bold; font-size: 16px;">Footer Content Management</span>
                            <small>Menu manajemen konten di section footer.</small>
                        </div>
                        <button type="submit" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="save" class="me-2"></i> Simpan Perubahan</button>
                    </div>
                    <div class="bg-white card-body p-0">
                        <div class="form-group w-100 bg-light p-3">
                            <label class="mb-2">Detail Kontak</label>
                            <input id="contact_detail" type="hidden" value="{{ $data->contact_detail }}" name="contact_detail">
                            <trix-editor input="contact_detail"></trix-editor>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card w-100 bg-white">
                <div class="bg-white card-header d-flex flex-row justify-content-between p-4">
                    <div class="title d-flex flex-column p-1">
                        <span style="font-weight: bold; font-size: 16px;">Footer Links</span>
                        <small>Menu manajemen link di section footer.</small>
                    </div>
                    <a href="{{ route('footer.create') }}" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="plus-circle" class="me-2"></i> Tambah Link</a>
                </div>
                <div class="bg-white card-body p-2">
                    @if(count($links) < 1)
                    <center class="text-secondary">
                        <br>
                        <br>
                        <i data-feather="alert-circle" style="width: 64px;"></i>
                        <br>
                        <span style="font-size: 16px;">There's no existing record.</span>
                        <br>
                        <br>
                    </center>
                    @else
                    @foreach($links as $key => $val)
                    <ol class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="me-auto d-flex flex-row">
                                <img src="{{ asset('/file/'.$val->image) }}" alt="{{$val->image}}" style="width: 40px; height: 40px; object-fit: contain;">
                                <div class="ms-2">
                                    <div class="fw-bold">{{ $val->title }}</div>
                                    <a href="{{ $val->link }}" class="text-primary" style="text-decoration: none;">{{ $val->link }}</a>
                                </div>
                            </div>
                            <div class="actions d-flex flex-row">
                                <a href="{{ route('footer.edit', $val->id) }}" class="btn btn-sm btn-warning me-2">
                                    <i data-feather="edit"></i>
                                </a>
                                <form action="{{ route('footer.destroy', $val->id) }}" method="POST">
                                    @CSRF
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        <i data-feather="trash"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ol>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
