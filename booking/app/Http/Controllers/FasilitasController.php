<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fasilitas::all();

        return view('fasilitas.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $message = [
            'name' => 'Nama Fasilitas harus di isi',
            'detail_fasilitas' => 'Detail harus juga ada',
            'descripsi' => 'Masak deskripsi gak ada'
        ];

        //ini buat di create.blade.php 
        $request->validate([
            'name' => 'required',
            'detail_fasilitas' => 'required',
            'descripsi' => 'required'
        ], $message);

        Fasilitas::create($request->all());

        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Fasilitas::find($id);

        return view('fasilitas.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Fasilitas::find($id);

        return view ('fasilitas.update',compact('data') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =Fasilitas::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'detail_fasilitas'=> 'required',
            'descripsi' => 'required'
        ]);

        $data->update($request->all());

        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Fasilitas::findOrFail($id);
        
        $data->delete();

        return redirect()->route('fasilitas.index');
    }
}
