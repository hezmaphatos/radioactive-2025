<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Mail\TicketNotify;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {   
        $ticket_sold = Ticket::count();
        $isEarlyBird = true;

        if ($ticket_sold >= 71) {
            $isEarlyBird = false;
        }

        return view('Tickets.index', compact('isEarlyBird'));
    }

    public function custom_order()
    {
        return view('Tickets.custom_order');
    }

    public function order($quantity)
    {
        return view('Tickets.order', compact('quantity'));
    }

    public function ticket_information($quantity, Request $request)
    {
        // get buyer details data
        $buyer_detail = $request->all();

        // lempar data ke bundle.blade.php
        return view('Tickets.bundle', compact('quantity', 'buyer_detail'));
    }
    
    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'phone' => 'required'
        ]);

        // if (Order::where('email', $request->email)->exists()) {
        //     return back()->withErrors('email', 'Email already exists!');
        // }

        $ticket_sold = Ticket::count();
        $isEarlyBird = true;
        $harga_ticket = 45000;

        if ($ticket_sold >= 71) {
            $isEarlyBird = 45000;
        }

        // kalo cuma single buyer
            if($request->qty == 3){
                $request->request->add(['total_price' => 115000 , 'status' => 'Unpaid']);
            } else{
                $request->request->add(['total_price' => $request->qty * $harga_ticket, 'status' => 'Unpaid']);
            }

            $order = Order::create($request->all());
    
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            // dd($order->total_price);
    
            $params = array(
                'transaction_details' => array(
                    'order_id' => $order->id,
                    'gross_amount' => $order->total_price,
                ),
                'customer_details' => array(
                    'first_name' => $request->name,
                    'last_name' => '',
                    'email' => $request->email,
                    'phone' => $request->phone,
                ),
            );
    
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('Tickets.checkout', compact('order', 'snapToken'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        // dd($request);

        if ($hashed == $request->signature_key) {
            if ($request -> transaction_status == 'capture' or $request -> transaction_status == 'settlement') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);

                // quantity pesanan
                $order_qty = $order->qty;

                for ($i=0; $i < $order_qty; $i++) { 
                    Ticket::create([
                        'order_id' => $order->id,
                        'ticket_code' => str("RA230")->append( Str::random(5)),
                        'email' => $order->email,
                    ]);
                }
                
                
                $receiver_mail = $order->email;
                $receiver = $order->name;
                $quantity = $order->qty;
                $ticket_code = Ticket::where('order_id', $order->id)->get()->pluck('ticket_code');

                // send ticket ke email
                $this->email($receiver_mail, $receiver, $quantity, $ticket_code);
            }
        }
    }

    private function email($receiver_mail,$receiver, $quantity, $ticket_code)
    {
        $ticket_code_packed = '';
        $ticket_code_array = $ticket_code->toArray();

        foreach($ticket_code_array as $ticket){
            $ticket_code_packed = $ticket_code_packed . "umnradioactive.com/show-qr/" . $ticket . ', ';
        }

        $ticket_sold = Ticket::count();
        $isEarlyBird = true;

        if ($ticket_sold >= 71) {
            $isEarlyBird = false;
        }

        $ticket_type = $isEarlyBird? 'Early Bird' : 'Pre-sale';

        $data = [
            'subject' => '[UMN RadioActive 2023 - Your Ticket Order is Confirmed]',
            'receiver' => $receiver,
            'ticket_type' => $ticket_type,
            'quantity' => $quantity,
            'ticket_code' => $ticket_code->implode(', '),
            'ticket_code_packed' => $ticket_code_packed,
        ];

        try {
            Mail::to($receiver_mail)->send(new TicketNotify($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);

         
        } catch (\Throwable $th) {
           return response()->json([
               'status' => 'error',
               'message' => 'Email failed to send'
           ]);
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
