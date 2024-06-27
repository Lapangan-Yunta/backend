@extends('admin.backend.layouts.parent')

@section('title','Rules')

@section('top','Rules')

@section('content')
    <a href="{{route('rules.create')}}" class="btn btn-primary mb-2">Tambah Rules</a>
    <table class="table bordered">
        <thead>
            <th>No</th>
            <th>Rule di Lapangan</th>
            <th>Rule di luar lapangan</th>
            <th>Rule rental lapangan</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tbody>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->rule_in_field}}</td>
                <td>{{$item->rule_out_field}}</td>
                <td>{{$item->rule_rent}}</td>
                <td>
                    <div class="d-flex flex-row ms-1">
                        <a href="{{route('rules.show', $item->id)}}" class="btn btn-primary me-1">Show</a> 
                        <a href="{{route('rules.edit', $item->id)}}" class="btn btn-warning me-1">Edit</a>
                        <form action="{{route('rules.destroy',$item->id)}}" method="POST">
                            {{-- csrf itu untuk keamanan saja biar tidak mudah dibobol katanya  --}}
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    
                </td>
            </tbody>
        @endforeach
        </tbody>
    </table>
@endsection