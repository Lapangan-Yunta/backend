@extends('backend.layouts.parent')

@section('title','Create Account')

@section('top','Create Account')

@section('content')
<form action="{{route('account.create.process')}}" method="POST">
    @csrf
    @method('POST')
    <div class="m-3">
        <label class="form-label" for="">Nama User</label>
        <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="m-3">
        <label class="form-label" for="">No HP</label>
        <input class="form-control" type="text" name="phone" id="phone" value="{{old('phone')}}">
        @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="m-3">
        <label class="form-label" for="">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
        @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="m-3">
        <label class="form-label" for="">Password</label>
        <input class="form-control" type="password" step="1" name="password" id="password" value="{{old('password')}}">
        @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="m-3">
        <label class="form-label" for="">Role</label>
        <select class="form-control" name="role" id="role">
            <option value="">---Pilih Role---</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        @error('role')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="m-3">
        <button class="btn btn-warning mt-2" type="submit">Save</button>
        <a href="{{route('account.index')}}" class="btn btn-warning mt-2" type="submit">Batal</a>
    </div>
</form>
@endsection