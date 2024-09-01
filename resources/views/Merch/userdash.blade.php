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
    <div class="flex flex-wrap justify-center items-center align-middle text-center p-8">
        <h1 class="text-4xl font-brodyrawk text-white w-full text-center mb-10">MERCH ORDERS</h1>
        <div class="w-full flex justify-center items-center align-middle flex-wrap gap-4">
            @foreach ($merchOrders as $merchOrder)
                <a class="md:w-[40%] w-full bg-gray-900 border-2 border-[#d61525] text-white p-4 rounded-lg flex justify-between"
                    href="/merch/order/{{ $merchOrder->id }}">
                    <div class="w-3/5">
                        <h1 class="w-full text-left font-ltmuseum-bold">Order {{ $merchOrder->id }} <p
                                class="text-slate-200 font-ltmuseum-light text-xl">
                                {{ $merchOrder->orderDetails->count() }} Details</p>
                        </h1>
                        <h2 class="w-full text-left font-ltmuseum-reg">Subtotal: Rp
                            {{ number_format($merchOrder->cumulative_price, 0, ',', '.') }}</h2>
                    </div>
                    <h1 class="w-2/5 font-ltmuseum-bold text-right
                        @if ($merchOrder->status == "Paid")
                            text-green-500
                        @elseif ($merchOrder->status == "Suspended")
                            text-yellow-500
                        @elseif ($merchOrder->status == "Cancelled")
                            text-red-500
                        @else
                            text-white
                        @endif
                    ">{{$merchOrder->status}}</h1>
                </a>
            @endforeach
        </div>
    </div>
    <div class="flex flex-wrap justify-center items-center align-middle text-center p-8">
        <h1 class="text-4xl font-brodyrawk text-white w-full text-center mb-10">MERCH PREORDERS</h1>
        <div class="w-full flex justify-center items-center align-middle flex-wrap gap-4">
            @foreach ($merchPreorders as $merchPreorder)
                <a class="md:w-[40%] w-full bg-gray-900 border-2 border-[#d61525] text-white p-4 rounded-lg flex justify-between"
                    href="/merch/preorder/{{ $merchPreorder->id }}">
                    <div class="w-3/5">
                        <h1 class="w-full text-left font-ltmuseum-bold">Order {{ $merchPreorder->id }} <p
                                class="text-slate-200 font-ltmuseum-light text-xl">
                                {{ $merchPreorder->preorderDetails->count() }} Details</p>
                        </h1>
                        <h2 class="w-full text-left font-ltmuseum-reg">Subtotal: Rp
                            {{ number_format($merchPreorder->cumulative_price, 0, ',', '.') }}</h2>
                    </div>
                    <h1 class="w-2/5 font-ltmuseum-bold text-right
                        @if ($merchPreorder->status == "Paid")
                            text-green-500
                        @elseif ($merchPreorder->status == "Suspended")
                            text-yellow-500
                        @elseif ($merchPreorder->status == "Cancelled")
                            text-red-500
                        @else
                            text-white
                        @endif
                    ">{{$merchPreorder->status}}</h1>
                </a>
            @endforeach
        </div>
    </div>

</body>

</html>
