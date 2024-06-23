@extends('fasilitas.template')

@section('title','Create')

@section('content')
    <form class="mt-3" action="{{route('fasilitas.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="mt-3 mb-3">
            <label class="form-label" for="name">Nama Fasilitas</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="detail_fasilitas">Detail Fasilitas</label>
            {{-- <input class="form-control @error('detail_fasilitas') is-invalid @enderror" type="text" name="detail_fasilitas" id="detail_fasilitas" value="{{old('detail_fasilitas')}}" > --}}
            <input class="form-control @error('detail_fasilitas') is-invalid @enderror" name="detail_fasilitas" id="detail_fasilitas" cols="30" rows="5">{{old('detail_fasilitas')}}
            @error('detail_fasilitas')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="descripsi">Deskripsi</label>
            <textarea class="form-control @error('descripsi') is-invalid @enderror" name="descripsi" id="descripsi" cols="30" rows="5">{{old('descripsi')}}</textarea>
            @error('descripsi')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mt-3 mb-3">
            <button class="btn btn-primary" type="submit">Tambah Data</button>
            <a href="{{route('fasilitas.index')}}" class="btn btn-danger" type="submit">Batal</a>
        </div>
        
    </form>
@endsection