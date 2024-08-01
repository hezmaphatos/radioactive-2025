<?php

namespace App\Http\Controllers;

use App\Models\MerchOrder;
use App\Http\Requests\StoreMerchOrderRequest;
use App\Http\Requests\UpdateMerchOrderRequest;

class MerchOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreMerchOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MerchOrder $merchOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerchOrder $merchOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchOrderRequest $request, MerchOrder $merchOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerchOrder $merchOrder)
    {
        //
    }
}
