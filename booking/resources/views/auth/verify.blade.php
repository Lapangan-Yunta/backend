@extends('layout.master')

@section('title', 'Verify')

@section('content')
    <div class="about-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; margin-top: 50px;">
        <div class="hero-left">
            <div class=" d-flex justify-content-center">
                <img class="img-fluid rounded-4"
                    style="height: 800px; width: auto;box-shadow: rgba(0, 0, 0, 0.89) 0px 5px 10px;" src="{{ asset('img/hero2.jpg') }}"
                    alt="">
            </div>
        </div>
        <div class="hero-right " style="margin-top: 80px;">
            <h1 style="color: #b31312;font-weight: bold;"> Check Your Whatshap !</h1>
            <p class="fw-bold mt-2" style="text-align: justify;padding-right: 400px; color: #686D76;">Silakan cek Whatsaap Anda
                untuk kode verifikasi yang telah kami kirim. Terima kasih!</p>
            <p class="fw-bold" style="color: #b31312; margin-top: -15px;">MY FUTSAL</p>
            <form  method="POST" action="{{route('verify.process')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-light"
                        style="font-size: 14px;margin-bottom: -20px;">Kode Verifikasi Nomor Hp Anda :</label>
                    <input type="text" class="form-control" name="otp" style="width: 550px; height: 50px;" id="exampleFormControlInput1"
                        placeholder="123456">
                </div>
                <div class="">
                    <a href="/auth/login"><button type="submit" class="btn text-light fw-bold"
                            style="background-color: #b31312; width: 550px; height: 50px;">Verify</button></a>
                </div>
            </form>
            <div class="">
                <form action="{{route('resend')}}" method="POST">
                @csrf
                @method('POST')
                <input type="hidden" name="phone" value="{{$user->phone}}">  
                <button type="submit" class="btn text-light fw-bold mt-2"
                        style="background-color: #12b312; width: 550px; height: 50px;">Resend Otp</button>
                </form>
            </div>
        </div>


    </div>
@endsection
