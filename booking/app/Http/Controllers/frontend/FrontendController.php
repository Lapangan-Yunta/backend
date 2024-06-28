<?php

namespace App\Http\Controllers\frontend;

use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Lapangan;
use App\Models\Schedule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailBooking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home()
    {
        $lapangan = Lapangan::all();
        return view('frontend.home',compact('lapangan'));
    }
    
    public function detail($title)
    {
        $lapangan = Lapangan::where('title',$title)->first();
        $lapangans = Lapangan::where('title',$title)->get();
        $gallery = Gallery::where('lapangan_id',$lapangan->id)->get();
        return view('frontend.detail',compact('lapangan','lapangans','gallery'));
    }
    
    public function schedule($title)
    {
        $lapangan = Lapangan::where('title',$title)->first();
        $schedule = Schedule::where('lapangan_id',$lapangan->id)->get();
        return view('frontend.schedule',compact('schedule'));
    }
    
    public function venue()
    {
        $lapangan_new = Lapangan::orderBy('id','DESC')->get();
        $lapangan = Lapangan::all();
        return view('frontend.venue',compact('lapangan_new','lapangan'));
    }
    
    public function payment()
    {
        return view('frontend.payment');
    }

    public function confirm()
    {
        return view('frontend.confirm-booking');
    }

    public function cart()
    {
        $id = Auth::user()->id;
        $booking = Booking::where('user_id',$id)->orderBy('id','DESC')->get();
        $booking_id = Booking::where('user_id',$id)->first();
        $detail_booking = DetailBooking::where('booking_id',$booking_id)->get();
        $random_url = Str::random(62);
        return view('frontend.cart',compact('booking','detail_booking','random_url'));
    }
}
