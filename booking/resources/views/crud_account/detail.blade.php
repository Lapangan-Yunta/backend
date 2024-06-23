@extends('backend.layouts.parent')

@section('title','Detail Account')

@section('top','Detail Account')

@section('content')
<div class="card" style="width: 100%">
    <div class="card-body">
    <ul>
        <li>
            <label class="form-label" for="">Nama User</label>
            <h5 class="card-title">{{$show->name}}</h5>
        </li>
        <li>

            <label class="form-label" for="">No HP</label>
            <span class="card-title"><strong>{{$show->phone}}</strong></span>
        </li>
        <li>

            <label class="form-label" for="">Email</label>
            <span class="card-text"><strong>{{$show->email}}</strong></span>
        </li>
        <li>

            <label class="form-label" for="">Password</label>
            <span class="card-text"><strong>{{$show->password}}</strong></span>
        </li>
        <li>
            <label class="form-label" for="">Kode Otp</label>
            <span class="card-text"><strong>{{$show->otp}}</strong></span>
        </li>
        <li>

            <label class="form-label" for="">Access</label>
            <span class="card-text"><strong>{{$show->access}}</strong></span>
        </li>
        <li>

            <label class="form-label" for="">Role</label>
            <span class="card-text"><strong>{{$show->role}}</strong></span>
        </li>
    </ul>
    </div>
    <div class="card-footer">
        <a href="{{route('account.index')}}" class="btn btn-warning mt-2" type="submit">Batal</a>
    </div>
</div>
@endsection