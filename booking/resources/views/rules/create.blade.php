@extends('admin.backend.layouts.parent')

@section('title','Create')

@section('content')
    <form class="mt-3" action="{{route('rules.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="mt-3 mb-3">
            <label class="form-label" for="rule_in_field">Rule di lapangan</label>
            <textarea class="form-control" name="rule_in_field" id="rule_in_field" cols="30" rows="5">{{old('rule_in_field')}}</textarea>        
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="rule_out_field">Rule di luar lapangan</label>
            <textarea class="form-control" name="rule_out_field" id="rule_out_field" cols="30" rows="5">{{old('rule_out_field')}}</textarea>
        </div>

        <div class="mt-3 mb-3">
            <label class="form-label" for="rule_rent">Rule rental lapangan</label>
            <textarea class="form-control" name="rule_rent" id="rule_rent" cols="30" rows="5">
                {{old('rule_rent')}}
            </textarea>
        </div>

        <div class="mt-3 mb-3">
            <button class="btn btn-primary" type="submit">Tambah Data</button>
            {{-- <a href="{{route('fasilitas.index')}}" class="btn btn-danger" type="submit">Batal</a> --}}
        </div>
        
    </form>
@endsection