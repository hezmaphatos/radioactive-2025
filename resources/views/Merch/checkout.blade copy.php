{{-- isi form2 pas mau checkout --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @vite('resources/css/app.css')
    <title>List Merch</title>
</head>

<body class="bg-black h-full md:h-screen">

    <div class="max-w-xs md:max-w-3xl mx-auto py-8">

        <div class=" text-white">
            <form action="/order" enctype="multipart/form-data" method="post"
                class="flex flex-col md:flex-row items-center md:items-stretch gap-3">
                <div
                    class="text-center w-full md:w-1/2 form-content shadow-md px-0 md:px-8 py-3 mb-3 md:mb-10 font-pathway shadow-[#FFF000]">
                    <h2 class="font-taruno">Detail Transaksi</h2>
                    <table border="1" class="hidden md:contents text-left font-pathway text-sm" cellpadding="8">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        <?php
                        $no = 1;
                        $total_price = 0;
                        $grand_total = 0;
                        ?>
                        @foreach ($cart as $obj)
                        <tr>
                            <td>{{ $no++ }}</td>
                            @foreach ($merches as $merch)
                                @if ($merch->id == $obj->merch_id)
                                    <td>{{ $merch->name }}</td>
                                @endif
                            @endforeach

                            <td>{{ $obj->size }}</td>
                            <td>{{ $obj->qty }}</td>

                            @foreach ($merches as $merch)
                                @if ($merch->id == $obj->merch_id)
                                    <?php $total_price = $obj->qty * $merch->price; ?>
                                    <td>{{ number_format($total_price, 0, ',', '.') }}</td>
                                @endif
                            @endforeach
                        </tr>
                            <?php $grand_total += $total_price; ?>
                        @endforeach
                        <tr>
                            <td colspan="3">Total</td>
                            <td>{{ number_format($grand_total, 0, ',', '.') }}</td>
                        </tr>
                    </table>

                    <table border="1" class="contents md:hidden text-left font-pathway text-sm" cellpadding="10">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Total Price</th>
                        </tr>
                        <?php
                        $no = 1;
                        $total_price = 0;
                        $grand_total = 0;
                        ?>
                        @foreach ($cart as $obj)
                            <tr>
                                <td>{{ $no++ }}</td>
                                @foreach ($merches as $merch)
                                    @if ($merch->id == $obj->merch_id)
                                        <td>{{ $merch->name }}</td>
                                    @endif
                                @endforeach

                                <td>{{ $obj->size }}</td>
                                <td>{{ $obj->qty }}</td>

                                @foreach ($merches as $merch)
                                    @if ($merch->id == $obj->merch_id)
                                        <?php $total_price = $obj->qty * $merch->price; ?>
                                        <td>{{ number_format($total_price, 0, ',', '.') }}</td>
                                    @endif
                                @endforeach
                            </tr>
                            <?php $grand_total += $total_price; ?>
                        @endforeach
                        <tr>
                            <td colspan="3">Total</td>
                            <td>{{ number_format($grand_total, 0, ',', '.') }}</td>
                        </tr>
                    </table>
                    @csrf
                </div>
                <div
                    class="flex flex-col w-full md:w-1/2 form-content shadow-md px-8 py-3 mb-3 md:mb-10 font-pathway shadow-[#FFF000]">
                    <div class="flex w-full justify-center">
                        <h2 class="font-taruno">Data Pribadi</h2>
                    </div>
                    @if (session()->has('success'))
                        <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                    @endif

                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Nomor Telepon</label>
                            </div>
                            <div>
                                <input required
                                    class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline text-white bg-black"
                                    type="text" placeholder="nomor telepon" name="wa">

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">ID Line</label>
                            </div>
                            <div>
                                <input required
                                    class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline text-white bg-black"
                                    type="text" placeholder="id line" name="line">

                            </div>
                        </div>
                    </div>
                </div>
                <input class="hidden" name="total_price" value="{{ $grand_total }}" />
        </div>
        <div class="form-content shadow-md px-8 py-3 mb-4 font-pathway shadow-[#FFF000] text-white">
            <div class="">
                <div>
                    <label class="block font-taruno text-center text-md md:text-lg text- form-label text-sm mb-0"
                        for="">Bukti Pembayaran</label>
                </div>
                <div>
                    <h6 class="text-sm font-pathway">Pembayaran sebesar Rp {{ $grand_total }},~ ke 8831917474 a/n
                        Raudhah Salsabila Surbakti</h6 class="text-sm">
                </div>
                <div>
                    <input required
                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="image/*" name="payment_proof">
                    @error('payment_proof')
                    @enderror
                </div>
            </div>
            <div class="">
                <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                    type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                    Send
                </button>
            </div>

        </div>
        </form>
        <a class="text-[.8rem] hover:text-[#3838ff] no-underline text-white" href="{{ url('/cart') }}">Back to
            cart</a>
</body>

</html>
