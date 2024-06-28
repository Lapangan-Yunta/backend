<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailBooking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $booking = Booking::all();
        return view('booking.index',compact('booking'));
    }

    public function show($id)
    {
        $booking = Booking::where('id',$id)->first();
        return view('booking.detail',compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::where('id',$id)->first();
        return view('booking.edit',compact('booking'));
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $booking_id = Booking::findOrFail($id);
        $data = $request->validate([
            'status' => 'required',
        ]);

        $booking_id->update($data);

        return redirect()->route('booking.index');
    }

    public function addToCart(Request $request)
    {
        // Validasi request
        $request->validate([
            'hour' => 'required|integer',
            'date' => 'required|date',
            'lapangan_id' => 'required|exists:lapangans,id',
        ]);

        // Cari jadwal yang sesuai berdasarkan jam, tanggal, dan lapangan
        $schedule = Schedule::where('lapangan_id', $request->lapangan_id)
            ->whereDate('date', $request->date)
            ->where('hour', $request->hour)
            ->first();

        // Jika jadwal ditemukan, ubah statusnya menjadi 'Booked'
        if ($schedule) {
            $schedule->status = 'booked';
            $schedule->save();
        }

        $book = new Booking();
        $book->user_id = Auth::id();
        $book->lapangan_id = $request->input('lapangan_id');
        $book->schedule_id = $request->input('hour');
        $book->date = $request->input('date');
        $book->status = 'booked';
        $book->save();

        return response()->json(['success' => true]);
    }

    public function removeFromCart(Request $request)
    {
        // Validasi request
        $request->validate([
            'hour' => 'required|integer',
            'date' => 'required|date',
            'lapangan_id' => 'required|exists:lapangans,id', // Gantilah 'lapangans' dengan nama tabel lapangan yang sesuai
        ]);

        // Cari jadwal yang sesuai berdasarkan jam, tanggal, dan lapangan
        $schedule = Schedule::where('lapangan_id', $request->lapangan_id)
            ->whereDate('date', $request->date)
            ->where('hour', $request->hour)
            ->first();

        // Jika jadwal ditemukan, ubah statusnya menjadi 'Available'
        if ($schedule) {
            $schedule->status = 'available';
            $schedule->save();
        }

        $book = Booking::where('user_id', Auth::id())
            ->where('lapangan_id', $request->input('lapangan_id'))
            ->where('schedule_id', $request->input('hour'))
            ->where('date', $request->input('date'))
            ->first();

        if ($book) {
            $book->delete();
            return response()->json(['success' => true]);
        }


        return response()->json(['success' => true]);
    }

    public function viewCart()
    {
        $user = Auth::user(); // Mengambil user yang sedang login
        $bookings = Booking::where('user_id', $user->id)
            ->with('lapangan', 'schedule', 'detailBooking') // Sertakan relasi detailBooking
            ->get();

        // Group bookings by lapangan title and tanggal
        $groupedBookings = $bookings->groupBy(function ($booking) {
            return $booking->lapangan->title . '-' . $booking->schedule->tanggal;
        });

        // Format waktu booking
        foreach ($bookings as $booking) {
            $startHour = $booking->schedule->hour;
            $endHour = $startHour + 1; // Asumsikan setiap booking berdurasi satu jam
            $booking->schedule->formatted_time = sprintf('%02d:00 - %02d:00', $startHour, $endHour);
        }

        // Ambil harga dari lapangan untuk setiap booking
        foreach ($groupedBookings as $key => $bookings) {
            // Ambil lapangan dari booking pertama (asumsi semua booking dalam grup ini memiliki lapangan yang sama)
            $lapangan = $bookings->first()->lapangan;

            // Ambil harga dari lapangan
            $hargaLapangan = floatval($lapangan->price); // Ubah ke float jika price berupa varchar

            // Set harga lapangan ke setiap booking
            foreach ($bookings as $booking) {
                $booking->lapangan->price = $hargaLapangan;
            }
        }

        return view('users.booking.cart', [
            'user' => $user,
            'groupedBookings' => $groupedBookings,
            'bookingCount' => $bookings->count(),
        ]);
    }

    public function submitBooking(Request $request, $bookingId)
    {
        // Validasi request
        $validatedData = $request->validate([
            'nama_tim' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_hp' => 'required|string|max:20',
            'note' => 'nullable|string',
        ]);

        // Cari booking berdasarkan $bookingId
        $booking = Booking::findOrFail($bookingId);

        // Buat detail booking baru
        $detailBooking = new DetailBooking();
        $detailBooking->booking_id = $booking->id;
        $detailBooking->nama_tim = $request->nama_tim;
        $detailBooking->email = $request->email;
        $detailBooking->no_hp = $request->no_hp;
        $detailBooking->note = $request->note;
        $detailBooking->save();

        // Redirect atau return response sesuai kebutuhan aplikasi
        return view('users.dashboard.history.index');
    }

    public function booking(Request $request)
    {
        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'lapangan_id' => 'required|exists:lapangans,id',
            'schedule_id' => 'required|exists:schedules,id',
            'date' => 'required|date',
        ]);

        // Buat data booking baru
        $booking = Booking::create($validatedData);

        $id = $booking->id;

        // Cari jadwal berdasarkan schedule_id
        $schedule = Schedule::findOrFail($request->input('schedule_id'));

        $random_url = Str::random(62);

        session(['booking_id' => $booking->id]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('booking.details',compact('random_url','id'))->with('success', 'Booking successful!');
    }

    public function booking_details()
    {
        // Ambil ID booking dari session
        $bookingId = session('booking_id');

        // Jika booking ID tidak ada di session, redirect kembali dengan pesan error
        if (!$bookingId) {
            return redirect()->back()->with('error', 'No booking found in session.');
        }

        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($bookingId);

        // Tampilkan halaman detail booking
        return view('frontend.payment', compact('booking'));
    }

    public function booking_details_process(Request $request)
    {
        // Validasi data yang diterima dari request
        $data = $request->validate([
            'booking_id' => 'required',
            'nama_tim' => 'required|max:255|min:4',
            'no_hp' => 'required|min:11|max:13',
            'email' => 'required|email',
            'note' => 'required',
        ]);

        // Pastikan booking_id diambil dari request
        $data['booking_id'] = $request->booking_id;

        // Simpan data booking details
        DetailBooking::create($data);

        // Temukan objek Schedule yang terkait dengan booking_id
        $booking = Booking::findOrFail($request->booking_id);
        $schedule = Schedule::findOrFail($booking->schedule_id);

        // Update status Schedule menjadi 'booked'
        $schedule->status = 'booked';
        $schedule->save();

        // Redirect atau berikan respons sukses
        return redirect()->route('home')->with('success', 'Booking details saved successfully!');
    }


}
