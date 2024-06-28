@extends('layout.custom')

@section('title', 'Payment')

@section('content')
        @foreach($booking as $item)
            <div class="container-lg">
                <div class="rounded-3 mb-5 shadow p-4 mb-5 bg-body-tertiary rounded"
                    style="width: 1300px;height: 480px; background-color: #f5f5f5;line-height: 8px;">
                    <h4 class="text-start fw-bold">Payment Detail</h4>
                        <h4 class="mt-4 fw-light">{{ $item->lapangan->title }}</h4>
                        <p class="fw-bold" style="color: #1A4D2E;">
                            {{ \Carbon\Carbon::parse($item->schedule->date)->format('l, d F Y') }},
                            {{ $item->schedule->date }},
                            {{ sprintf('%02d:00 - %02d:00', $item->schedule->hour, $item->schedule->hour + 1) }}
                        </p>

                        <hr class="mt-4">
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold mt-3">Harga Lapangan :</p>
                            <P class="fw-bold mt-3">Rp. {{ number_format($item->lapangan->price, 0, ',', '.') }}</P>
                        </div>
                        <hr class="mt-5">

                        <p class="fw-bold mt-4">Total Bayar</p>
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold mt-4" style="color: #b31312;">Bayar Penuh</p>
                            <p class="fw-bold mt-4" style="color: #b31312;">Rp. {{ number_format($item->lapangan->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold mt-4" style="color: #b31312;">Status Pembayaran</p>
                            <p class="fw-bold mt-4" style="color: #b31312;">{{$item->status}}</p>
                        </div>
                        @if (!$detail_booking || $item->status == 'booked')
                            <a href="{{ route('booking.details', ['random_url' => $random_url, 'id' => $item->id]) }}" class="btn rounded-0 fw-bold fs-4" style="background-color: #bdc914; color: white; width: 100%; height: 60px;">Lanjut Booking</a>
                        @elseif($item->status == 'success')
                            <!-- Handle the case where there's no detail_booking -->
                            <a class="btn rounded-0 fw-bold fs-4" style="background-color: #19c630; color: white; width: 100%; height: 60px;">Sudah Bayar</a>
                        @elseif($item->status == 'gagal')
                            <a href="{{ route('booking.details', ['random_url' => $random_url, 'id' => $item->id]) }}" class="btn rounded-0 fw-bold fs-4" style="background-color: #c6191c; color: white; width: 100%; height: 60px;">Sudah Kadeluarsa</a>
                        @endif

                    </div>
                </div>
            @endforeach

    <!-- modal -->
@endsection
