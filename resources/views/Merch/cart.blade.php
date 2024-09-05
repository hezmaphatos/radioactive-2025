@extends('layouts.main')

@section('container')

    <head>
        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    </head>

    <body class="min-h-screen text-black">
        <div class="pt-20 font-ltmuseumreg flex flex-wrap justify-center min-h-screen">
            <a class="text-white bg-red-600 border-white border-1 px-2 py-1 no-underline rounded-md" href="{{ url('/merch') }}">Back to Merch</a>
            <h1 class="w-full text-center font-ltmuseum-bold text-white">Cart</h1>
            @if (empty($carts))
                <p>Cart is empty</p>
            @endif
            <div class="container w-full mx-auto px-2">
                <div id="table_container" class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="orders_table" class="stripe-hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="0">No</th>
                                <th data-priority="1">Merch</th>
                                <th data-priority="2">Quantity</th>
                                <th data-priority="3">Variation</th>
                                <th data-priority="4">Total Price</th>
                                <th data-priority="5">Actions</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>

                        <tbody>
                            @foreach ($carts as $cart)
                                <tr class="@if ($cart->variation()->stock < $cart->quantity) text-red-800 @endif">
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $no++ }}</div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->merch->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">
                                            <form action="/cart/{{ $cart->id }}/updateqty" enctype="multipart/form-data"
                                                method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="number" name="quantity" min="0"
                                                    max="{{ $cart->variation()->stock }}" value="{{ $cart->quantity }}"
                                                    class="bg-white text-black">
                                                <button type="submit" class="text-yellow-800 font-bold">Update</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->variation }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->total_price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex flex-wrap justify-center items-center align-middle">
                                            <form action="/cart/{{ $cart->id }}/remove" method="POST"
                                                enctype="multipart/form-data">
                                                @method('delete')
                                                @csrf
                                                <button class="text-white bg-red-600 px-2 rounded-md ">Remove</button>
                                            </form>
                                            @if ($cart->variation()->stock < $cart->quantity)
                                                <p>Stock tidak cukup. Stock tersisa {{ $cart->variation()->stock }}</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    @if ($flag)
                        <p class="text-red-500">Kurangi jumlah atau hapus item untuk melanjutkan checkout</p>
                    @else
                        <a class="text-white bg-red-600 border-white border-1 px-2 py-1 no-underline rounded-md" href="{{ url('/merch/checkoutdetails') }}">Checkout</a>
                    @endif
                </div>
            </div>

            <h1 class="w-full text-center font-ltmuseum-bold text-white">Preorder Cart</h1>
            @if (empty($preorderCarts))
                <p>Preorder Cart is empty</p>
            @endif
            <div class="container w-full mx-auto px-2">
                <div id="table_container" class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="preorders_table" class="stripe-hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="0">No</th>
                                <th data-priority="1">Merch</th>
                                <th data-priority="2">Quantity</th>
                                <th data-priority="3">Variation</th>
                                <th data-priority="4">Total Price</th>
                                <th data-priority="5">Actions</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>

                        <tbody>
                            @foreach ($preorderCarts as $cart)
                                <tr class="@if ($cart->variation()->stock < $cart->quantity) bg-red-300 @endif">
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $no++ }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->merch->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">
                                            <form action="/cart/{{ $cart->id }}/updateqty"
                                                enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('put')
                                                <input type="number" name="quantity" min="0"
                                                    max="{{ $cart->variation()->stock }}" value="{{ $cart->quantity }}"
                                                    class="bg-white text-black">
                                                <button type="submit" class="text-yellow-800 font-bold">Update</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->variation }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex justify-center items-center align-middle">{{ $cart->total_price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex flex-wrap justify-center items-center align-middle">
                                            <form action="/cart/{{ $cart->id }}/remove" method="POST"
                                                enctype="multipart/form-data">
                                                @method('delete')
                                                @csrf
                                                <button class="text-white bg-red-600 px-2 rounded-md ">Remove</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="text-white bg-red-600 border-white border-1 px-2 py-1 no-underline rounded-md" href="{{ url('/merch/preorderdetails') }}">Checkout</a>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#orders_table').DataTable({
                        responsive: true,
                        autoWidth: false,
                        columnDefs: [{
                                width: '20px',
                                targets: 0
                            },
                            {
                                width: '100px',
                                targets: 1
                            },
                            {
                                width: '100px',
                                targets: 2
                            },
                            {
                                width: '50px',
                                targets: 3
                            },
                            {
                                width: '100px',
                                targets: 4
                            },
                            {
                                width: '100px',
                                targets: 5
                            }
                        ]
                    })
                    .columns.adjust()
                    .responsive.recalc();
                var table2 = $('#preorders_table').DataTable({
                        responsive: true,
                        autoWidth: false,
                        columnDefs: [{
                                width: '20px',
                                targets: 0
                            },
                            {
                                width: '100px',
                                targets: 1
                            },
                            {
                                width: '100px',
                                targets: 2
                            },
                            {
                                width: '50px',
                                targets: 3
                            },
                            {
                                width: '100px',
                                targets: 4
                            },
                            {
                                width: '100px',
                                targets: 5
                            }
                        ]
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>
    </body>
@endsection
