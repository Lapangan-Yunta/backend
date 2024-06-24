@extends('layout.custom')

@section('title', 'Confirm Booking')

@section('content')
<div class="about-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; margin-top: 50px;">
    <div class="hero-left">
      <div class=" d-flex justify-content-center">
        <img class="img-fluid rounded-4" style="height: 800px; width: auto;box-shadow: rgba(0, 0, 0, 0.89) 0px 5px 10px;" src="img/hero2.jpg" alt="">
      </div>
    </div>
    <div class="hero-right " style="margin-top: 80px;">
    <h1 style="color: #b31312;font-weight: bold;"> Check Your Inbox !</h1>
     <p class="fw-bold mt-2" style="text-align: justify;padding-right: 400px; color: #686D76;">Silakan cek email Anda untuk kode verifikasi yang telah kami kirim. Terima kasih!</p>
     <p class="fw-bold" style="color: #b31312; margin-top: -15px;">MY FUTSAL</p>
     <p class="fw-light mt-3" style="font-size: 14px;">Email Anda Sudah Terdaftar? <a href="register.html" style="color: #b31312;">Klik Disini Untuk Melakukan Registrasi Kembali</a></p>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label fw-light" style="font-size: 14px;margin-bottom: -20px;">Kode Verifikasi Email :</label>
      <input type="text" class="form-control" style="width: 550px; height: 50px;" id="exampleFormControlInput1" placeholder="123456">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label fw-light" style="font-size: 14px;margin-bottom: -20px;">Lengkapi Akun :</label>
      <input type="email" class="form-control mb-2" style="width: 550px; height: 50px;" id="exampleFormControlInput1" placeholder="Username@gmail.com">
      <input type="text" class="form-control mb-2" style="width: 550px; height: 50px;" id="exampleFormControlInput1" placeholder="Username">
      <input type="text" class="form-control mb-2" style="width: 550px; height: 50px;" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                     <div class="input-group" style="width: 550px; height: 50px; margin-bottom: 30px;">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                      </span>
                      <input type="tel"  class="form-control" id="phone" name="phone" value="" placeholder="08xxxxxxxx">
                    </div>
                  </div>
    <div class="">
      <a href="login.html"><button type="submit" class="btn text-light fw-bold" style="background-color: #b31312; width: 550px; height: 50px;">Register</button></a>
    </div>
    <p class="fw-light mt-3" style="font-size: 14px;">Tidak Menerima Kode Verifikasi? <a href="" style="color: #b31312;">Klik Disini Untuk Bantuan</a></p>
    </div>
    
    
    </div>
@endsection
