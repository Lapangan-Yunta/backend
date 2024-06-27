@extends('layout.custom')

@section('title', 'Payment')

@section('content')
    <div class="container-lg ">
        <div class="about-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px; margin-top: 80px;">
            <div id="left"class=" rounded-3 mb-2" style="width: 500px;height: 400px; background-color: #D9D9D9;">`
                <h4 class="text-start ms-4 fw-bold">Customer Detail</h4>
                <form class="row g-2 needs-validation ms-5 mt-3" novalidate action="{{route('booking.details.process')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="booking_id" id="" value="{{$booking->id}}">
                    <div class="col-md-5 position-relative me-3">
                        <label for="validationTooltip01" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="Nama Lengkap" name="nama_tim">
                    </div>
                    <div class="col-md-4 position-relative ms-3">
                        <label for="validationTooltip02" class="form-label">Customer Phone</label>
                        <input type="tel" class="form-control" id="validationTooltip02" placeholder="08********" name="no_hp">
                    </div>

                    <div class="col-md-10 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" id="validationTooltipUsername"
                                placeholder="@gmail.com" name="email">
                        </div>
                    </div>

                    <div class="col-md-10 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Note</label>
                        <div class="input-group has-validation">
                            <textarea class="form-control" id="validationTooltipUsername"
                                 name="note"></textarea>
                        </div>
                    </div>

                    <div class="col-md-10 position-relative">
                        <button type="submit" class="btn btn-primary">Booking</button>
                    </div>

                </form>
            </div>
            <div id="right"class=" rounded-3 mb-2" style="width: 700px;height: 400px; background-color: #D9D9D9;">
                <h4 class="text-start ms-4 fw-bold mt-4">Panduan Pembayaran</h4>
                <ul class="p-3 ms-3"
                    style="font-size: 16px; font-weight: bold; line-height: 28px; text-align: justify; list-style-type: decimal;">
                    <li> Periksa kembali apakah data pemesanan sudah benar.</li>
                    <li> Jika data sudah benar, klik tombol <span style="color: #b31312;">Pay Now</span> untuk melanjutkan
                        proses pembayaran.</li>
                    <li> Setelah klik <span style="color: #b31312;">Pay Now</span>, halaman akan menampilkan data dan detail
                        pemesanan lapangan. Cetak bukti pemesanan dalam bentuk soft file (PDF)</li>
                    <li>Cetak bukti pemesanan tersebut dalam bentuk fisik dan serahkan ke kasir saat tiba di lokasi.</li>
                    <li>Kasir akan memverifikasi bukti pemesanan. Bayar sejumlah biaya yang tertera pada bukti pemesanan
                        lapangan. Setelah pembayaran selesai, proses pemesanan lapangan futsal dianggap selesai.</li>
                </ul>
            </div>
        </div>

        <div class="position-relative d-flex justify-content-center align-items-center mt-5 mb-5 "
            style="width: 100%; height: auto">
            <img src="{{ asset('img/img3.jpg') }}" class="img rounded-4 mt-4" style="width: 100%; height: 400px" alt="..." />
        </div>

        <div class=" rounded-3 mb-5 shadow p-4 mb-5 bg-body-tertiary rounded"
            style="width: 1300px;height: 400px; background-color: #f5f5f5;line-height: 8px;">
            <h4 class="text-start fw-bold">Payment Detail</h4>
            <h4 class="mt-4 fw-light">{{$booking->lapangan->title}}</h4>
            <p class="fw-bold" style="color: #1A4D2E;">{{ \Carbon\Carbon::parse($booking->schedule->date)->format('l, d F Y') }}, {{$booking->schedule->date}} , {{ sprintf('%02d:00 - %02d:00', $booking->schedule->hour, $booking->schedule->hour + 1) }}</p>

            <hr class="mt-4">
            <div class="d-flex justify-content-between">
                <p class="fw-bold mt-3">Harga Lapangan :</p>
                <P class="fw-bold mt-3">Rp. {{ number_format($booking->lapangan->price, 0, ',', '.') }}</P>
            </div>
            <hr class="mt-5">

            <p class="fw-bold mt-4">Total Bayar</p>
            <div class="d-flex justify-content-between">
                <p class="fw-bold mt-4" style="color: #b31312;">Bayar Penuh</p>
                <p class="fw-bold mt-4" style="color: #b31312;">Rp. {{ number_format($booking->lapangan->price, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>




    <!-- modal -->
    <div>
        <div class="d-flex align-items-center justify-content-center " style="margin-top: 90px;">
            <button class=" btn rounded-0 fw-bold fs-4"
                style="background-color: #b31312; color: white; width: 100%; height: 70px;" data-bs-toggle="modal"
                data-bs-target="#modal">Book Now</button>
        </div>

        <div class="modal fade" id="modal" tabindex="1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="navbar-brand fs-5 fw-bold" href="#" style="color: #b31312;"><span><img
                                    class="img-fluid ms-3" src="{{ asset('img/lgo.png') }}" width="50px" height="50px"
                                    alt="" /></span>MY FUTSAL</a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Customer">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No. Hp</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="+628********">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lapangan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Inspire Arena Sulut">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tipe Lapangan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Lapangan Outdoor A">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                placeholder="Senin, 10 Juni 2024">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jam Sewa</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="08.00 - 10.00">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Harga</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Rp. 175.000,">
                        </div>
                        <div>
                            <p class="text-center fw-light p-5" style="font-size: 14px;">Cetak bukti pemesanan tersebut
                                dalam bentuk fisik dan serahkan ke kasir saat tiba di lokasi.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class=" btn rounded-0 fw-bold fs-4"
                            style="background-color: #b31312; color: white; width: 100%; height: 70px;"
                            data-bs-toggle="modal" data-bs-target="#modal">Cetak Bukti</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
