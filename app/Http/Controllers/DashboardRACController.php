<?php

namespace App\Http\Controllers;

use App\Models\rac;
use Illuminate\Http\Request;

class DashboardRACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.RAC.index', [
            'racs' => rac::all()
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
    public function show(rac $rac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rac $rac)
    {
        return view('Dashboard.RAC.edit', [
            'rac' => $rac,
            'racs' => rac::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rac $rac)
    {
        $rules = [
            'tim1_penyiar1' => 'required|max:255',
            'tim1_penyiar2' => 'required|max:255',
            'tim1_operator' => 'required|max:255',
            'tim1_institusi' => 'required|max:255',
            'tim1_nims1' => 'required|max:255',
            'tim1_nims2' => 'required|max:255',
            'tim1_nimop' => 'required|max:255',
            'tim1_contact_wa' => 'required|max:255',
            'tim1_contact_line' => 'required|max:255',
            'tim1_nama'=>'required|max:255',
            'tim1_email'=>'required|max:255',

            'tim2_penyiar1' => 'max:255',
            'tim2_penyiar2' => 'max:255',
            'tim2_operator' => 'max:255',
            'tim2_institusi' => 'max:255',
            'tim2_nims1' => 'max:255',
            'tim2_nims2' => 'max:255',
            'tim2_nimop' => 'max:255',
            'tim2_contact_wa' => 'max:255',
            'tim2_contact_line' => 'max:255',
            'tim2_nama' => 'max:255',
            'tim2_email' => 'max:255',
        ];      
        
        $validatedData = $request->validate($rules);
        
        $rac->update($validatedData);
        
        return redirect('/dashboard/racs')->with('success', 'Team has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rac $rac)
    {
        rac::destroy($rac->id);
        return redirect('/dashboard/racs')->with('success', 'Team has been deleted!');
    }
}
