<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radioactive</title>
</head>

<body class="min-h-screen bg-black overflow-scroll">
    <div class="flex flex-wrap justify-center items-center align-middle text-center p-8 w-full">
        <h1 class="text-4xl font-brodyrawk text-white w-full text-center mb-10">Order Details</h1>
        <div class="w-full flex justify-center items-center align-middle flex-wrap gap-8">
            <div class="bg-gray-900 border-2 border-[#d61525] font-ltmuseum-reg rounded text-white p-4 w-full md:w-[400px]">
                <h1 class="text-2xl font-ltmuseum-bold">Order ID: {{ $merchOrder->id }}</h1>
                <p class="w-full text-left my-1">Email: {{ $merchOrder->email }}</p>
                <p class="w-full text-left my-1">Phone: {{ $merchOrder->phone }}</p>
                <p class="w-full text-left my-1">Line: {{ $merchOrder->line }}</p>
                <p class="w-full text-left my-1">Subtotal: Rp
                    {{ number_format($merchOrder->cumulative_price, 0, ',', '.') }}</p>
                <p class="w-full text-left my-1">Status: {{ $merchOrder->status }}</p>
                <p class="w-full text-left my-1">Payment Image: </p>
                <img src="{{ asset('storage/' . $merchOrder->payment_image) }}" alt="" class="w-48">
                <p class="w-full text-left my-1">Items: </p>
                @foreach ($merchOrder->orderDetails as $orderDetail)
                    <div class="flex flex-col p-1 bg-slate-300 rounded-md my-1 text-black text-left">
                        <p>Product: {{ $orderDetail->merch->name }}</p>
                        <p>Qty: {{ $orderDetail->qty }}</p>
                        <p>Variation: {{ $orderDetail->variation }}</p>
                        <p>Price: {{ $orderDetail->total_price }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
