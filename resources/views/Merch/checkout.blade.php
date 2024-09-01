{{-- isi form2 pas mau checkout --}}

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
    <h1>Order Merch</h1>
    @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
    @endif

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
            <tr class="@if ($cart->variation()->stock < $cart->quantity) bg-red-300 @endif">
                <td>{{ $no++ }}</td>
                <td>{{ $cart->merch->name }}</td>
                <td>
                    <form action="/cart/{{ $cart->id }}/updateqty" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <input type="number" name="quantity" min="0" value="{{ $cart->quantity }}"
                            class="bg-white text-black border border-1 border-black">
                        <button type="submit">Update</button>
                    </form>
                </td>
                <td>{{ $cart->variation }}</td>
                <td>{{ $cart->total_price }}</td>
                @if ($cart->variation()->stock < $cart->quantity)
                    <td>
                        Stock tidak cukup. Stock tersisa {{ $cart->variation()->stock }}
                    </td>
                @endif
            </tr>
            @php
                $cumulative_price += $cart->total_price;
            @endphp
        @endforeach
    </table>

    <br />

    <form action="/merch/checkout" method="POST" enctype="multipart/form-data" class="w-[500px] max-w-screen">
        @csrf
        <div class="mb-3 flex flex-col">
            <label for="name" class="">Nama</label>
            <input disabled type="text" name="name" id="name" placeholder="Iggy"
                class="bg-white text-black border border-black" value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="email" class="">Email</label>
            <input type="email" name="email" id="email" placeholder="iggy@gmail.com"
                class="bg-white text-black border border-black">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="phone" class="">Phone</label>
            <input type="number" name="phone" id="phone" placeholder="081710771077"
                class="bg-white text-black border border-black">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="line" class="">ID Line</label>
            <input type="text" name="line" id="line" placeholder="ID Line"
                class="bg-white text-black border border-black">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="cumulative_price" class="">Amount Owed</label>
            <input type="number" name="cumulative_price" id="cumulative_price" placeholder="xxxxxxx"
                value="{{ $cumulative_price }}" disabled>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="cumulative_price" class="">Upload Payment Proof</label>
            <p>Transfer to xxxx a/n xxxx xxxx in the right amount (Rp
                {{ number_format($cumulative_price, 0, ',', '.') }})</p>
            <input class="text-black" type="file" accept="image/*" name="payment_image" id="payment_image"
                onchange="previewImage()">
            <img src="" alt="" class="hidden img-preview h-80 ">
        </div>

        @if ($flag)
            <p>Kurangi jumlah atau hapus item untuk melanjutkan checkout</p>
        @else
            <button type="submit" class="text-red-800">GAS!</button>
        @endif
    </form>
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

</html>
