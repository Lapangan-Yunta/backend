@extends('admin.backend.layouts.parent')

@section('title', 'Detail Booking')

@section('top', 'Detail Booking')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset('storage/' . $booking->lapangan->image) }}" class="card-img-top" alt="{{ $booking->lapangan->title }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nama Lapangan: {{ $booking->lapangan->title }}</h5>
                    <p class="card-text">Price: {{ $booking->lapangan->price }}</p>

                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">Nama Pembooking:</h6>
                    <ul class="list-unstyled">
                        <li>{{ $booking->user->name }}</li>
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Nomor Hp:</h6>
                    <ul class="list-unstyled">
                        <li>{{ $booking->user->phone }}</li>
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Email:</h6>
                    <ul class="list-unstyled">
                        <li>{{ $booking->user->email }}</li>
                    </ul>

                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">Fasilitas:</h6>
                    @php
                        $fasilitas = json_decode($booking->lapangan->fasilitas, true);
                    @endphp
                    <ul class="list-unstyled">
                        @if ($fasilitas)
                            @foreach ($fasilitas as $fasilitas_name)
                                <li>{{ $fasilitas_name }}</li>
                            @endforeach
                        @else
                            <li>Tidak ada fasilitas tersedia.</li>
                        @endif
                    </ul>

                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">Rules:</h6>
                    @php
                        $rules = json_decode($booking->lapangan->rules, true);
                    @endphp
                    <ul class="list-unstyled">
                        @if ($rules)
                            @foreach ($rules as $rules_name)
                                <li>{{ $rules_name }}</li>
                            @endforeach
                        @else
                            <li>Tidak ada rules tersedia.</li>
                        @endif
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Tanggal:</h6>
                    <ul class="list-unstyled">
                        <li>{{$booking->schedule->date}}</li>
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Jam:</h6>
                    <ul class="list-unstyled">
                        <li>{{ sprintf('%02d:00 - %02d:00', $booking->schedule->hour, $booking->schedule->hour + 1) }}</li>
                    </ul>

                    <h6 class="card-subtitle mb-2 text-muted">Status Booking:</h6>
                    <ul class="list-unstyled">
                        <li>{{ $booking->status }}</li>
                    </ul>

                    <a href="{{ route('booking.index') }}" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection