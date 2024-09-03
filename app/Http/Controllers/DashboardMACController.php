<?php

namespace App\Http\Controllers;

use App\Models\mac;
use Illuminate\Http\Request;

class DashboardMACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $macs = mac::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%')
                             ->orWhere('institusi', 'like', '%' . $search . '%')
                             ->orWhere('email', 'like', '%' . $search . '%')
                             ->orWhere('nim', 'like', '%' . $search . '%')
                             ->orWhere('uname', 'like', '%' . $search . '%');
            })
            ->get();

        // $macs = $macs->paginate(5)->withQueryString();
    
        return view('Dashboard.MAC.index', [
            'macs' => $macs,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mac $mac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mac $mac)
    {
        return view('Dashboard.MAC.edit', [
            'mac' => $mac
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mac $mac)
    {
        $rules = [
            'nama' => 'required|max:255',
            'usia' => 'required|integer|min:0',
            'no_telp' => 'required|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|max:255',
            'institusi' => 'required|max:255',
            'uname' => 'required|max:255',
            'link' => 'required|url|max:500',
        ];      
        
        $validatedData = $request->validate($rules);
        
        $mac->update($validatedData);
        
        return redirect('/dashboard/macs')->with('success', 'MAC has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mac $mac)
    {
        mac::destroy($mac->id);

        return redirect('/dashboard/macs')->with('success', 'MAC has been deleted!');
    }
}
