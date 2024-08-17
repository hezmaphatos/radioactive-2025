{{-- shopping cart dri session --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    <h1>Cart</h1>
    <a href="{{url('/merch')}}">Back to Merch</a>

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
            @foreach($carts as $cart)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$cart->merch->name}}</td>
                    <td>
                        <form action="/cart/{{$cart->id}}/updateqty" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <input type="number" name="quantity" min="0" value="{{$cart->quantity}}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{$cart->variation}}</td>
                    <td>{{$cart->total_price}}</td>
                    <td>
                        <form action="/cart/{{$cart->id}}/remove" method="POST" enctype="multipart/form-data">
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
                    <a href="{{url('/merch/checkoutdetails')}}">Checkout</a>
                </td>
            </tr>
        </table>
    @endif
</body>
</html>