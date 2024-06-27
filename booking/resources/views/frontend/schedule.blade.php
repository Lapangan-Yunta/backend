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
                            <input type="date" class="form-control" id="bookingDate" value="{{ $selectedDate }}" onchange="updateSchedules()">
                        </div>
                    </form>
                </div>
                <div>
                    <h5 class="fw-bold">Pilih Lapangan :</h5>
                    <form class="row">
                        <div class="input-group mb-3">
                            <select class="form-select" id="lapanganSelect" onchange="updateSchedules()">
                                @foreach($lapangans as $lapangan)
                                    <option value="{{ $lapangan->id }}" {{ $lapangan->id == $selectedLapanganId ? 'selected' : '' }}>{{ $lapangan->title }}</option>
                                @endforeach
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
                
                @for ($hour = 9; $hour <= 20; $hour++)
                    @php
                        $schedule = $schedules->get($hour);
                        $status = $schedule ? $schedule->status : 'available';
                        $bgClass = $status == 'booked' ? 'bg-booked' : 'bg-available';
                        $price = ($hour < 18) ? '120.000,00' : '150.000,00';
                        $scheduleId = $schedule ? $schedule->id : null;
                    @endphp

                    <div class="card-jadwal">
                        @if($scheduleId)
                            @if($status == 'available')
                                <form action="{{ route('booking.process') }}" method="POST">
                                    @csrf
                                    <div class="card-body-jadwal {{ $bgClass }}" id="schedule-{{ $hour }}">
                                        <label class="btn btn-outline-success" style="line-height: 8px; border: 1px solid black; width: 200px; height: 150px;">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="lapangan_id" value="{{ $selectedLapanganId }}">
                                            <input type="hidden" name="schedule_id" value="{{ $scheduleId }}">
                                            <input type="hidden" name="date" value="{{ $selectedDate }}">
                                            <p class="fw-bold text-center mt-2">{{ $selectedDate }}</p>
                                            <p class="fw-bold text-center mt-2">{{ sprintf('%02d:00 - %02d:00', $hour, $hour + 1) }}</p>
                                            <p class="fw-bold text-center">Rp. {{ $price }}</p>
                                            <p class="fw-bold text-center pt-1 mb-2">{{ ucfirst($status) }}</p>
                                            <button class="btn btn-primary" type="submit">+</button>
                                        </label>
                                    </div>
                                </form>
                            @else
                                <div class="card-body-jadwal bg-unavailable" id="schedule-{{ $hour }}">
                                    <label class="btn btn-outline-danger" style="line-height: 8px; border: 1px solid black; width: 200px; height: 150px;">
                                        <p class="fw-bold text-center mt-4">{{ $selectedDate }}</p>
                                        <p class="fw-bold text-center mt-2">{{ sprintf('%02d:00 - %02d:00', $hour, $hour + 1) }}</p>
                                        <p class="fw-bold text-center">Rp. {{ $price }}</p>
                                        <p class="fw-bold text-center pt-1 mb-2">Unavailable</p>
                                    </label>
                                </div>
                            @endif
                        @else
                            <div class="card-body-jadwal bg-unavailable" id="schedule-{{ $hour }}">
                                <label class="btn btn-outline-danger" style="line-height: 8px; border: 1px solid black; width: 200px; height: 150px;">
                                    <p class="fw-bold text-center mt-4">{{ $selectedDate }}</p>
                                    <p class="fw-bold text-center mt-2">{{ sprintf('%02d:00 - %02d:00', $hour, $hour + 1) }}</p>
                                    <p class="fw-bold text-center">Rp. {{ $price }}</p>
                                    <p class="fw-bold text-center pt-1 mb-2">Unavailable</p>
                                </label>
                            </div>
                        @endif
                    </div>
                @endfor


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

    <script>
        // Fungsi untuk mengatur tanggal minimum pada input date
    // Fungsi untuk mengatur tanggal minimum pada input date
    function setMinDate() {
            const today = new Date();  // Mendapatkan tanggal hari ini
            const dd = String(today.getDate()).padStart(2, '0');
            const mm = String(today.getMonth() + 1).padStart(2, '0'); // Januari dimulai dari 0
            const yyyy = today.getFullYear();
            const minDate = yyyy + '-' + mm + '-' + dd;  // Format tanggal untuk atribut min
    
            document.getElementById("bookingDate").min = minDate;  // Set atribut min pada input date
        }
    
        // Panggil fungsi setMinDate saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            setMinDate();
        });
        function bookSchedule(hour) {
            const date = document.getElementById("bookingDate").value;
            const lapanganId = document.getElementById("lapanganSelect").value;
    
            console.log("Booking schedule for hour:", hour, "date:", date, "lapanganId:", lapanganId);
    
            fetch("{{ route('user.add.cart') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    hour: hour,
                    date: date,
                    lapangan_id: lapanganId,
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log("Response data:", data);
                    if (data.success) {
                        const card = document.getElementById(`schedule-${hour}`);
                        card.classList.remove("bg-available");
                        card.classList.add("bg-booked");
                        card.querySelector("p.fs-5").textContent = "Booked";
                        const button = card.querySelector("button");
                        button.classList.replace("btn-book", "btn-cancel");
                        button.textContent = "-";
                        button.setAttribute("onclick", `cancelBooking(${hour})`);
                    }
                })
                .catch((error) => {
                    console.error("Error booking schedule:", error);
                });
        }
    
        function cancelBooking(hour) {
            const date = document.getElementById("bookingDate").value;
            const lapanganId = document.getElementById("lapanganSelect").value;
    
            console.log("Cancelling booking for hour:", hour, "date:", date, "lapanganId:", lapanganId);
    
            fetch("{{ route('user.remove.cart') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    hour: hour,
                    date: date,
                    lapangan_id: lapanganId,
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log("Response data:", data);
                    if (data.success) {
                        const card = document.getElementById(`schedule-${hour}`);
                        card.classList.remove('bg-booked');
                        card.classList.add('bg-available');
                        card.querySelector('p.fs-5').textContent = 'Available';
                        const button = card.querySelector('button');
                        button.classList.replace('btn-cancel', 'btn-book');
                        button.textContent = '+';
                        button.setAttribute('onclick', `bookSchedule(${hour})`);
                    }
                })
                .catch((error) => {
                    console.error("Error cancelling booking:", error);
                });
        }
    
        function updateSchedules() {
            const date = document.getElementById("bookingDate").value;
            const lapanganId = document.getElementById("lapanganSelect").value;
            window.location.href = `/jadwal?date=${date}&lapangan_id=${lapanganId}`;
        }
    </script>
    
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
