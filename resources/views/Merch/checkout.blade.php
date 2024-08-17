{{-- isi form2 pas mau checkout --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Merch</title>
</head>

<body>
    <h1>Order Merch</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Merch</th>
            <th>Quantity</th>
            <th>Variation</th>
            <th>Total Price</th>
        </tr>
        <?php
        $no = 1;
        $cumulative_price = 0;
        ?>
        @foreach ($carts as $cart)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $cart->merch->name }}</td>
                <td>
                    <form action="/cart/{{ $cart->id }}/updateqty" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <input type="number" name="quantity" min="0" value="{{ $cart->quantity }}">
                        <button type="submit">Update</button>
                    </form>
                </td>
                <td>{{ $cart->variation }}</td>
                <td>{{ $cart->total_price }}</td>
            </tr>
            @php
                $cumulative_price += $cart->total_price;
            @endphp
        @endforeach
    </table>

    <br />

    <form action="/merch/checkout" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 flex flex-col">
            <label for="name" class="">Nama</label>
            <input disabled type="text" name="name" id="name" placeholder="Iggy"
                value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="email" class="">Email</label>
            <input type="email" name="email" id="email" placeholder="iggy@gmail.com">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="phone" class="">Phone</label>
            <input type="number" name="phone" id="phone" placeholder="081710771077">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="line" class="">ID Line</label>
            <input type="text" name="line" id="line" placeholder="ID Line">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="cumulative_price" class="">Amount Owed</label>
            <input type="number" name="cumulative_price" id="cumulative_price" placeholder="xxxxxxx"
                value="{{ $cumulative_price }}" disabled>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="cumulative_price" class="">Upload Payment Proof</label>
            <p>Transfer to xxxx a/n xxxx xxxx in the right amount ({{ $cumulative_price }})</p>
            <input class=""
                type="file" accept="image/*" name="payment_image" id="payment_image" onchange="previewImage()">
            <img src="" alt="" class="img-preview h-80 hidden">
        </div>

        <button type="submit" class="text-red-800">GAS!</button>
    </form>
</body>

<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

</html>
