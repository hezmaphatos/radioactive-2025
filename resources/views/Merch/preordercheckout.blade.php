{{-- isi form2 pas mau checkout --}}

@extends('layouts.main')

@section('container')

    <head>
        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    </head>

    <body class="min-h-screen text-black">
        <div class="pt-20 font-ltmuseumreg flex flex-wrap justify-center ">
            @if ($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
            @endif
            <a class="text-white bg-red-600 border-white border-1 px-2 py-1 no-underline rounded-md"
                href="{{ url('/merch') }}">Back to Merch</a>
            <h1 class="w-full text-center font-ltmuseum-bold text-white">Preorder Merch</h1>
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
                        <?php $no = 1;
                        $cumulative_price = 0; ?>

                        <tbody>
                            @foreach ($carts as $cart)
                                <tr class="">
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
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                @php
                                    $cumulative_price += $cart->total_price;
                                @endphp
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <br />

        <div class="w-full flex justify-center">
            <form action="/merch/preordercheckout" method="POST" enctype="multipart/form-data"
                class="w-[500px] max-w-screen font-ltmuseumreg">
                @csrf
                <div class="mb-3 flex flex-col">
                    <label for="name" class="text-white">Nama</label>
                    <input disabled type="text" name="name" id="name" placeholder="Iggy"
                        class="bg-white text-black border border-black" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                        placeholder="iggy@gmail.com" class="bg-white text-black border border-black">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone" class="text-white">Phone</label>
                    <input type="number" name="phone" id="phone" placeholder="081710771077"
                        class="bg-white text-black border border-black">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="line" class="text-white">ID Line</label>
                    <input type="text" name="line" id="line" placeholder="ID Line"
                        class="bg-white text-black border border-black">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="cumulative_price" class="text-white">Amount Owed</label>
                    <input type="number" name="cumulative_price" id="cumulative_price" placeholder="xxxxxxx"
                        value="{{ $cumulative_price }}" disabled>
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="cumulative_price" class="text-white">Upload Payment Proof</label>
                        <p class="text-white">Transfer to BCA <text class="text-blue-500">6600448160</text> a/n Helena Hanna Haryadi in the right amount (Rp
                        {{ number_format($cumulative_price, 0, ',', '.') }}) add information <text class="text-red-500">(Nama Merch/Bundle)-(Quantity)</text></p>         
                    <input class="text-white" type="file" accept="image/*" name="payment_image" id="payment_image"
                        onchange="previewImage()">
                    <img src="" alt="" class="hidden img-preview h-80 ">
                </div>
                <button type="submit" class="bg-red-600 text-white rounded-md px-2 py-1">GAS!</button>
            </form>
        </div>
    </body>

    <script>
        function previewImage() {
            const image = document.querySelector('#payment_image')
            const imgPreview = document.querySelector(".img-preview")

            imgPreview.style.display = 'block'
            const oFReader = new FileReader()

            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
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
@endsection
