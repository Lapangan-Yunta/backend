@extends('rules.template')

@section('title','Create')

@section('content')
<form action="{{route('rules.update', $data ->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mt-3 mb-3">
        <label class="form-label" for="rule_in_field">Rule di lapangan</label>
        {{-- <input class="form-control" type="text" nama="rule_in_field" id="rule_in_field" value="{{$data->rule_in_field}}"> --}}
        <textarea class="form-control" name="rule_in_field" id="rule_in_field" cols="30" rows="5">{{$data->rule_in_field}}</textarea>        

    </div>

    <div class="mt-3 mb-3">
        <label class="form-label" for="rule_out_field">Rule di luar lapangan</label>
        {{-- <input class="form-control" type="text" name="rule_out_field" id="rule_out_field" value="{{$data->rule_out_field}}"> --}}
            <textarea class="form-control" name="rule_out_field" id="rule_out_field" cols="30" rows="5">{{$data->rule_out_field}}</textarea>
    </div>

    <div class="mt-3 mb-3">
        <label class="form-label" for="rule_rent">Rule rental lapangan</label>
        {{-- <input class="form-control" type="text" name="rule_rent" id="rule_rent" value="{{$data->rule_rent}}"> --}}
            <textarea class="form-control" name="rule_rent" id="rule_rent" cols="30" rows="5">
                {{$data->rule_rent}}
            </textarea>
    </div>

    <div class="mt-3 mb-3">
        <button  class="btn btn-warning">Submit</button>
    </div>


</form>
@endsection