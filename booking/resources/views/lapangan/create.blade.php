@extends('admin.backend.layouts.parent')

@section('title','Field Create')

@section('content')
    <form action="{{route('lapangan.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mt-3 mb-3">
            <label class="form-label" for="image">Image</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label" for="title">Field</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" type="text" name="price" id="price">
        </div>
        <label class="form-label" for="fasilitas_id">Fasilitas</label>
        <div class=" mb-3">
            @forelse ($fasilitas as $item)
            <div class="d-flex">
                <input class="form-checkbox mr-2" type="checkbox" value="{{$item->name}}" name="fasilitas[]" id="fasilitas_id">
                <label class="form-label mt-2" for="fasilitas_id">{{$item->name}}</label>
            </div>
            @empty
            @endforelse
        </div>
        <label class="form-label" for="id_rules">Rules Di Dalam</label>
        <div class=" mb-3">
            @forelse ($rules as $item)
            <div class="d-flex">
                <input class="form-checkbox mr-2" type="checkbox" value="{{$item->rule_in_field}}" name="rules[]" id="id_rules">
                <label class="form-label mt-2" for="id_rules">{{$item->rule_in_field}}</label>
            </div>
            @empty
            @endforelse
        </div>
        <label class="form-label" for="id_rules">Rules Di Luar</label>
        <div class=" mb-3">
            @forelse ($rules as $item)
            <div class="d-flex">
                <input class="form-checkbox mr-2" type="checkbox" value="{{$item->rule_out_field}}" name="rules[]" id="id_rules">
                <label class="form-label mt-2" for="id_rules">{{$item->rule_out_field}}</label>
            </div>
            @empty
            @endforelse
        </div>
        <label class="form-label" for="id_rules">Rules Pembayaran</label>
        <div class=" mb-3">
            @forelse ($rules as $item)
            <div class="d-flex">
                <input class="form-checkbox mr-2" type="checkbox" value="{{$item->rule_rent}}" name="rules[]" id="id_rules">
                <label class="form-label mt-2" for="id_rules">{{$item->rule_rent}}</label>
            </div>
            @empty
            @endforelse
        </div>
        <div class="mb-3">
            <button class="btn btn-warning" type="submit">Submit</button>
        </div>
    </form>
@endsection