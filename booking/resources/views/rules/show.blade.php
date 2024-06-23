@extends('rules.template')

@section('title','Create')

@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
    
    <h5 class="card-title">Rules</h5>

    <h5 class="card-title">Rule didalam lapangan</h5>
    <p class="card-text">{{$data->rule_in_field}}</p>

    <h5 class="card-title">Rule diluar lapangan </h5>
    <p class="card-text">{{$data->rule_out_field}}</p>

    <h5 class="card-title">Rule rental lapangan</h5>
    <p class="card-text">{{$data->rule_rent}}</p>
    


    <a href="{{route('rules.index')}}" class="btn btn-danger">Kembali</a>
    </div>
</div>


@endsection