<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body class="min-h-screen overflow-scroll bg-white text-black">
    <div class="w-full flex justify-center p-4">
        <a href="/merch/admin" class="text-white bg-black px-2 py-1 rounded">Back</a>
    </div>
    <div class="container w-full mx-auto px-2">
        <div class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
            <h1 class="font-taruno">Orders</h1>
            @if (session()->has('success'))
                <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
            @endif
            <table id="order_table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>WA</th>
                        <th>LINE</th>
                        <th>Items</th>
                        <th>Total Price</th>
                        <th>Bukti Transfer</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <?php $no = 1; ?>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->line }}</td>
                        <td>
                            @foreach ($order->orderDetails as $orderDetail)
                                <div class="flex flex-col p-1 bg-slate-300 rounded-md my-1">
                                    <p>Product: {{ $orderDetail->merch->name }}</p>
                                    <p>Qty: {{ $orderDetail->qty }}</p>
                                    <p>Variation: {{ $orderDetail->variation }}</p>
                                    <p>Price: {{ $orderDetail->total_price }}</p>
                                </div>
                            @endforeach
                        </td>

                        <td>{{ $order->cumulative_price }}</td>
                        <td>
                            <img class="w-[150px] h-full object-cover cursor-pointer"
                                src="{{ asset('storage/' . $order->payment_image) }}" alt="Flower"
                                onclick="showModalasset({{ 'storage/' . $order->payment_image }})" />
                            <div id="modal"
                                class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70  justify-center items-center">

                                <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold"
                                    href="javascript:void(0)" onclick="closeModal()">&times;</a>

                                <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" />
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col gap-2 font-semibold">
                                <p class="italic text-bold">Status: {{ $order->status }}</p>
                                <form action="/admin/orders/{{ $order->id }}/approve" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure you want to send order approval email?')"
                                        class="p-2 bg-lime-400 text-lime-900 rounded-xl hover:bg-lime-300">
                                        Approve
                                    </button>
                                </form>
                                <form action="/admin/orders/{{ $order->id }}/cancel" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <input type="text" placeholder="Reason" name="reason" class="bg-white text-black border border-1 border-black">
                                    <button type="submit" class="p-2 bg-red-700 text-red-950 rounded-xl hover:bg-red-500" onclick="return confirm('Are you sure you want to send order cancellation email?')">
                                        Cancel
                                    </button>
                                </form>
                                <form action="/admin/orders/{{ $order->id }}/suspend" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <input type="text" placeholder="Reason" name="reason" class="bg-white text-black border border-1 border-black">
                                    <button type="submit" class="p-2 bg-yellow-500 text-yellow-950 rounded-xl hover:bg-yellow-300" onclick="return confirm('Are you sure you want to send order suspension email?')">
                                        Suspend
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        var modal = document.getElementById("modal");

        var modalImg = document.getElementById("modal-img");

        function showModal(src) {
            modal.classList.remove('hidden');
            modalImg.src = src;
        }

        function closeModal() {
            modal.classList.add('hidden');
        }
    </script>
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#order_table').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>
