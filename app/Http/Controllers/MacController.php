<?php

namespace App\Http\Controllers;

use App\Models\mac;
use Illuminate\Http\Request;

class MacController extends Controller
{
    public function index()
    {
        return view('Mac.mac', [
            "title" => "MAC"
        ]);
    }
    public function create()
    {
        return view('Mac.create', [
            "title" => "MAC"
        ]);
    }
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

        mac::create($validData);

        return redirect('/mac/submission')->with('success', 'Pengumpulan Berhasil');
    }
}
