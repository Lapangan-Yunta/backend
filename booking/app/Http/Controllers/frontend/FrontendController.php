<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Lapangan;
use App\Models\Schedule;
use Illuminate\Http\Request;

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
}
