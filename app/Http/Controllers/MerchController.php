<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Order;
use App\Models\User;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Http\Request;

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
            'merch' => $merch
        ]);
    }

    public function home()
    {
        $merch = Merch::all();
        return view('Merch.list', [
            "title" => 'merch'
        ])->with('merch', $merch);
    }

    public function merch() {
        if(Auth::check()){
            $logged_id = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $logged_id)->get();

            return view('Merch.merch')->with('cart', $cart);
        } else {
            return redirect('/login');
        }
        
    }

    public function ShowItem($id) 
    {
        $merch = Merch::find($id);
        
        // dd($merch);    
        return view('Merch.merch', compact('merch'));
    }

    public function cart() {
        if(Auth::check()){
            $logged_id = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $logged_id)->get();
            $merches = Merch::all();

            return view('Merch.cart')->with('cart', $cart)->with('merches', $merches);
        } else {
            return redirect('/login');
        }
        
    }

    public function addToCart(Request $request) {
        if(Auth::check()){
            $logged_id = auth()->user()->id;
            $carts = Cart::where('user_id', '=', $logged_id)->get();
            $flag = 'false';
            $size = $request->size;
            $tee = $request->tee;

            $merch = Merch::find($request->id);

            $price = $merch->price;

            if ($request->id == 3 || $request->id == 4 || $request->id ==5 || $request->id == 6) {
                $size = '';
            }

            if ($request->id != 7 && $request->id != 8) {
                $tee = '';
            }

            if ($request->id == 1 || $request->id == 2) {
                if($size == 'XXL' || $size == '3XL')
                {
                    $price = 105000;
                }
                else if($size == '2XL')
                {
                    $price = 100000;
                }
                else if($size == '4XL')
                {
                    $price = 110000;
                }
            }

            if (isset($carts[0])) {
                foreach ($carts as $cart) {

                    if ($cart->merch_id == $request->id) {
                        if ($cart->size == $request->size) {
                            $new_qty = $cart->qty + $request->qty;
                            $cart->update(['qty' => $new_qty]);

                            $flag = 'true';
                        }
                    }
                }

                if ($flag == 'false') {
                    Cart::create([
                        'user_id' => $logged_id,
                        'merch_id' => $request->id,
                        'qty' => $request->qty,
                        'size' => $size,
                        'tee' => $tee,
                        'price' => $price
                    ]);
                }
            } else {
                Cart::create([
                    'user_id' => $logged_id,
                    'merch_id' => $request->id,
                    'qty' => $request->qty,
                    'size' => $size,
                    'tee' => $tee,
                    'price' => $price
                ]);
            }

            return redirect('/cart');

        } else {
            return redirect('/login');
        }
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
