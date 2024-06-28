@extends('admin.backend.layouts.parent')

@section('title','Update')

@section('toSp','Booking Update')

@section('content')
    <form action="{{route('booking.update', $booking ->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mt-3 mb-3">
            <label class="form-label" for="name">Status Booking</label>
            <select name="status" id="" class="form-control">
                <option {{$booking->status == 'success' ? 'selected' : ''}} value="success">Success</option>
                <option {{$booking->status == 'gagal' ? 'selected' : ''}} value="gagal">Gagal</option>
                <option {{$booking->status == 'booked' ? 'selected' : ''}} value="booked">Booked</option>
            </select>
        </div>

        <div class="mt-3 mb-3">
            <button  class="btn btn-warning">Submit</button>
        </div>
    </form>
@endsection