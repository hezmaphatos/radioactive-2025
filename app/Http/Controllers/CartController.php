<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Merch;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Mail\Confirmation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\DetailTransaction;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function removeFromCart($cart_id) {
        if(Auth::check()){
            Cart::where('id', $cart_id)->delete();

            return redirect('/cart');
        } else {
            return redirect('/login');
        }

    }

    public function checkout(Request $request) {

        if(Auth::check()){
            $logged_id = auth()->user()->id;
            $cart = Cart::where('user_id', $logged_id)->get();

            $merches = Merch::all();

            return view('Merch.checkout', [
                        'cart' => $cart,
                        'merches' => $merches
            ]);
        } else {
            return redirect('/login');
        }

    }

    public function dashboard() {
        $merches = Merch::all();
        $orders = Order::all();

        return view('Merch.dashboard', [
            'merches' => $merches,
            'orders' => $orders
        ]);
   
    }

    public function approval($id, $status)
    {
        $order = Order::where('id', $id)->first();
        // dd($order);

        // $logged_email = auth()->user()->email;
        $customer_email = $order->email;
        $name = $order->name;


        if ($status == "paid") {
            Order::where('id', $id)->update([
                'status' => 'Paid'
            ]);

            $this->email_confirmation($customer_email, $name);
        } else {
            Order::where('id', $id)->update([
                'status' => 'Canceled'
            ]);
        }
        return redirect('/dashboard');
    }

    private function email_confirmation($receiver_mail, $name)
    {
        $data = [
            'subject' => '[UMN Radioactive 2023 - Your Order Has Been Confirmed]',
            'receiver' => $name
        ];
        Mail::to($receiver_mail)->send(new Confirmation($data));
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
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
