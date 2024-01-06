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
                        <span style="font-weight: bold; font-size: 16px;">Blog Categories</span>
                        <small>Menu manajemen kategori blog pada modul blog.</small>
                    </div>
                    <a href="{{route('blog-category.create')}}" class="button btn __bg-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="plus-circle" class="me-2"></i> Add New Record</a>
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
                    <div class="card p-3 col-3 d-flex flex-row justify-content-between align-items-center">
                        <h3 style="font-weight: bold; font-size: 16px;">{{ $val->name }}</h3>
                        <div class="actions d-flex flex-row">
                            <a href="{{ route('blog-category.edit', $val->id) }}" class="btn btn-sm btn-warning me-2">
                                <i data-feather="edit"></i>
                            </a>
                            <form action="{{ route('blog-category.destroy', $val->id) }}" method="POST">
                                @CSRF
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
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
