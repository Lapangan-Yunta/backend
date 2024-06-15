<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::all();

        return view ('crud_account.test' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('crud_account.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $phone = $request->phone;


        if(Str::startsWith($phone, '+62'))
        {
            $phone = '0' . substr($phone,3);
        }elseif(Str::startsWith($phone,'62'))
        {
            $phone = '0' . substr($phone,2);
        }


        $message = [
            'name.required' => 'Nama Wajib Diisi!!',
            'phone.required' => 'Nomor Wajib Diisi!!',
            'role.required' => 'Role Wajib Diisi!!',
            'password.required' => 'Password Wajib Diisi!!',
            'email.required' => 'Email Wajib Diisi!!',
            'email.exists' => 'Email atau password salah!!',
            'phone.exists' => 'Nomor hp atau password salah!!'
        ];

        //validasi
        $request->validate([
            'name' => 'required|min:3|max:255|string', 
            'phone' => "required|min:11|max:13|unique:users,phone,{$phone}",
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
        ],$message);


        User::create($request->all());

        return redirect()->route('account.index')->with('success','Data user berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $show = User::find($id);

        return view ('crud_account.detail',compact('show'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $show = User::find($id);

        $put = User::all();

        return view ('crud_account.update',compact('show','put'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $show = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $show->update($request->all());

        return redirect()->route('account.index')->with('success','Data user berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::findOrFail($id);

        $data->delete();

        return redirect()->route('account.index')->with('success','Data berhasil dihapus!');

    }
}
