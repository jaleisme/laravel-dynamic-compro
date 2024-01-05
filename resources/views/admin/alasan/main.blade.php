@extends('layouts.app')

@section('content')
<div class="container-fluid">
@if(Session::has('message'))
<div class="alert {{ Session::get('type') }} alert-dismissible fade show" role="alert">
  <strong>{{ Session::get('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <div class="row">
        <div class="col-12">
            <div class="card" style="border-radius: 16px;">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-4 px-4">
                    <div class="title d-flex flex-column">
                        <span style="font-weight: bold; font-size: 16px;">Alasan Section Management</span>
                        <small>Menu manajemen konten di section alasan.</small>
                    </div>
                    <a href="{{route('alasan.create')}}" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="plus-circle" class="me-2"></i> Add New Record</a>
                </div>
                <div class="card-body row">
                    @if(count($data) < 1)
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
                    @foreach($data as $key => $val)
                    <div class="card p-0 text-white col-3" style="height: 180px;">
                        <img src="{{ asset('/file/'.$val->image) }}" alt="{{$val->image}}" class="card-image" style="width: 100%; height:100%; object-fit: cover; border-radius: 8px;">
                        <div class="card-img-overlay d-flex flex-column justify-content-between p-3" style="background: rgb(15,15,15); background: linear-gradient(0deg, rgba(15,15,15,1) 0%, rgba(255,255,255,0) 100%);">
                            <div class="top d-flex justify-content-between">
                                <div class="status">
                                    @if($val->is_active === 1)
                                    <div class="badge __bg-success">Active</div>
                                    @else
                                    <div class="badge bg-danger">Not Active</div>
                                    @endif
                                </div>
                                <div class="actions d-flex flex-row">
                                    <a href="{{ route('alasan.edit', $val->id) }}" class="btn btn-sm btn-warning me-2">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <form action="{{ route('alasan.destroy', $val->id) }}" method="POST">
                                        @CSRF
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i data-feather="trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="bottom">
                                <span class="card-title" style="font-size: 16px; font-weight: bold;">{{$val->title}}</span>
                                <span class="card-subtitle">{{ $val->description }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-scripts')
<script>
    $(document).ready(() => {
        function deleteItem(id) {
            alert('gas', id)
        }
    })
</script>
@endsection
