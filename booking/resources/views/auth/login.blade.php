@extends('layout.master')

@section('title', 'Login')

@section('content')
    <div class="about-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; margin-top: 80px;">
        <div class="hero-left">
            <div class=" d-flex justify-content-center">
                <img class="img-fluid rounded-4"
                    style="height: 600px; width: auto;box-shadow: rgba(0, 0, 0, 0.89) 0px 5px 10px;" src="{{ asset('img/hero3.jpg') }}"
                    alt="">
            </div>
        </div>
        <form action="{{route('login.process')}}" method="POST">
            @csrf
            @method('POST')
            <div class="hero-right " style="margin-top: 70px;">
                <h1 style="color: #b31312;font-weight: bold;">Kick Into Action !</h1>
                <p class="fw-bold mt-4" style="text-align: justify;padding-right: 210px; color: #686D76;">Ribuan orang telah
                    merasakan pengalaman seru berolahraga bersama kami. Sekarang Giliran kamu!</p>
                <p class="fw-bold mt-3" style="color: #b31312; font-size: 24px;">MY FUTSAL</p>
                <div class="form-floating mt-4 mb-1">
                    <input type="text" class="form-control" name="phone" style="width: 550px;" id="floatingInput" placeholder="username">
                    <label for="floatingInput">Nomor Hp</label>
                </div>
                <div class="form-floating mt-2 mb-4">
                    <input type="password" class="form-control" name="password" style="width: 550px;" id="floatingInput" placeholder="password">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="">
                    <button type="submit" class="btn text-light fw-bold"
                            style="background-color: #b31312; width: 550px; height: 50px;">Login</button>
                </div>
                <p class="fw-light mt-3" style="font-size: 14px;">Kamu Belum Punya Akun? <a href="/auth/register"
                        style="color: #b31312;">Register Disini!</a></p>
            </div>
        </form>
    </div>
@endsection
