<?php

namespace App\Http\Controllers;

use App\Models\voc;
use App\Http\Requests\StorevocRequest;
use App\Http\Requests\UpdatevocRequest;
use Illuminate\Http\Request;

class VocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('VOC.index', [
            "title" => "Home"
        ]);
    }

    public function dashboard(){
        $voc = voc::all();
        return view('VOC.dashboard', ['voc' => $voc]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'nama' => 'required|max:255',
            'usia' => 'required|min:0',
            'no_telp' => 'required|max:255',
            'email' => 'required|max:255',
            'nim' => 'required|max:255',
            'institusi' => 'required|max:255',
            'uname' => 'required|max:255',
            'link' => 'required|max:500',
        ]);

        voc::create($validData);

        return redirect('/voc/submission')->with('success', 'Pengumpulan Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(voc $voc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voc $voc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voc $voc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voc $voc)
    {
        //
    }
}
