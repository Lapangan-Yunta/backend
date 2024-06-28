<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function user_history()
    {
        $id = Auth::user()->id;
        $booking = Booking::where('user_id',$id)->get();
        return view('user.history.index',compact('booking'));
    }

    public function user_profile()
    {
        return view('user.profile.index');
    }

    public function edit_profile(Request $request, $id)
    {
        $user = User::find($id);

        $data = $request->validate([
            'name' => 'required|min:4',
            'phone' => 'required|min:11|max:13',
            'email' => 'required|email',
        ]);

        $user->update($data);

        return redirect()->back();
    }
}
