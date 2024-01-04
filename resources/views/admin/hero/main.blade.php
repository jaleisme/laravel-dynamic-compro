@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="border-radius: 16px;">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-4 px-4">
                    <span style="font-weight: bold; font-size: 16px;">Hero Content Management</span>
                    <a href="{{route('hero.create')}}" class="button btn btn-primary px-3 py-2 d-flex align-items-center" style="font-size: 14px;"><i data-feather="plus-circle" class="me-2"></i> Add New Record</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col" style="width: 40%;">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subtitle</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $val)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td><img src="{{ asset('/file/'.$val->image) }}" alt="{{$val->image}}" style="width: 100%;"></td>
                                    <td>{{$val->title}}</td>
                                    <td>{{$val->subtitle}}</td>
                                    <td>
                                        @if($val->is_active = true)
                                        <div class="badge bg-success">Active</div>
                                        @else
                                        <div class="badge bg-danger">Not Active</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-warning">
                                            <i data-feather="edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-outline-danger">
                                            <i data-feather="trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
