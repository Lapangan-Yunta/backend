@extends('admin.backend.layouts.parent')

@section('title','Update')

@section('toSp','Fasilitas Update')

@section('content')
    <form action="{{route('fasilitas.update', $data ->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mt-3 mb-3">
            <label class="form-label" for="name">Nama Fasilitas</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$data->name}}">
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="detail_fasilitas">Detail Fasilitas</label>
            <input class="form-control" type="text" name="detail_fasilitas" id="detail_fasilitas" value="{{$data->detail_fasilitas}}">
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="descripsi">Deskripsi</label>
            <textarea class="form-control" type="text" name="descripsi" id="descripsi" >{{$data->descripsi}}</textarea>
        </div>

        <div class="mt-3 mb-3">
            <button  class="btn btn-warning">Submit</button>
        </div>
    </form>
@endsection