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
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven1.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">INSPIRE ARENA SULUT</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Manado</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                125.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven2.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">KORAMIL ARENA 04</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Timur</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                300.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven3.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">CKM SUPPORT CENTER</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Karawang</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                50.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven4.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">JIEP SPORT CENTER BASKET, FUTSAL & TENNIS</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Timur</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                110.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven5.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">SOCCER SERENIA MANSION</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Selatan</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                530.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven6.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">JS FUTSAL</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Depok</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                110.000,</span></p>
                    </div>
                </div>

            </div>
            <div style="padding: 0px 0px; margin-top: 100px; margin-bottom: 30px;letter-spacing: 0px;">
                <h1 class="fw-bolder" style="font-size: 20px;">LAPANGAN <Span
                        style="color: #b31312;font-weight: bolder;">OUTDOOR</Span></h1>
            </div>
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;">
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven1.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">INSPIRE ARENA SULUT</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Manado</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                125.000,</span></p>
                    </div>
                </div>

                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven5.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">SOCCER SERENIA MANSION</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Selatan</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                530.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven6.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">JS FUTSAL</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Depok</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                110.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven4.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">JIEP SPORT CENTER BASKET, FUTSAL & TENNIS</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Timur</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                110.000,</span></p>
                    </div>
                </div>
            </div>
            <div style="padding: 0px 0px; margin-top: 100px; margin-bottom: 30px;letter-spacing: 0px;">
                <h1 class="fw-bolder" style="font-size: 20px;">LAPANGAN <Span
                        style="color: #b31312;font-weight: bolder;">INDOOR</Span></h1>
            </div>
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;">

                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven2.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">KORAMIL ARENA 04</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Jakarta Timur</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                300.000,</span></p>
                    </div>
                </div>
                <div class="text-start">
                    <a href="/frontend/detail"><img src="{{ asset('img/ven3.jpg') }}" class="img rounded-3 mt-4"
                            style="width: 380px; height:295px" alt="..." /></a>
                    <h5 class="fw-bolder mt-4">CKM SUPPORT CENTER</h5>
                    <div style="line-height: 5px;margin-top: 10px;">
                        <p class="fw-bold fs-6">Karawang</p>
                        <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                                50.000,</span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
