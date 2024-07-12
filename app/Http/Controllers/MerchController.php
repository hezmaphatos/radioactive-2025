<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $merch = Merch::all();
        return view('Merch.index', [
            "title" => "merch"
        ])->with('merch', $merch);
    }

    public function cart() {
        $cart = session('cart');
        return view('Merch.cart')->with('cart', $cart);
    }

    public function addToCart($id_merch) {
        $cart = session('cart');
        $merch = Merch::find($id_merch);
        $cart[$id_merch] = $merch;
        
        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function removeFromCart($id_merch) {
        $cart = session('cart');
        unset($cart[$id_merch]);
        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function checkout() {
        $cart = session('cart');
        return view('Merch.checkout')->with('cart', $cart);
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
    public function store(StoreMerchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merch $merch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchRequest $request, Merch $merch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch)
    {
        //
    }
}
