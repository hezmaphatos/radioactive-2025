<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\MerchPreorder;
use Illuminate\Http\Request;

class DashboardPreorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = MerchPreorder::all();

        return view('Dashboard.Merch.preordersdash', ['orders' => $orders]);
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
    public function show(MerchPreOrder $merchPreOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MerchPreOrder $merchPreOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MerchPreOrder $merchPreOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MerchPreOrder $merchPreOrder)
    {
        //
    }

    public function approvalPreorder(MerchPreorder $merchPreorder)
    {
        $merchPreorder->update([
            'status' => 'Paid'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //bikin invoice
        //email approve, link ke invoice
        $data = [
            'subject' => '[Radioactive - Preorder Confirmed]',
            'view' => 'mail.preorder-confirmed',
            'receiver' => $merchPreorder->user->name,
            'order_id' => $merchPreorder->id,
            'total_price' => $merchPreorder->cumulative_price
        ];

        try {
            Mail::to($merchPreorder->email)->send(new SendMail($data));
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

        return redirect('/dashboard/preorders')->with('success', 'Order Approved');
    }

    public function cancelPreorder(MerchPreorder $merchPreorder, Request $request)
    {
        $merchPreorder->update([
            'status' => 'Cancelled'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //email cancel
        $data = [
            'subject' => '[Radioactive - Preorder Cancelled]',
            'view' => 'mail.preorder-cancel',
            'receiver' => $merchPreorder->user->name,
            'order_id' => $merchPreorder->id,
            'total_price' => $merchPreorder->cumulative_price,
            'reason' => $request->reason
        ];

        try {
            Mail::to($merchPreorder->email)->send(new SendMail($data));
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

        return redirect('/dashboard/preorders')->with('success', 'Order Cancelled');
    }

    public function suspendPreorder(MerchPreorder $merchPreorder, Request $request)
    {
        $merchPreorder->update([
            'status' => 'Suspended'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //email suspen, suruh kontak tim RA
        $data = [
            'subject' => '[Radioactive - Order Suspended]',
            'view' => 'mail.preorder-suspend',
            'receiver' => $merchPreorder->user->name,
            'order_id' => $merchPreorder->id,
            'total_price' => $merchPreorder->cumulative_price,
            'reason' => $request->reason
        ];

        try {
            Mail::to($merchPreorder->email)->send(new SendMail($data));
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

        return redirect('/dashboard/preorders')->with('success', 'Order Suspended');
    }

    public function confirmPreorder(MerchPreorder $merchPreorder)
    {
        $merchPreorder->update([
            'status' => 'Confirmed'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //email konfirmasi pesanan sudah bisa diambil
        $data = [
            'subject' => '[Radioactive - Preorder Confirmed]',
            'view' => 'mail.preorder-confirmed',
            'receiver' => $merchPreorder->user->name,
            'order_id' => $merchPreorder->id,
            'total_price' => $merchPreorder->cumulative_price
        ];

        try {
            Mail::to($merchPreorder->email)->send(new SendMail($data));
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

        return redirect('/dashboard/preorders')->with('success', 'Order Suspended');
    }

    public function finishPreorder(MerchPreorder $merchPreorder)
    {
        $merchPreorder->update([
            'status' => 'Finished'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //email order finished

        return redirect('/dashboard/orders')->with('success', 'Order Suspended');
    }
}
