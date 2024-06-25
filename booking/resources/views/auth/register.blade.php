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
        <form action="{{route('register.process')}}" method="POST">
            @csrf
            @method('POST')
            <div class="hero-right " style="">
                <h1 style="color: #b31312;font-weight: bold;">Register Your Profile</h1>
                <p class="fw-bold " style="color: #b31312">MY FUTSAL</p>
                <div class="form-floating mt-4 mb-3">
                    <input type="text" name="name" class="form-control" style="width: 550px;" id="floatingInput"
                        placeholder="Farhan">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mt-4 mb-3">
                    <input type="text" name="phone" class="form-control" style="width: 550px;" id="floatingInput"
                        placeholder="08388001585">
                    <label for="floatingInput">Phone</label>
                </div>
                <div class="form-floating mt-4 mb-3">
                    <input type="email" name="email" class="form-control" style="width: 550px;" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email Address</label>
                </div>
                <div class="form-floating mt-4 mb-3">
                    <input type="password" name="password" class="form-control" style="width: 550px;" id="floatingInput"
                        placeholder="**********">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating mt-4 mb-3">
                    <input type="password" name="password_confirmation" class="form-control" style="width: 550px;" id="floatingInput"
                        placeholder="**********">
                    <label for="floatingInput">Password Confrim</label>
                </div>
                <div class="">
                    <button type="submit" class="btn text-light fw-bold"
                            style="background-color: #b31312; width: 550px; height: 50px;">Register</button>
                </div>
                <p class="fw-light mt-3" style="font-size: 14px;">Sudah Punya Akun? <a href="{{route('login')}}"
                        style="color: #b31312;">Login Disini</a></p>
            </div>
        </form>
    </div>
@endsection
