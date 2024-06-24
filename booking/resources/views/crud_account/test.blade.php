@extends('backend.layouts.parent')

@section('title','Account')

@section('top','Account')

@section('content')
<a href="{{route('account.create')}}"  class="btn btn-primary mb-2">Input New Data</a>
<table class="table bordered" border="1" align="center">
    <thead class="table-primary">
        <th>ID</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    @foreach ($data as $item)
        <tbody>
            <td>{{$loop->index + 1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
            <td>
                <a href="{{route('account.show',$item->id)}}" class="btn btn-primary">Detail</a>
                <a href="{{route('account.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('account.destroy',$item->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button> 
                </form>
            </td>
        </tbody>
    @endforeach
</table>
@endsection