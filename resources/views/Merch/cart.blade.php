{{-- shopping cart dri session --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radioactive UMN</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white min-h-screen text-black">
    <a href="{{ url('/merch') }}">Back to Merch</a>
    <h1>Cart</h1>
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
                        <form action="/cart/{{ $cart->id }}/updateqty" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <input type="number" name="quantity" min="0" max="{{$cart->variation()->stock}}" value="{{ $cart->quantity }}" class="bg-white text-black">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{ $cart->variation }}</td>
                    <td>{{ $cart->total_price }}</td>
                    <td>
                        <form action="/cart/{{ $cart->id }}/remove" method="POST" enctype="multipart/form-data">
                            @method('delete')
                            @csrf
                            <button>Remove</button>
                        </form>
                    </td>
                    @if ($cart->variation()->stock < $cart->quantity)
                        <td>
                            Stock tidak cukup. Stock tersisa {{$cart->variation()->stock}}
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

    <h1>Preorder Cart</h1>
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
                        <form action="/cart/{{ $cart->id }}/updatepreorderqty" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <input type="number" name="quantity" min="0" value="{{ $cart->quantity }}" class="bg-white text-black">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{ $cart->variation }}</td>
                    <td>{{ $cart->total_price }}</td>
                    <td>
                        <form action="/cart/{{ $cart->id }}/removepreorder" method="POST" enctype="multipart/form-data">
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
</body>

</html>
