<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\MerchOrder;
use Illuminate\Http\Request;

class DashboardOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = MerchOrder::all();

        return view('Dashboard.Merch.ordersdash', ['orders' => $orders]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function approval(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Paid'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //bikin invoice
        //email approve, link ke invoice
        $data = [
            'subject' => '[Radioactive - Order Confirmed]',
            'view' => 'mail.order-confirmed',
            'receiver' => $merchOrder->user->name,
            'order_id' => $merchOrder->id,
            'total_price' => $merchOrder->cumulative_price
        ];

        try {
            Mail::to($merchOrder->email)->send(new SendMail($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);


        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage(); // Get the error message
            $errorCode = $th->getCode(); // Get the error code (if available)

            // Additional handling or logging of the error information can be done here

            return response()->json([
                'status' => 'error',
                'message' => 'Email failed to send',
                'error_message' => $errorMessage, // Return the error message in the JSON response
                'error_code' => $errorCode // Return the error code in the JSON response
            ]);
        }

        return redirect('/dashboard/orders')->with('success', 'Order Approved');
    }

    public function cancel(MerchOrder $merchOrder, Request $request)
    {
        $merchOrder->update([
            'status' => 'Cancelled'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email cancel
        $data = [
            'subject' => '[Radioactive - Order Cancelled]',
            'view' => 'mail.order-cancel',
            'receiver' => $merchOrder->user->name,
            'order_id' => $merchOrder->id,
            'total_price' => $merchOrder->cumulative_price,
            'reason' => $request->reason
        ];

        try {
            Mail::to($merchOrder->email)->send(new SendMail($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);


        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage(); // Get the error message
            $errorCode = $th->getCode(); // Get the error code (if available)

            // Additional handling or logging of the error information can be done here

            return response()->json([
                'status' => 'error',
                'message' => 'Email failed to send',
                'error_message' => $errorMessage, // Return the error message in the JSON response
                'error_code' => $errorCode // Return the error code in the JSON response
            ]);
        }

        return redirect('/dashboard/orders')->with('success', 'Order Cancelled');
    }

    public function suspend(MerchOrder $merchOrder, Request $request)
    {
        $merchOrder->update([
            'status' => 'Suspended'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email suspen, suruh kontak tim RA
        $data = [
            'subject' => '[Radioactive - Order Suspended]',
            'view' => 'mail.order-suspend',
            'receiver' => $merchOrder->user->name,
            'order_id' => $merchOrder->id,
            'total_price' => $merchOrder->cumulative_price,
            'reason' => $request->reason
        ];

        try {
            Mail::to($merchOrder->email)->send(new SendMail($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);


        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage(); // Get the error message
            $errorCode = $th->getCode(); // Get the error code (if available)

            // Additional handling or logging of the error information can be done here

            return response()->json([
                'status' => 'error',
                'message' => 'Email failed to send',
                'error_message' => $errorMessage, // Return the error message in the JSON response
                'error_code' => $errorCode // Return the error code in the JSON response
            ]);
        }

        return redirect('/dashboard/orders')->with('success', 'Order Suspended');
    }

    public function finish(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Finished'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email order finished

        return redirect('/dashboard/orders')->with('success', 'Order Suspended');
    }
}
