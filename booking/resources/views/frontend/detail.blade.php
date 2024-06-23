@extends('layout.master')

@section('title', 'Detail')

@section('content')
    <div class="mx-5">
        <div class="position-relative d-flex justify-content-center align-items-center" style="width: 100%; height: auto">
            <img src="{{ asset('img/img1.png') }}" class="img rounded-5 mt-4" style="width: 95%; height: 450px" alt="..." />
            <img src="{{ asset('img/img2.png') }}" class="img rounded-5 position-absolute gambar-logo"
                style="margin: 40px ;left: 70px; bottom: 0" alt="" />
        </div>
        <div class="mt-4 mb-3" style="padding: 10px 50px">
            <div class="">
                <h1 class="fw-bolder" style="font-size: 40px;">Inspire Arena Sulut</h1>
                <div class="d-flex">
                    <a href="" class=" fw-bolder " style="font-size: 24px ; color: #b31312;">Mini Soccer
                        <span>,</span> Futsal <span>in</span>
                        Manado</a>
                </div>
            </div>
        </div>
        <div class="" style="padding: 0 45px">
            <a href="" class="text-decoration-none p-2 " style="font-size: 40px; color: black;"><i
                    class="fa-solid fa-share-nodes"></i></a>
            <a href="" class="text-decoration-none p-2" style="font-size: 42px; color: black;"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="" class="text-decoration-none p-2 " style="  font-size: 40px; color: #b31312; "><i
                    class=" fa-solid fa-qrcode"></i></a>
        </div>
    </div>


    <div class="h-25">
        <hr style="margin-bottom: -1px;">
        <div class=" d-flex justify-content-evenly align-items-center text-decoration-none fs-4" style="padding: 0 300px;">
            <a href="#" id="lapangan-btn" data-bs-target="#lapangan"
                class="nav-links text-decoration-none active">Lapangan</a>
            <a href="#" id="about-btn" data-bs-target="#about" class="nav-links text-decoration-none">About</a>
            <a href="#" id="rules-btn" data-bs-target="#rules" class="nav-links text-decoration-none">Rules</a>
            <a href="#" id="galery-btn" data-bs-target="#galery" class="nav-links text-decoration-none">Gallery</a>
        </div>
        <hr style="margin-top: -1px;">
    </div>

    <div class="container-lg">
        <section id="lapangan">
            <div style="padding: 0px 0px; margin-top: 70px; margin-bottom: 30px;">
                <h1 class="fw-bolder" style="font-size: 40px;">Field</h1>
            </div>
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 90px;">
                <div class="text-center">
                    <img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4" style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Futsal Outdoor A</h4>
                    <p class="text-secondary">Rp 125,000 ~ Rp 175,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT JADWAL</button></a>
                </div>
                <div class="text-center"><img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Futsal Outdoor B</h4>
                    <p class="text-secondary">Rp 125,000 ~ Rp 175,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT JADWAL</button></a>
                </div>
                <div class="text-center"><img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Indoor Court A</h4>
                    <p class="text-secondary">Rp 150,000 ~ Rp 250,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT JADWAL</button></a>
                </div>
                <div class="text-center"><img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Indoor Court B</h4>
                    <p class="text-secondary">Rp 150,000 ~ Rp 250,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT
                            JADWAL</button></a>
                </div>
                <div class="text-center"><img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Mini Soccer A</h4>
                    <p class="text-secondary">Rp 250,000 ~ Rp 300,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT
                            JADWAL</button></a>
                </div>
                <div class="text-center"><img src="{{ asset('img/img3.jpg') }}" class="img rounded-3 mt-4"
                        style="width: 370px; height:315px" alt="..." />
                    <h4 class="fw-bolder mt-4">Mini Soccer B</h4>
                    <p class="text-secondary">Rp 250,000 ~ Rp 300,000</p>
                    <a href="/frontend/schedule"><button type="button" class="btn text-white rounded-5 p-2"
                            style="font-size: 20px; font-weight: bold; background-color: #b31312;">LIHAT
                            JADWAL</button></a>
                </div>

            </div>
        </section>

        <section id="about" style="padding: 0px 0px; display: none;">

            <div class="about-container"
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 5%; margin-top: 130px;">
                <div class="left-content ">
                    <div id="left-top"class=" rounded-3 mb-2"
                        style="width: 700px;height: 600px; background-color: #D9D9D9;">
                        <div class="p-5 ms-5">
                            <h1 class="fw-bolder mb-4  mt-3 fs-4" style="color: #b31312;">Deskripsi :</h1>
                            <h1 class="fw-bolder mt-4 fs-4" style="color: #b31312;">Asatu Area</h1>
                            <ul class="mt-4" style="font-size: 20px; font-weight: bold; line-height: 60px;">
                                <li>Tenant F&B Area</li>
                                <li>Gym</li>
                                <li>Mini Soccer</li>
                            </ul>
                            <h1 class="fw-bolder mt-4 fs-4" style="color: #b31312;">Fasilitas</h1>
                            <ul class="mt-4" style="font-size: 20px; font-weight: bold; line-height: 60px;">
                                <li>Shower Room</li>
                                <li>Parkiran 40+ Mobil 20+ Motor</li>
                            </ul>
                        </div>
                    </div>
                    <div id="left-bottom " class=" rounded-3 mt-5"
                        style="width: 700px;height: 375px; background-color: #D9D9D9;">
                        <div class="p-4">
                            <h1 class="fw-bolder ms-5 mb-4 fs-4 mt-3" style="color: #b31312;">Fasilitas</h1>
                            <div class="d-grid" style=" grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 10px;">
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i class="fa-solid fa-shower"></i></h1>
                                    <p class="fs-5 ">Shower</p>
                                </div>
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i class="fa-solid fa-wifi"></i></h1>
                                    <p class="fs-5 ">Wi-fi</p>
                                </div>
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i class="fa-solid fa-mosque"></i></h1>
                                    <p class="fs-5 ">Mushola</p>
                                </div>
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i
                                            class="fa-solid fa-square-parking"></i></h1>
                                    <p class="fs-5 ">Parkir</p>
                                </div>
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i class="fa-solid fa-utensils"></i></h1>
                                    <p class="fs-5 ">Kantin</p>
                                </div>
                                <div class="text-center">
                                    <h1 class="" style="font-size: 35px;"><i class="fa-solid fa-door-closed"></i>
                                    </h1>
                                    <p class="fs-5 ">Locker</p>
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
        <section id="galery" class="" style="display: none; padding: 0 0px;">
            <div class=""
                style=" display: grid;justify-content: center; grid-template-columns: repeat(3, minmax(0, 1fr));  gap: 50px; margin-top: 110px;">
                <div class="text-start">
                    <img src="{{ asset('img/img1.png') }}" class="img rounded-3 mt-4" style="width: 400px; height:315px"
                        alt="..." />
                    <h5 class="fw-bold mt-3 ms-2">Inspire Arena Sulut</h5>
                </div>
                <div class="text-start">
                    <img src="{{ asset('img/img1.png') }}" class="img rounded-3 mt-4" style="width: 400px; height:315px"
                        alt="..." />
                    <h5 class="fw-bold mt-3 ms-2">Inspire Arena Sulut</h5>
                </div>
                <div class="text-start">
                    <img src="{{ asset('img/img1.png') }}" class="img rounded-3 mt-4" style="width: 400px; height:315px"
                        alt="..." />
                    <h5 class="fw-bold mt-3 ms-2">Inspire Arena Sulut</h5>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
