<?php

namespace App\Http\Controllers;

use App\Models\rac_teams;
use Illuminate\Http\Request;

class DashboardRACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.RAC.index', [
            'racs' => rac_teams::all()
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
    public function show(rac_teams $rac_teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rac_teams $rac_teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rac_teams $rac_teams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rac_teams $rac_teams)
    {
        //
    }
}
