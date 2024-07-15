<?php

namespace App\Http\Controllers;

use App\Models\voc;
use Illuminate\Http\Request;

class DashboardVOCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.VOC.index', [
            'title' => 'VOC',
            'vocs' => VOC::all()
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
