@extends('layouts.app')

@section('custom-style')
<style>#google-maps-canvas img{max-height:none;max-width:none!important;background:none!important;}</style>
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
        <div class="col-12">
            <div class="card" style="border-radius: 16px;">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-4 px-4">
                    <div class="title d-flex flex-column">
                        <span style="font-weight: bold; font-size: 16px;">Maps Section Management</span>
                        <small>Menu manajemen konten di section maps.</small>
                    </div>
                    <a href="{{route('maps.create')}}" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="plus-circle" class="me-2"></i> Add New Record</a>
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
                    <div class="card bg-white p-0 col-3">
                        <div class="card-header p-2">
                            <div class="top d-flex justify-content-between">
                                <div class="status">
                                    @if($val->is_active === 1)
                                    <div class="badge __bg-success">Active</div>
                                    @else
                                    <div class="badge bg-danger">Not Active</div>
                                    @endif
                                </div>
                                <div class="actions d-flex flex-row">
                                    <a href="{{ route('maps.edit', $val->id) }}" class="btn btn-sm btn-warning me-2">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <form action="{{ route('maps.destroy', $val->id) }}" method="POST">
                                        @CSRF
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i data-feather="trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div style="list-style:none; transition: none;overflow:hidden;width:100%;height:100%;">
                                <div id="google-maps-canvas" style="height:100%; width:100%;">
                                    <iframe class="w-100" frameborder="0" src="{{ $val->link }}"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex flex-column justify-content-between p-3">
                            <div class="bottom">
                                <span class="card-title" style="max-height:32px !important; font-size: 16px; font-weight: bold;">{{$val->alias_name}}</span>
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
