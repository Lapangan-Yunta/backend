@extends('backend.layouts.parent')

@section('title','Update Account')

@section('top','Update Account')

@section('content')
<form action="{{route('account.update',$show->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="m-3">
        <label class="form-label" for="">Nama User</label>
        <input class="form-control" type="text" name="name" id="name" value="{{$show->name}}">
    </div>
    <div class="m-3">
        <label class="form-label" for="">No HP</label>
        <input class="form-control" type="text" name="phone" id="phone" value="{{$show->phone}}" readonly>
    </div>
    <div class="m-3">
        <label class="form-label" for="">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="{{$show->email}}" readonly> 
    </div>
    <div class="m-3">
        <label class="form-label" for="">Password</label>
        <input class="form-control" type="password" step="1" name="password" id="password" value="{{$show->password}}">
    </div>
    <div class="m-3">
        <label class="form-label" for="">Role</label>
        <select class="form-control" name="role" id="role">
            <option {{$show->role == 'admin' ? 'selected' : ''}} value="admin">Admin</option>
            <option {{$show->role == 'user' ? 'selected' : ''}}  value="user">User</option>
        </select>
    </div>
    <div class="m-3">
        <button class="btn btn-warning mt-2" type="submit">Save</button>
        <a href="{{route('account.index')}}" class="btn btn-warning mt-2" type="submit">Batal</a>
    </div>
</form>
@endsection