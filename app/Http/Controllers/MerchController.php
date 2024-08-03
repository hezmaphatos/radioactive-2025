<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;
use App\Models\MerchImage;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $merches = Merch::all();
        return view('Merch.index', ['merches' => $merches]);
    }

    public function cart()
    {
        $cart = session('cart');
        return view('Merch.cart')->with('cart', $cart);
    }

    public function addToCart($id_merch)
    {
        $cart = session('cart');
        $merch = Merch::find($id_merch);
        $cart[$id_merch] = $merch;

        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function removeFromCart($id_merch)
    {
        $cart = session('cart');
        unset($cart[$id_merch]);
        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function checkout()
    {
        $cart = session('cart');
        return view('Merch.checkout')->with('cart', $cart);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Merch.Admin.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:10240',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        Merch::create($validData);

        return redirect('/merch/admin/new')->with([
            'success' => 'Merch Baru Telah Ditambahkan',
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
    }

    public function addImage(Merch $merch){
        return view('Merch.Admin.addimage', ['merch' => $merch]);
    }

    public function storeImage(Request $request, Merch $merch){
        $validData = $request->validate([
            'description' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $validData['merch_id'] = $merch->id;

        MerchImage::create($validData);

        return redirect('/merch/admin/'.$merch->id.'/addimage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch)
    {
        //
        return view('Merch.merch', ['merch' => $merch]);
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
    public function update(Request $request, Merch $merch)
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
