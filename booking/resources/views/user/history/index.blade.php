@extends('user.layouts.parent')

@section('title','History Booking')

@section('top','History Booking')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Lapangan</th>
                <th>Tanggal</th>
                <th>Jam Booking</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $item)
            <tr>
                <td>{{$item->lapangan->title}}</td>
                <td>{{$item->schedule->date}}</td>
                <td>{{$item->schedule->hour}}</td>
                <td>
                    @if ($item->status == 'success')
                        <button class="btn btn-success">{{$item->status}}</button>
                    @elseif($item->status == 'gagal')
                    <button class="btn btn-danger">{{$item->status}}</button>
                    @elseif($item->status == 'booked')
                    <button class="btn btn-warning">{{$item->status}}</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection