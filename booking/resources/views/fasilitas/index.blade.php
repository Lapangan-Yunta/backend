@extends('admin.backend.layouts.parent')

@section('title','Fasilitas')

@section('top','Fasilitas')

@section('content')
    <a href="{{route('fasilitas.create')}}" class="btn btn-primary mb-2">Tambah Fasilitas</a>
    <table class="table bordered">
        <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>Deskripsi</th>
                <th>Action</th>
        </thead>
        @foreach ($data as $item )
            <tbody>

                    <td>{{$loop->index + 1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->detail_fasilitas}}</td>
                    <td>{{$item->descripsi}}</td>
                    <td>
                        <div class="d-flex flex-row ms-1">
                            <a href="{{route('fasilitas.show', $item->id)}}" class="btn btn-primary me-1">Show</a> 
                            <a href="{{route('fasilitas.edit', $item->id)}}" class="btn btn-warning me-1">Edit</a>
                            <form action="{{route('fasilitas.destroy',$item->id)}}" method="POST">
                                {{-- csrf itu untuk keamanan saja biar tidak mudah dibobol katanya  --}}
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
            </tbody>
        @endforeach
    </table>
@endsection