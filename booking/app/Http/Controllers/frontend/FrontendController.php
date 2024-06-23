<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    
    public function detail()
    {
        return view('frontend.detail');
    }
    
    public function schedule()
    {
        return view('frontend.schedule');
    }
    
    public function venue()
    {
        return view('frontend.venue');
    }
    
    public function payment()
    {
        return view('frontend.payment');
    }
}
