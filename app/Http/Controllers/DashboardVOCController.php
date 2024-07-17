<?php

namespace App\Http\Controllers;

use App\Models\voc;
use Illuminate\Http\Request;

class DashboardVOCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $vocs = VOC::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%')
                             ->orWhere('institusi', 'like', '%' . $search . '%')
                             ->orWhere('email', 'like', '%' . $search . '%')
                             ->orWhere('nim', 'like', '%' . $search . '%')
                             ->orWhere('uname', 'like', '%' . $search . '%');
            })
            ->get();
    
        return view('Dashboard.VOC.index', [
            'vocs' => $vocs,
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
    public function show(voc $voc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(voc $voc)
    {
        return view('Dashboard.VOC.edit', [
            'voc' => $voc
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, voc $voc)
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
        
        $voc->update($validatedData);
        
        return redirect('/dashboard/vocs')->with('success', 'VOC has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(voc $voc)
    {
        VOC::destroy($voc->id);

        return redirect('/dashboard/vocs')->with('success', 'VOC has been deleted!');
    }
}
