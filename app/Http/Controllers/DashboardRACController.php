<?php

namespace App\Http\Controllers;

use App\Models\rac;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardRACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $racs = rac::oldest();
        
        if ($request->has('search')) {
            $search = $request->input('search');
            
            $racs->where(function($query) use ($search) {
                $query->where('tim1_penyiar1', 'like', '%' . $search . '%')
                      ->orWhere('tim1_penyiar2', 'like', '%' . $search . '%')
                      ->orWhere('tim1_operator', 'like', '%' . $search . '%')
                      ->orWhere('tim1_institusi', 'like', '%' . $search . '%')
                      ->orWhere('tim1_nims1', 'like', '%' . $search . '%')
                      ->orWhere('tim1_nims2', 'like', '%' . $search . '%')
                      ->orWhere('tim1_nimop', 'like', '%' . $search . '%')
                      ->orWhere('tim1_contact_wa', 'like', '%' . $search . '%')
                      ->orWhere('tim1_contact_line', 'like', '%' . $search . '%')
                      ->orWhere('tim2_penyiar1', 'like', '%' . $search . '%')
                      ->orWhere('tim2_penyiar2', 'like', '%' . $search . '%')
                      ->orWhere('tim2_operator', 'like', '%' . $search . '%')
                      ->orWhere('tim2_institusi', 'like', '%' . $search . '%')
                      ->orWhere('tim2_nims1', 'like', '%' . $search . '%')
                      ->orWhere('tim2_nims2', 'like', '%' . $search . '%')
                      ->orWhere('tim2_nimop', 'like', '%' . $search . '%')
                      ->orWhere('tim2_contact_wa', 'like', '%' . $search . '%')
                      ->orWhere('tim2_contact_line', 'like', '%' . $search . '%')
                      ->orWhere('tim3_penyiar1', 'like', '%' . $search . '%')
                      ->orWhere('tim3_penyiar2', 'like', '%' . $search . '%')
                      ->orWhere('tim3_operator', 'like', '%' . $search . '%')
                      ->orWhere('tim3_institusi', 'like', '%' . $search . '%')
                      ->orWhere('tim3_nims1', 'like', '%' . $search . '%')
                      ->orWhere('tim3_nims2', 'like', '%' . $search . '%')
                      ->orWhere('tim3_nimop', 'like', '%' . $search . '%')
                      ->orWhere('tim3_contact_wa', 'like', '%' . $search . '%')
                      ->orWhere('tim3_contact_line', 'like', '%' . $search . '%');
            });
        }

        $racs = $racs->paginate(5)->withQueryString();

        return view('Dashboard.RAC.index', [
            'racs' => $racs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.form', [
            'racs' => rac::all()
        ]);
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
            'payment_proof' => 'image|file|max:10240',
            'status' => 'required|max:255'
        ];
    
        if ($rac->tim1_nama) {
            $rules = array_merge($rules, [
                'tim1_penyiar1' => 'required|max:255',
                'tim1_penyiar2' => 'required|max:255',
                'tim1_operator' => 'required|max:255',
                'tim1_institusi' => 'required|max:255',
                'tim1_nims1' => 'required|max:255',
                'tim1_nims2' => 'required|max:255',
                'tim1_nimop' => 'required|max:255',
                'tim1_contact_wa' => 'required|max:255',
                'tim1_contact_line' => 'required|max:255',
                'tim1_nama' => 'required|max:255',
                'tim1_email' => 'required|max:255',
            ]);
        }
        
        if ($rac->tim2_nama) {
            $rules = array_merge($rules, [
                'tim2_penyiar1' => 'required|max:255',
                'tim2_penyiar2' => 'required|max:255',
                'tim2_operator' => 'required|max:255',
                'tim2_institusi' => 'required|max:255',
                'tim2_nims1' => 'required|max:255',
                'tim2_nims2' => 'required|max:255',
                'tim2_nimop' => 'required|max:255',
                'tim2_contact_wa' => 'required|max:255',
                'tim2_contact_line' => 'required|max:255',
                'tim2_nama' => 'required|max:255',
                'tim2_email' => 'required|max:255',
            ]);
        }
        
        if ($rac->tim3_nama) {
            $rules = array_merge($rules, [
                'tim3_penyiar1' => 'required|max:255',
                'tim3_penyiar2' => 'required|max:255',
                'tim3_operator' => 'required|max:255',
                'tim3_institusi' => 'required|max:255',
                'tim3_nims1' => 'required|max:255',
                'tim3_nims2' => 'required|max:255',
                'tim3_nimop' => 'required|max:255',
                'tim3_contact_wa' => 'required|max:255',
                'tim3_contact_line' => 'required|max:255',
                'tim3_nama' => 'required|max:255',
                'tim3_email' => 'required|max:255',
            ]);
        }
    
        $validatedData = $request->validate($rules);
    
        if ($request->file('payment_proof')) {
            if ($request->oldImage) {
                Storage::delete('public/' . $request->oldImage);
            }
            $validatedData['payment_proof'] = $request->file('payment_proof')->store('payment_images', 'public');
        }
     
        $rac->update($validatedData);
        
        return redirect('/dashboard/racs')->with('success', 'Team has been updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rac $rac)
    {
        if ($rac->payment_proof) {
            Storage::delete('public/' . $rac->payment_proof);
        }
        rac::destroy($rac->id);
        return redirect('/dashboard/racs')->with('success', 'Team has been deleted!');
    }
}
