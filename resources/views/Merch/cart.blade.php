@extends('layouts.main')

@section('container')

    <body class="bg-black min-h-screen text-black">
        <div class="pt-20 text-white font-ltmuseumreg flex flex-wrap justify-center min-h-screen">
            <div>
                <a href="{{ url('/merch') }}">Back to Merch</a>
                <h1 class="w-full text-center font-ltmuseum-bold">Cart</h1>
                @if (empty($carts))
                    <p>Cart is empty</p>
                @else
                    <table border="1" cellpadding="10">
                        <tr>
                            <th>No</th>
                            <th>Merch</th>
                            <th>Quantity</th>
                            <th>Variation</th>
                            <th>Total Price</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($carts as $cart)
                            <tr class="@if ($cart->variation()->stock < $cart->quantity) bg-red-300 @endif">
                                <td>{{ $no++ }}</td>
                                <td>{{ $cart->merch->name }}</td>
                                <td>
                                    <form action="/cart/{{ $cart->id }}/updateqty" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="number" name="quantity" min="0"
                                            max="{{ $cart->variation()->stock }}" value="{{ $cart->quantity }}"
                                            class="bg-white text-black">
                                        <button type="submit">Update</button>
                                    </form>
                                </td>
                                <td>{{ $cart->variation }}</td>
                                <td>{{ $cart->total_price }}</td>
                                <td>
                                    <form action="/cart/{{ $cart->id }}/remove" method="POST"
                                        enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf
                                        <button>Remove</button>
                                    </form>
                                </td>
                                @if ($cart->variation()->stock < $cart->quantity)
                                    <td>
                                        Stock tidak cukup. Stock tersisa {{ $cart->variation()->stock }}
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5"></td>
                            <td>
                                @if ($flag)
                                    <p>Kurangi jumlah atau hapus item untuk melanjutkan checkout</p>
                                @else
                                    <a href="{{ url('/merch/checkoutdetails') }}">Checkout</a>
                                @endif
                            </td>
                        </tr>
                    </table>
                @endif

                <h1 class="w-full text-center font-ltmuseum-bold">Preorder Cart</h1>
                @if (empty($preorderCarts))
                    <p>Preorder Cart is empty</p>
                @else
                    <table border="1" cellpadding="10">
                        <tr>
                            <th>No</th>
                            <th>Merch</th>
                            <th>Quantity</th>
                            <th>Variation</th>
                            <th>Total Price</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($preorderCarts as $cart)
                            <tr class="">
                                <td>{{ $no++ }}</td>
                                <td>{{ $cart->merch->name }}</td>
                                <td>
                                    <form action="/cart/{{ $cart->id }}/updatepreorderqty"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="number" name="quantity" min="0" value="{{ $cart->quantity }}"
                                            class="bg-white text-black">
                                        <button type="submit">Update</button>
                                    </form>
                                </td>
                                <td>{{ $cart->variation }}</td>
                                <td>{{ $cart->total_price }}</td>
                                <td>
                                    <form action="/cart/{{ $cart->id }}/removepreorder" method="POST"
                                        enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf
                                        <button>Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5"></td>
                            <td>
                                <a href="{{ url('/merch/preorderdetails') }}">Checkout</a>
                            </td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </body>
@endsection
