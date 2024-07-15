<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Merch;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Mail\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\Mail;

class MerchOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Merch.checkout', [
            "title" => "merch"
        ]);
    }

    public function checkout(Request $request)
    {

    }
    public function orderPage() {
        if(Auth::check()){
            $cart = session('cart');
            return view('Merch.cart')->with('cart', $cart);
        } else {
            return redirect('/login');
        }
    }
    
    public function order(Request $request) {
        if(Auth::check()){
            $logged_id = auth()->user()->id;

            $user = User::find($logged_id);

            $cart = Cart::where('user_id', '=', $logged_id)->get();

            $total_price = 0;

            foreach ($cart as $key) {
                $merch = Merch::find($key->merch_id);
                $merch->save();

                $total_price = $merch->price * $key->qty;

                $order = Order::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'wa' => $request->wa,
                    'line' => $request->line,
                    'merch_id' => $key->merch_id,
                    'qty' => $key->qty,
                    'size' => $key->size,
                    'tee' => $key->tee,
                    'image' => $request->file('payment_proof')->storePublicly('payment_images_merch', 'public'),
                    'total_price' => $total_price,
                    'status' => 'Unpaid'
                ]);
            }

            $order = Order::where('name', $user->name)->latest('created_at')->first();

            $submission_date = date('Y-m-d H:i:s');

            $this->email_submission($user->email, $order->id, $submission_date, $user->name);

            return redirect('/reset-cart');
        } else {
            return redirect('/login');
        }
    }

    private function email_submission($receiver, $order_id, $submission_date, $name)
    {
        $data = [
            'subject' => '[UMN RadioActive 2023 - Your Order Has Been Submitted]',
            'orderId' => $order_id,
            'submissionDate' => $submission_date,
            'receiver' => $name
        ];
        Mail::to($receiver)->send(new Submission($data));
    }

    public function resetCart() {
        if(Auth::check()){
            $logged_id = auth()->user()->id;

            $user = User::find($logged_id);
            
            Cart::where('user_id', '=', $logged_id)->delete();

            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('Tickets.invoice', compact('order'));
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}