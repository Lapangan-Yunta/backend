@extends('layout.master')

@section('title', 'Register')

@section('content')
    <div class="about-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; margin-top: 80px;">
        <div class="hero-left">
            <div class=" d-flex justify-content-center">
                <img class="img-fluid rounded-4"
                    style="height: 500px; width: auto;box-shadow: rgba(0, 0, 0, 0.89) 0px 5px 10px;"
                    src="{{ asset('img/hero1.jpg') }}" alt="">
            </div>
        </div>
        <div class="hero-right " style="margin-top: 70px;">
            <h1 style="color: #b31312;font-weight: bold;">Unleash The <br>Thrill Of Sports!</h1>
            <p class="fw-light mt-2" style="text-align: justify;padding-right: 250px; color: #686D76;">Sambut setiap hari
                dengan kekuatan untuk bergerak, keberanian untuk mendorong batas, dan tekad untuk menjadi lebih baik. Setiap
                latihan adalah langkah menuju kamu yang lebih sehat dan bahagia.</p>
            <p class="fw-bold " style="color: #b31312">MY FUTSAL</p>
            <div class="form-floating mt-4 mb-3">
                <input type="email" class="form-control" style="width: 550px;" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="">
                <a href="/auth/verify"><button type="submit" class="btn text-light fw-bold"
                        style="background-color: #b31312; width: 550px; height: 50px;">Register</button></a>
            </div>
            <p class="fw-light mt-3" style="font-size: 14px;">Sudah Punya Akun? <a href="/auth/login"
                    style="color: #b31312;">Login Disini</a></p>
        </div>
    </div>
@endsection
