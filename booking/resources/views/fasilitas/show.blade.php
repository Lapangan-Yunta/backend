@extends('admin.backend.layouts.parent')

@section('title','Detail')

@section('toSp','Fasilitas Detail')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h5 class="card-title">Nama Fasilitas</h5>
            <p class="card-text">{{$data->name}}</p>

            <h5 class="card-title">Detail Fasilitas</h5>
            <p class="card-text">{{$data->detail_fasilitas}}</p>

            <h5 class="card-title">Deskripsi</h5>
            <p class="card-text">{{$data->descripsi}}</p>

            <a href="{{route('fasilitas.index')}}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
@endsection