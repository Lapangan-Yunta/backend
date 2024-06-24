@extends('layout.master')

@section('title', 'Schedule')

@section('content')
    <div class="mx-5 mt-5">
        <div class="position-relative d-flex justify-content-center align-items-center"
            style="width: 100%; height: auto">
            <img src="{{ asset('img/img3.jpg') }}" class="img rounded-5 mt-4" style="width: 95%; height: 600px" alt="..." />
        </div>
        <div class="mt-4 mb-3" style="padding: 10px 50px">
            <div class="" >
                <h1 class="fw-bolder" style="font-size: 40px;">Futsal Outdoor A</h1>
                <div class="d-flex">
                <a href="" class=" fw-bolder "
                    style="font-size: 24px ; color: #b31312;">Inspire Arena Sulut</a></div>
            </div>
        </div>
            <div class="" style="padding: 0 45px">
                <a href="" class="text-decoration-none p-2 " style="font-size: 40px; color: black;"><i class="fa-solid fa-share-nodes"></i></a>
                <a href="" class="text-decoration-none p-2" style="font-size: 42px; color: black;"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="text-decoration-none p-2 " style="  font-size: 40px; color: #b31312; "><i class=" fa-solid fa-qrcode"></i></a>
            </div>
    </div>


            <div class="h-25">
            <hr style="margin-bottom: -1px;">
            <div class=" d-flex justify-content-start align-items-center text-decoration-none fs-4" style="padding: 0 300px;">
                <a href="#" id="schedule-btn" data-bs-target="#schedule" class="nav-links text-decoration-none me-5 active">Schedule</a>
                <a href="#" id="rules-btn" data-bs-target="#rules" class="nav-links text-decoration-none ms-5">Rules</a>
            </div>
            <hr style="margin-top: -1px;">
        </div>

    <div class="container-lg mb-5">
        <section id="schedule" class="" style="display: block; padding: 0 0px; margin-top: 110px;">
            <div class="d-grid" style=" grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10%;">
                <div>
                    <h5 class="fw-bold">Pilih Tanggal Booking :</h5>
                    <form class="row">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control text-center fw-bold" style="cursor: pointer;"
                                placeholder="Tanggal" aria-label="Recipient's username" aria-describedby="btn-tgl">
                        </div>
                    </form>
                </div>
                <div>
                    <h5 class="fw-bold">Pilih Lapangan :</h5>
                    <form class="row">
                        <div class="input-group mb-3">
                            <select class="form-select text-center fw-bold" id="inputGroupSelect02"
                                style="cursor: pointer;">
                                <option class="fw-bold" selected>Futsal Outdoor A</option>
                                <option class="fw-bold" value="1">Futsal Outdoor B</option>
                                <option class="fw-bold" value="2">Futsal Indoor A</option>
                                <option class="fw-bold" value="3">Futsal Indoor B</option>
                                <option class="fw-bold" value="4">Mini Soccer A</option>
                                <option class="fw-bold" value="5">Mini Soccer B</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4" style="line-height: 7px;">
                <p class="fw-bold " style="font-size: 14px;">*Periode <span style="color: #b31312;">Tanggal Booking </span>:
                </p>
                <p class="fw-bold " style="font-size: 14px;">*Tap pada kolom waktu untuk memilih <span
                        style="color: #b31312;">Jam Booking</span></p>
            </div>
            <div class="d-grid" style=" grid-template-columns: repeat(6, minmax(0, 1fr)); gap: 20px;">
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">08 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Saturday</p>
                </div>
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">09 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Sunday</p>
                </div>
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">10 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Monday</p>
                </div>
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">11 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Tuesday</p>
                </div>
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">12 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Wednesday</p>
                </div>
                <div class=" rounded-3 mb-2 text-center p-5"
                    style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px; background-color: #FFF6F6">
                    <p class="fw-bold mt-1">13 Jun</p>
                    <p class="fw-bold" style="color: #b31312;">Thursday</p>
                </div>
                <div class=" ">
                    <input type="radio" class="btn-check rounded-3 mb-2 text-center p-5" name="options-outlined"
                        id="r1" autocomplete="off" disabled>
                    <label class="btn " for="r1"
                        style="line-height: 5px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-3" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r2" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r2"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r3" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r3"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r4" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r4"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r5" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r5"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r6" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r6"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">10.00 - 12.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r7" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r7"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r8" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r8"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r9" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r9"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r10" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r10"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r11" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r11"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r12" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r12"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">12.00 - 14.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r13" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r13"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r14" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r14"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r15" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r15"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r35" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r35"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r36" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r36"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r16" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r16"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">14.00 - 16.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r17" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r17"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r18" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r18"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r19" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r19"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r33" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r33"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r20" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r20"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r21" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r21"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">16.00 - 18.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r22" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r22"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r23" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r23"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r24" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r24"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r25" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r25"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r26" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r26"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r27" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r27"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">18.00 - 20.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r28" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r28"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r29" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r29"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r30" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r30"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r34" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r34"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r31" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r31"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r32" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r32"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">20.00 - 22.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>

                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r37" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r37"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">08 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r38" autocomplete="off"
                        disabled>
                    <label class="btn btn-outline-secondary" for="r38"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">09 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="">Booked</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r39" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r39"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">10 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r40" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r40"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">11 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r41" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r41"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">12 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="r42" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="r42"
                        style="line-height: 8px;border: 1px solid black;width: 200px;height: 150px;">
                        <p class="fw-bold text-end mt-2 mb-3">13 Jun</p>
                        <p class="fw-bold text-center mt-5">22.00 - 00.00</p>
                        <p class="fw-bold text-center mb-4">Rp. 125,000</p>
                        <p class="fw-bold text-center pt-1" style="color: #b31312;">Available</p>
                    </label>
                </div>
            </div>

        </section>

        <section id="rules" class="" style="display: none; padding: 0 0px;">
            <div class="about-container"
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 5%; margin-top: 130px;">
                <div class="left-content ">
                    <div id="left-top"class=" rounded-3 mb-2"
                        style="width: 700px;height: 680px; background-color: #D9D9D9;">
                        <div class="p-5 ms-3">
                            <h1 class="fw-bolder   mt-1 fs-4" style="color: #b31312;">Aturan Venue :</h1>
                            <ul class="p-2 mt-2"
                                style="font-size: 16px; font-weight: bold; line-height: 24px; text-align: justify; list-style-type: decimal;">
                                <li>Pemesanan lapangan valid apabila sudah ada konfirmasi dari online booking system, dan
                                    harus ditunjukkan kepada staf Inspire Arena. </li>
                                <li>Pengguna lapangan yang walk-in tetap melakukan pemesanan dan pembayaran via sistem
                                    sebelum memasuki lapangan.</li>
                                <li><span style="color: #b31312;">TIDAK ADA</span> perpanjangan waktu untuk keterlambatan
                                    pengguna lapangan di jam reservasi. </li>
                                <li><span style="color: #b31312;">TIDAK ADA</span> kebijakan Refund dari pihak pengelola;
                                    Reschedule bisa dilakukan by request melalui sistem selambatnya H-5. </li>
                                <li>Peminjaman bola bisa dilakukan dengan menitipkan KTP atau SIM ke staf Inspire Arena.
                                </li>
                                <li>Kunci kendaraan Anda di parkiran, dan tunjukkan karcis parkir ketika meninggalkan
                                    Inspire Arena.</li>
                                <li>Barang bawaan menjadi tanggung jawab masing-masing; segala bentuk kerusakan dan
                                    kehilangan di luar tanggung jawab Inspire Arena.</li>
                                <li>Jagalah kebersihan di seluruh area Inspire Arena dan buanglah sampah ke tempat sampah
                                    yang telah disediakan.</li>
                                <li><span style="color: #b31312;">DILARANG</span> merokok di semua area lapangan, foodcourt
                                    dll; merokok hanya diperbolehkan di area yang disediakan di taman belakang.</li>
                                <li><span style="color: #b31312;">DILARANG</span> membawa air mineral kemasan sekali pakai,
                                    kami menyediakan air minum isi ulang secara gratis untuk semua pengunjung.</li>
                                <li><span style="color: #b31312;">DILARANG</span> makan dan minum di dalam lapangan.</li>
                                <li><span style="color: #b31312;">DILARANG</span> membawa senjata tajam, minuman keras /
                                    alkohol maupun obat-obatan terlarang.</li>
                            </ul>
                        </div>
                    </div>
                    <div id="left-bottom " class=" rounded-3 mt-5"
                        style="width: 700px;height: 400px; background-color: #D9D9D9;">
                        <div class="p-4">
                            <h1 class="fw-bolder ms-5 fs-4 mt-3" style="color: #b31312;">Protokol Kesehatan :</h1>
                            <div class="d-grid" style=" grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px;">
                                <div class="p-4 ms-4 ">
                                    <h1 class="mb-3 fs-6 fw-bolder" style="color: #b31312;">Batas Jumlah Pemain :
                                        <p class="text-black fw-bold mt-1" style="text-align: justify;line-height: 20px;">
                                            Jumlah pemain yang memasuki area lapangan dibatasi, dianjurkan tidak membawa
                                            keluarga atau teman.</p>
                                    </h1>
                                    <h1 class="mb-3 fs-6 fw-bolder" style="color: #b31312;">Mssker dan Cuci Tangan :
                                        <p class="text-black fw-bold mt-1" style="text-align: justify;line-height: 20px;">
                                            Wajib menggunakan masker, dan mencuci tangan sebelum dan sesudah bermain</p>
                                    </h1>
                                </div>
                                <div class="p-4 ms-4 ">
                                    <h1 class="mb-3 fs-6 fw-bolder" style="color: #b31312;">Suhu Tubuh :
                                        <p class="text-black fw-bold mt-1" style="text-align: justify;line-height: 20px;">
                                            Wajib dalam keadaan sehat, suhu badan diatas 37.3℃ tidak di izinkan untuk
                                            memasuki area lapangan.</p>
                                    </h1>
                                    <h1 class="mb-3 fs-6 fw-bolder" style="color: #b31312;">Saling Menjaga :
                                        <p class="text-black fw-bold mt-1" style="text-align: justify;line-height: 20px;">
                                            Kami sangat mengapresiasi kesadaran individu untuk terus menerapkan & saling
                                            mengingatkan protokol Kesehatan selama permainan berlangsung.</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <h1 class="fs-4" style="color: #b31312; font-weight: bolder"> Jam Operasional</h1>
                    <div id="right-top" class=" rounded-3 mt-3 mb-1 d-grid"
                        style="width: 500px;height: 560px; background-color: #D9D9D9; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; ">
                        <div class="p-4 ms-5">
                            <h1 class="fw-bolder mb-4  mt-3 fs-4" style="color: black">Hari</h1>
                            <ul class="mt-3"
                                style="font-size: 20px; font-weight: bold; line-height: 55px; list-style-type: none; margin-left: -30px;">
                                <li>Senin</li>
                                <li>Selasa</li>
                                <li>Rabu</li>
                                <li>Kamis</li>
                                <li>Jumat</li>
                                <li>Sabtu</li>
                                <li>Minggu</li>
                            </ul>
                        </div>
                        <div class="p-4 ">
                            <h1 class="fw-bolder mb-4 ms-5 mt-3 fs-4" style="color: black">Jam</h1>
                            <ul class="mt-3"
                                style="font-size: 20px; font-weight: bold; line-height: 55px; list-style-type: none; margin-left: -30px;">
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                                <li>06.00 - 00.00</li>
                            </ul>
                        </div>
                    </div>
                    <div id="right-bottom" class=" rounded-3 mt-5"
                        style="width: 500px;height: 375px; background-color: #D9D9D9;">
                        <div class="p-4">
                            <h1 class="fw-bolder ms-5 mb-4 fs-4 mt-3" style="color: #b31312;">Informasi</h1>
                            <div class="mt-5 ms-4 d-grid"
                                style=" grid-template-columns: repeat(1, minmax(0, 1fr)); gap: 10%;">
                                <div class="text-start d-flex align-items-center">
                                    <h1 class="d-flex align-items-center" style="font-size: 35px;"><i
                                            class="fa-brands fa-instagram" style="color: #b31312;"></i>
                                        <a href="" class="text-decoration-none fs-5 fw-bolder ms-5"
                                            style="color: #192965;">Instagram</a>
                                    </h1>
                                </div>
                                <div class="text-start d-flex align-items-center">
                                    <h1 class="d-flex align-items-center " style="font-size: 35px;"><i
                                            class="fa-solid fa-map-location-dot"></i></i>
                                        <span class="text-decoration-none fs-6 fw-bold p-4"
                                            style="text-align: justify; margin-left: 10px;">Asatu Area, Jl. RP. Soeroso
                                            No.1, Cikini, Menteng, Central Jakarta City, Jakarta 10330</span>
                                    </h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>

    <div class="d-flex align-items-center justify-content-center" style="margin-top: 150px;">
        <a class="w-100 h-100" href="/frontend/payment"><button class=" btn rounded-0 fw-bold fs-5"
                style="background-color: #b31312; color: white; width: 100%; height: 70px;">Lanjut Pembayaran</button></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
    </script>
    <script>
        const btns = document.querySelectorAll('.nav-links');
        const sections = document.querySelectorAll('section');

        btns.forEach(btn => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();


                btns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                sections.forEach(section => section.style.display = 'none');

                const target = btn.getAttribute('data-bs-target');
                const targetSection = document.querySelector(target);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });
    </script>
@endsection
