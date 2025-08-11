<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Order;
use App\Models\User;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;
use App\Mail\SendMail;
use App\Models\Cart;
use App\Models\MerchImage;
use App\Models\MerchLink;
use App\Models\MerchOrder;
use App\Models\MerchOrderDetail;
use App\Models\MerchPreorder;
use App\Models\MerchPreorderCart;
use App\Models\MerchPreorderDetail;
use App\Models\MerchVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $merches = Merch::all();
        return view('Merch.index', ['merches' => $merches, 'title' => 'merch']);
    }

    public function cart()
    {
        $flag = false;

        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $preorderCarts = MerchPreorderCart::where('user_id', auth()->user()->id)->get();

        foreach ($carts as $cart) {
            if ($cart->variation()->stock < $cart->quantity) {
                $flag = !$flag;
            }
        }
        // dd($carts);
        return view('Merch.cart', ['carts'=>$carts, 'preorderCarts' => $preorderCarts, 'flag' => $flag, 'title' => 'merch']);
    }

    public function addToCartOld($id_merch)
    {
        $cart = session('cart');
        $merch = Merch::find($id_merch);
        $cart[$id_merch] = $merch;

        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function addToCart(Request $request)
    {
        if (Auth::check()) {
            // dd($request);
            $user = auth()->user();
            $carts = $user->carts;
            $flag = 'false';

            $merch = Merch::find($request->merch_id);
            $merchvariation = MerchVariation::where('description', $request->variation)
            ->where('merch_id', $request->merch_id)
            ->first();

            $price = $request->quantity * $merch->price;

            if (isset($carts[0])) {
                foreach ($carts as $cart) {
                    if ($cart->merch_id == $request->merch_id) {
                        if ($cart->variation == $request->variation) {
                            $new_quantity = $cart->quantity + $request->quantity;
                            $cart->update(['quantity' => $new_quantity]);
                            $flag = 'true';
                        }
                    }
                }
                if ($flag == 'false') {
                    Cart::create([
                        'user_id' => $user->id,
                        'merch_id' => $request->merch_id,
                        'quantity' => $request->quantity,
                        'variation' => $request->variation,
                        'total_price' => $price
                    ]);
                }
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'merch_id' => $request->merch_id,
                    'quantity' => $request->quantity,
                    'variation' => $request->variation,
                    'total_price' => $price
                ]);
            }

            return redirect('/cart');
        } else {
            return redirect('/login');
        }
    }

    public function addToPreorderCart(Request $request)
    {
        if (Auth::check()) {
            // dd($request);
            $user = auth()->user();
            $preorderCarts = $user->preorderCarts;
            $flag = 'false';

            $merch = Merch::find($request->merch_id);
            $merchvariation = MerchVariation::where('description', $request->variation)
            ->where('merch_id', $request->merch_id)
            ->first();

            $price = $request->quantity * ($merch->price + $merchvariation->additional_price);

            if (isset($preorderCarts[0])) {
                foreach ($preorderCarts as $cart) {
                    if ($cart->merch_id == $request->merch_id) {
                        if ($cart->variation == $request->variation) {
                            $new_quantity = $cart->quantity + $request->quantity;
                            $cart->update(['quantity' => $new_quantity]);
                            $flag = 'true';
                        }
                    }
                }
                if ($flag == 'false') {
                    MerchPreorderCart::create([
                        'user_id' => $user->id,
                        'merch_id' => $request->merch_id,
                        'quantity' => $request->quantity,
                        'variation' => $request->variation,
                        'total_price' => $price
                    ]);
                }
            } else {
                MerchPreorderCart::create([
                    'user_id' => $user->id,
                    'merch_id' => $request->merch_id,
                    'quantity' => $request->quantity,
                    'variation' => $request->variation,
                    'total_price' => $price
                ]);
            }

            return redirect('/cart');
        } else {
            return redirect('/login');
        }
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->delete();

        return redirect('/cart');
    }

    public function removeFromPreorderCart(MerchPreorderCart $merchPreorderCart)
    {
        $merchPreorderCart->delete();

        return redirect('/cart');
    }

    public function updateCartQuantity(Cart $cart, Request $request){
        $request->validate([
            'quantity' => 'required'
        ]);

        $merch = $cart->merch;
        $merchvariation = MerchVariation::where('description', $cart->variation)
            ->where('merch_id', $merch->id)
            ->first();
        // dd($merch, $merchvariation);

        if ($request->quantity <= 0) {
            $cart->delete();
        }else{
            $cart->quantity = $request->quantity;
            $price = $request->quantity * $merch->price;
            $cart->total_price = $price;
            $cart->update();
        }

        $carts = Cart::where('user_id', auth()->id())->get();

        $cumulative_price = $carts->sum('total_price');
        $cumulative_additional_price = $carts->sum(function ($cart) {
            $merch = $cart->merch;
            $variation = MerchVariation::where('description', $cart->variation)
                ->where('merch_id', $merch->id)
                ->first();

            return $cart->quantity * ($variation->additional_price ?? 0);
        });

        $subtotal = $cumulative_price;
        $total = $cumulative_price + $cumulative_additional_price;

    return response()->json([
        'success' => true,
        'new_quantity' => $cart->quantity,
        'new_total' => $cart->total_price,
        'subtotal' => $subtotal,
        'additional' => $cumulative_additional_price,
        'total' => $total,
    ]);
    }

    public function updatePreorderCartQuantity(MerchPreorderCart $merchPreorderCart, Request $request){
        $request->validate([
            'quantity' => 'required'
        ]);
        // dd($merchPreorderCart);
        $merch = $merchPreorderCart->merch;
        $merchvariation = MerchVariation::where('description', $merchPreorderCart->variation)
            ->where('merch_id', $merch->id)
            ->first();
        // dd($merch, $merchvariation);

        if ($request->quantity <= 0) {
            $merchPreorderCart->delete();
        }else{
            $merchPreorderCart->quantity = $request->quantity;
            $price = $request->quantity * ($merch->price + $merchvariation->additional_price);
            $merchPreorderCart->total_price = $price;
            $merchPreorderCart->update();
        }

        return redirect('/cart');
    }

    public function checkout()
    {
        $flag = false;
        
        $carts = auth()->user()->carts;

        foreach ($carts as $cart) {
            if ($cart->variation()->stock < $cart->quantity) {
                $flag = !$flag;
            }
        }
        // dd($carts);
        return view('Merch.checkout', ['carts' => $carts, 'flag' => $flag]);
    }

    public function checkoutPreorder()
    {
        $carts = auth()->user()->preorderCarts;

        return view('Merch.preordercheckout', ['carts' => $carts]);
    }

    public function order(Request $request){
        if (Auth::check()) {
            $user = auth()->user();

            $carts = $user->carts;

            $orderData = $request->validate([
                'email' => 'required',
                'phone' => 'required',
                'line' => 'required',
                'payment_image' => 'required|image|file|max:10240',
            ]);

            // Check stock for each item in the cart
            foreach ($carts as $cart) {
                $merchvariation = MerchVariation::where('description', $cart->variation)
                    ->where('merch_id', $cart->merch_id)
                    ->first();

                if ($merchvariation->stock < $cart->quantity) {
                    return redirect()->back()->withErrors(['error' => "The item '{$cart->merch->name}' in size '{$cart->variation}' is out of stock."]);
                }
            }

            if ($request->file('payment_image')) {
                $orderData['payment_image'] = $request->file('payment_image')->storePublicly('merch_payment_images', 'public');
            }

            $orderData['user_id'] = $user->id;
            $orderData['status'] = 'PENDING';
            $orderData['cumulative_price'] = 0;
            $cumulative_price = 0;

            $order = MerchOrder::create($orderData);

            foreach ($carts as $cart) {
                MerchOrderDetail::create([
                    'order_id' => $order->id,
                    'merch_id' => $cart->merch_id,
                    'quantity' => $cart->quantity,
                    'variation' => $cart->variation,
                    'total_price' => $cart->total_price,
                ]);

                $cumulative_price += $cart->total_price;

                $cart->merch->stock = $cart->merch->stock - $cart->quantity;
                $cart->merch->update();

                $merchvariation = MerchVariation::where('description', $cart->variation)
                ->where('merch_id', $cart->merch_id)
                ->first();
                $merchvariation->stock = $merchvariation->stock - $cart->quantity;
                $merchvariation->update();

                $cart->delete();
            }

            $order->update(['cumulative_price'=>$cumulative_price]);

            $data = [
                'subject' => '[Radioactive - Order Placed]',
                'view' => 'mail.order-placed',
                'receiver' => $user->name,
                'order_id' => $order->id,
                'total_price' => $order->cumulative_price
            ];

            try {
                Mail::to($order->email)->send(new SendMail($data));
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

            return redirect('/cart');
        } else {
            return redirect('/login');
        }
    }

    public function preorder(Request $request){
        if (Auth::check()) {
            $user = auth()->user();

            $carts = $user->preorderCarts;

            $orderData = $request->validate([
                'email' => 'required',
                'phone' => 'required',
                'line' => 'required',
                'payment_image' => 'required|image|file|max:10240',
            ]);

            if ($request->file('payment_image')) {
                $orderData['payment_image'] = $request->file('payment_image')->storePublicly('merch_payment_images', 'public');
            }

            $orderData['user_id'] = $user->id;
            $orderData['status'] = 'PENDING';
            $orderData['cumulative_price'] = 0;
            $cumulative_price = 0;

            $order = MerchPreorder::create($orderData);

            foreach ($carts as $cart) {
                MerchPreorderDetail::create([
                    'order_id' => $order->id,
                    'merch_id' => $cart->merch_id,
                    'quantity' => $cart->quantity,
                    'variation' => $cart->variation,
                    'total_price' => $cart->total_price,
                ]);

                $cumulative_price += $cart->total_price;

                $cart->merch->stock = $cart->merch->stock - $cart->quantity;
                $cart->merch->update();

                $merchvariation = MerchVariation::where('description', $cart->variation)
                ->where('merch_id', $cart->merch_id)
                ->first();
                $merchvariation->stock = $merchvariation->stock - $cart->quantity;
                $merchvariation->update();

                $cart->delete();
            }

            $order->update(['cumulative_price'=>$cumulative_price]);

            $data = [
                'subject' => '[Radioactive - Preorder Placed]',
                'view' => 'mail.preorder-placed',
                'receiver' => $user->name,
                'order_id' => $order->id,
                'total_price' => $order->cumulative_price
            ];

            try {
                Mail::to($order->email)->send(new SendMail($data));
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

            return redirect('/cart');
        } else {
            return redirect('/login');
        }
    }

    public function admin(){
        return view('Merch.Admin.admin');
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

        return redirect('/admin/orders/dashboard')->with('success', 'Order Approved');
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

        return redirect('/admin/preorders/dashboard')->with('success', 'Order Approved');
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

        return redirect('/admin/orders/dashboard')->with('success', 'Order Cancelled');
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

        return redirect('/admin/preorders/dashboard')->with('success', 'Order Cancelled');
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

        return redirect('/admin/orders/dashboard')->with('success', 'Order Suspended');
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

        return redirect('/admin/preorders/dashboard')->with('success', 'Order Suspended');
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

        return redirect('/admin/preorders/dashboard')->with('success', 'Order Suspended');
    }

    public function finish(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Finished'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email order finished

        return redirect('/admin/orders/dashboard')->with('success', 'Order Suspended');
    }

    public function finishPreorder(MerchPreorder $merchPreorder)
    {
        $merchPreorder->update([
            'status' => 'Finished'
        ]);

        $customer_email = $merchPreorder->email;
        $name = $merchPreorder->user->name;

        //email order finished

        return redirect('/admin/orders/dashboard')->with('success', 'Order Suspended');
    }
    
    public function userDashboard(){
        $merchOrders = auth()->user()->merchOrders;
        $merchPreorders = auth()->user()->merchPreorders;
        return view('Merch.userdash', ['merchOrders' => $merchOrders,'merchPreorders'=>$merchPreorders]);
    }

    public function showOrder(MerchOrder $merchOrder)
    {
        // dd($merchOrder);
        return view('Merch.showorder', ['merchOrder'=>$merchOrder]);
    }
    public function showPreorder(MerchPreorder $merchPreorder)
    {
        // dd($merchPreorder);
        return view('Merch.showpreorder', ['merchPreorder'=>$merchPreorder]);
    }

    public function ordersDashboard(){
        $orders = MerchOrder::all();

        return view('Merch.admin.ordersdash', ['orders' => $orders]);
    }
    public function preordersDashboard(){
        $orders = MerchPreorder::all();

        return view('Merch.admin.preordersdash', ['orders' => $orders]);
    }

    public function resetCart()
    {
        if (Auth::check()) {
            $user = auth()->user();

            $carts = $user->carts;

            foreach ($carts as $cart) {
                $cart->delete();
            }

            return redirect('/menu');
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

    public function addImage(Merch $merch)
    {
        return view('Merch.Admin.addimage', ['merch' => $merch]);
    }

    public function storeImage(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'description' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $validData['merch_id'] = $merch->id;

        MerchImage::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addimage')->with('success', 'Merch Image Uploaded');
    }

    public function deleteImage(MerchImage $merchImage)
    {
        Storage::delete($merchImage->image);
        //ini belom bisa delete imagenya dari storage folder, gatau caranya gimana pls bantu
        $merch_id = $merchImage->merch_id;
        $merchImage->delete();
        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Image Removed');
    }

    public function addVariation(Merch $merch)
    {
        return view('Merch.Admin.addvariation', ['merch' => $merch]);
    }

    public function storeVariation(Request $request, Merch $merch){
        $validData = $request->validate([
            'description' => 'required',
            'stock' => 'required',
            'additional_price' => 'required'
        ]);

        $validData['merch_id'] = $merch->id;

        MerchVariation::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addvariation')->with('success', 'Merch Variant Added');
    }

    public function updateVariation(Request $request, MerchVariation $merchvariation){
        $validData = $request->validate([
            'description' => 'required',
            'additional_price' => 'required',
            'stock' => 'required',
        ]);

        $merchvariation->update($validData);

        return redirect('/merch/admin/' . $merchvariation->merch_id . '/edit')->with('success', 'Merch Variation Updated');
    }

    public function deleteVariation(MerchVariation $merchvariation){
        $merch_id = $merchvariation->merch_id;
        $merchvariation->delete();
        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Variation Removed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch)
    {
        //
        $links = $merch->merchlinks;
        return view('Merch.merch', ['merch' => $merch, 'links' => $links, 'title' => 'merch']);
    }

    public function dashboard()
    {
        $merches = Merch::all();

        return view('Merch.Admin.dashboard', ['merches' => $merches]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merch $merch)
    {
        //
        return view('Merch.Admin.edit', ['merch' => $merch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merch $merch)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->old_image) {
                Storage::delete($request->old_image);
            }
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $merch->update($validData);

        return redirect('/merch/admin/' . $merch->id . '/edit')->with('success', 'Merch Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch)
    {
        //
        $merch->delete();
        return redirect('/merch/admin/dashboard')->with('success', 'Merch Deleted');
    }

    public function addLink(Merch $merch)
    {
        return view('Merch.Admin.addlink', ['merch' => $merch]);
    }

    public function storeLink(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $validData['merch_id'] = $merch->id;

        MerchLink::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addlink')->with('success', 'Merch Link Added');
    }

    public function updateLink(Request $request, $linkId)
    {   
        $link = MerchLink::where('id', $linkId)->first();
        // dd($link);
        $validData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|url|max:255',
        ]);

        $link->update($validData);

        return redirect('/merch/admin/' . $link->merch_id . '/edit')->with('success', 'Merch Link Updated');
    }

    public function deleteLink($linkId)
    {   
        $link = MerchLink::where('id', $linkId)->first();
        // dd($link);
        $merch_id = $link->merch_id;
        $link->delete();

        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Link Removed');
    }
}
