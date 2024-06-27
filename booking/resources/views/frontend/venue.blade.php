@extends('layout.master')

@section('title', 'Venue')

@section('content')
    <div class="container-lg">
        <section id="lapangan">
            <div style="padding: 0px 0px; margin-top: 70px; margin-bottom: 30px;letter-spacing: 0px;">
                <h1 class="fw-bolder" style="font-size: 20px;">BARU <Span
                        style="color: #b31312;font-weight: bolder;">DITAMBAHKAN</Span></h1>
            </div>
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;">
                @foreach ($lapangan_new as $item)
                <div class="text-start">
                    <a href="{{route('detail',$item->title)}}"><img src="{{ asset('storage/' . $item->image) }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">{{$item->title}}</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Manado</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                            {{ number_format($item->price, 0, ',', '.') }}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="padding: 0px 0px; margin-top: 100px; margin-bottom: 30px;letter-spacing: 0px;">
                <h1 class="fw-bolder" style="font-size: 20px;">SEMUA <Span
                        style="color: #b31312;font-weight: bolder;">LAPANGAN</Span></h1>
            </div>
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;">
                @foreach ($lapangan as $item)
                <div class="text-start">
                    <a href="{{route('detail',$item->title)}}"><img src="{{ asset('storage/' . $item->image) }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">{{$item->title}}</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Manado</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                            {{ number_format($item->price, 0, ',', '.') }}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
