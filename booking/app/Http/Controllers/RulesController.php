<?php

namespace App\Http\Controllers;

use App\Models\Rules;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rules::all();

        return view('rules.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('rules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //ini buat di create.blade.php 
        $request->validate([
            'rule_in_field' => 'nullable',
            'rule_out_field' => 'nullable',
            'rule_rent' => 'nullable',
        ]);

        Rules::create($request->only('rule_in_field', 'rule_out_field', 'rule_rent'));

        return redirect()->route('rules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Rules::find($id);

        return view('rules.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Rules::find($id);

        return view('rules.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =Rules::findOrFail($id);

        $request->validate([
            'name' => 'nullable',
            'detail_fasilitas'=> 'nullable',
            'descripsi' => 'nullable'
        ]);

        Rules::create($request->only('rule_in_field', 'rule_out_field', 'rule_rent'));

        return redirect()->route('rules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Rules::findOrFail($id);
        
        $data->delete();

        return redirect()->route('rules.index');
    }
}
