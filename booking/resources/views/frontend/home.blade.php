@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="d-flex bg-dark align-items-center " style="width: 100%;height: 60px;">
        <select class="form-select me-4 fs-6 " aria-label="Default select example"
            style="width: 280px; height: 40px; font-weight: bold ; margin-left: 100px;">
            <option class="fw-bold" selected>Jakarta</option>
            <option class="fw-bold" value="2">Manado</option>
            <option class="fw-bold" value="3">Karawang</option>
            <option class="fw-bold" value="4">Depok</option>
        </select>
        <select class="form-select me-4 fs-6 ms-3" aria-label="Default select example"
            style="width: 280px; height: 40px; font-weight: bold;" disabled>
            <option selected>Yunta Futsal</option>
        </select>

        <input type="date" class="form-control text-center fw-bold me-5"
            style="cursor: pointer; height: 40px; width: 280px;" placeholder="Tanggal" aria-label="Recipient's username"
            aria-describedby="btn-tgl">
        <a href="">
            <button class="btn text-light fw-bold ms-5"
                style="width: 280px; height: 40px; font-weight: bold; background-color: #b31312;">Search <i
                    class="fa fa-search" aria-hidden="true"></i></button>
        </a>
    </div>

    <div class=" d-flex justify-content-start" style="width: 100%; height: auto">
        <img src="{{ asset('img/hero4.jpg') }}" alt="" style="width: 100%;height: 530px; object-fit: cover;opacity: 70%;">
        <h1 class="fw-bolder text-light position-absolute " style="font-size: 35px; left: 7%; top: 320px;">Selamat Datang Di
            Website <br>Resmi Lapangan <span style="color: #b31312;font-weight: bold;">MY FUTSAL</span></h1>
        <p class="fw-bold text-light position-absolute "
            style="font-size: 18px; left: 7%; top: 440px;padding-right: 700px;text-align: justify;">Kami dengan senang hati
            menyambut Anda di tempat kami, di mana semangat olahraga dan kebersamaan bertemu. Di sini, kami menyediakan
            fasilitas futsal terbaik untuk berlatih, bertanding, atau bersenang-senang dengan teman dan keluarga.</p>
    </div>


    <div class="container-lg">
        <div style="padding: 0px 0px; margin-top: 70px; margin-bottom: 30px;letter-spacing: 0px;">
            <h1 class="fw-bolder" style="font-size: 20px;">REKOMENDASI <Span
                    style="color: #b31312;font-weight: bolder;">LAPANGAN</Span></h1>
        </div>
        <div class=""
            style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;margin-bottom: 120px;">
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven1.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">INSPIRE ARENA SULUT</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Manado</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp. 125.000,</span>
                    </p>
                </div>
            </div>
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven2.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">KORAMIL ARENA 04</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Jakarta Timur</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp. 300.000,</span>
                    </p>
                </div>
            </div>
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">CKM SUPPORT CENTER</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Karawang</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp. 50.000,</span>
                    </p>
                </div>
            </div>
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven4.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">JIEP SPORT CENTER BASKET, FUTSAL & TENNIS</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Jakarta Timur</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp. 110.000,</span>
                    </p>
                </div>
            </div>
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven5.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">SOCCER SERENIA MANSION</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Jakarta Selatan</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp. 530.000,</span>
                    </p>
                </div>
            </div>
            <div class="text-start">
                <a href="/frontend/detail"><img src="{{ asset('img/ven6.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 380px; height:295px" alt="..." /></a>
                <h5 class="fw-bolder mt-4">JS FUTSAL</h5>
                <div style="line-height: 5px;margin-top: 10px;">
                    <p class="fw-bold fs-6">Depok</p>
                    <p class="fw-bold fs-6">Harga Mulai <span style="color: #22CB1E;font-weight: bold;">Rp.
                            110.000,</span>
                    </p>
                </div>
            </div>

        </div>
        <div class=" d-flex justify-content-start mt-5" style="width: 100%; height: auto">
            <img src="{{ asset('img/hero5.jpg') }}" alt=""
                style="width: 100%;height: 400px; object-fit: cover;opacity: 100%;border-radius: 12px;filter: brightness(50%);">
            <h1 class="text-white position-absolute fw-bolder ms-5" style="margin-top: 60px;"> Move Sweat Thrive</h1>
            <p class="text-white position-absolute ms-5 fw-light"
                style="padding-right: 500px;margin-top: 140px;font-size: 28px;line-height: 70px ;text-align: justify;">
                Embrace each day with the strength to move, the courage to push limits, and the determination to be better.
                Every workout is a step towards a healthier, happier you.</p>
        </div>
    </div>
@endsection
