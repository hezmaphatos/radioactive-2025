@extends('layouts.main')

@section('container')

<body class="text-white">
    <div class="grid lg:gap-20 md:gap-20 pt-32">
        <div class="grid justify-center font-ltmuseum-reg">
            <div class="flex gap-20 mb-10 flex-wrap justify-center">
                <div id="indicators-carousel"
                    class="relative w-[315px] h-[360px] md:w-[350px] md:h-[400px] justify-center"
                    data-carousel="static">
                    <div class="m-auto relative overflow-hidden w-5/6 h-full rounded-lg border-[1px] border-white">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('storage/' . $merch->image) }}"
                                class="absolute block w-full h-full object-fill">
                        </div>
                        @foreach ($merch->images as $picture)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('storage/' . $picture->image) }}"
                                    class="absolute block w-full h-full object-fill">
                            </div>
                        @endforeach
                    </div>
                    <button type="button"
                        class="absolute top-0 left-5 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60">
                            <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-5 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60 ">
                            <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>

                    <div class="z-30 flex gap-4 overflow-hidden justify-center mt-[20px]">
                        <img type="button" class="w-[50px] h-[70px] border-[1px] border-white" aria-current="true"
                            aria-label="Image" data-carousel-slide-to="0"
                            src="{{ asset('storage/' . $merch->image) }}" />

                        @php
                            $count = 1;
                        @endphp
                        @foreach ($merch->images as $picture)
                            <img type="button"
                                class="w-[50px] h-[70px] border-[1px] border-white hover:cursor-pointer"
                                aria-current="true" aria-label="{{ $picture->description }}"
                                data-carousel-slide-to="{{ $count }}"
                                src="{{ asset('storage/' . $picture->image) }}" />
                            @php
                                $count++;
                            @endphp
                        @endforeach
                    </div>
                </div>

                <div class="pl-2 md:pl-0">
                    <div class="mt-5 md:mt-auto">
                        <p class="mt-10 md:mt-auto font-brodyrawk text-[#ff0015] text-5xl">{{ $merch->name }}</p>
                    </div>
                    <p class="mt-1 font-ltmuseum-bold text-white text-3xl">Rp
                        {{ number_format($merch->price, 0, ',', '.') }}
                    </p>
                    <div id="indicators-carousel" class="relative" data-carousel="static">
                        <div class="z-30 inline-flex gap-4 h-3 overflow-hidden justify-center mt-[20px]">
                            <div type="button"
                                class="h-[2px] w-[95px] cursor-pointer no-underline text-white font-brodyrawk text-[15px] text-center"
                                aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"
                                class="relative">
                                <p class="absolute top-1">Description</p>
                            </div>
                            <div type="button"
                                class="h-[2px] w-[75px] cursor-pointer no-underline text-white font-brodyrawk text-[15px] text-center"
                                data-carousel-slide-to="1" class="relative">
                                <p class="absolute top-1">Shipping</p>
                            </div>

                        </div>
                        <div class="relative w-full h-[100px] overflow-hidden">
                            <div class="hidden duration-700 ease-in-out overflow-y-scroll" data-carousel-item="">
                                <p>{!! $merch->description !!}</p>
                            </div>
                            <div class="hidden duration-700 ease-in-out w-full" data-carousel-item>
                                <ul class="list-disc ml-[17px]">
                                    <li class="text-white text-[15px]">Pesanan diproses kurang lebih 7 hari setelah
                                        order
                                        dikonfirmasi</li>
                                    <li class="text-white text-[15px]">Pesanan melalui website HANYA berlaku untuk
                                        pengambilan di UMN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        @if ($merch->total_stock() > 0)
                            <form action="/merch/cart/add" enctype="multipart/form-data" method="POST"
                                class="">
                                @csrf
                                <h1>Order Now</h1>
                                <div class="flex flex-wrap gap-4">
                                    <div class="my-2 w-2/5">
                                        <p>Size</p>
                                        <select name="variation" id="variation_select" required
                                            class="w-full bg-gray-900 border-2 border-[#d61525] text-white px-2 py-1 rounded">
                                            <option disabled selected value> select variant</option>
                                            @foreach ($merch->merchvariations as $merchvariation)
                                                <option value="{{ $merchvariation->description }}"
                                                    data-stock="{{ $merchvariation->stock }}">
                                                    {{ $merchvariation->description }} (Stock:
                                                    {{ $merchvariation->stock }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="my-2 w-1/5">
                                        <p>Quantity</p>
                                        <input name="quantity" id="quantity_input" min="1" value="1"
                                            type="number" required
                                            class="w-full bg-gray-900 border-2 border-[#d61525] text-white px-2 py-1 rounded">
                                    </div>
                                </div>
                                <input hidden type="text" name="merch_id" value="{{ $merch->id }}">
                                <button type="submit"
                                    class="text-white border-2 bg-[#d61525] border-white rounded px-2 py-1 hover:bg-red-500 font-ltmuseum-bold my-1">
                                    Add to Cart
                                </button>
                            </form>
                        @else
                            <form action="/merch/cart/addpreorder" enctype="multipart/form-data" method="POST"
                                class="">
                                @csrf
                                <h1>Preorder</h1>
                                <div class="flex flex-wrap gap-4">
                                    <div class="my-2 w-2/5">
                                        <p>Size</p>
                                        <select name="variation" required
                                            class="w-full bg-gray-900 border-2 border-[#d61525] text-white px-2 py-1 rounded">
                                            <option disabled selected value> select variant</option>
                                            @foreach ($merch->merchvariations as $merchvariation)
                                                <option value="{{ $merchvariation->description }}">
                                                    {{ $merchvariation->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="my-2 w-1/5">
                                        <p>Quantity</p>
                                        <input name="quantity"min="1" value="1"
                                            type="number" required
                                            class="w-full bg-gray-900 border-2 border-[#d61525] text-white px-2 py-1 rounded">
                                    </div>
                                </div>
                                <input hidden type="text" name="merch_id" value="{{ $merch->id }}">
                                <button type="submit"
                                    class="text-white border-2 bg-[#d61525] border-white rounded px-2 py-1 hover:bg-red-500 font-ltmuseum-bold my-1">
                                    Add to Preorder Cart
                                </button>
                            </form>
                        @endif

                        <script>
                            document.getElementById('variation_select').addEventListener('change', function() {
                                const selectedOption = this.options[this.selectedIndex];
                                const stock = selectedOption.getAttribute('data-stock');

                                const quantityInput = document.getElementById('quantity_input');
                                quantityInput.max = stock;
                                quantityInput.value = Math.min(quantityInput.value, stock); // Adjust current value if needed
                            });
                        </script>

                        <div class="w-full mt-2">
                            @if ($links->count() > 0)
                                <h1>Other Options</h1>
                            @endif
                            @foreach ($links as $link)
                                <a href="{{ $link->link }}" target="_blank">
                                    <button
                                        class="min-w-[100px] text-white border-2 my-1
                                        @if (strtolower($link->type) == 'tokopedia') bg-green-500 
                                            hover:bg-green-400
                                        @elseif (strtolower($link->type) == 'shopee')
                                            bg-orange-600 
                                            hover:bg-orange-400
                                        @elseif (strtolower($link->type) == 'tiktok')
                                            bg-gray-900 
                                            hover:bg-gray-700
                                        @else
                                        bg-[#d61525] 
                                        hover:bg-red-500 @endif
                                        border-white rounded px-2 py-1 font-ltmuseum-bold">
                                        {{ $link->title }}
                                    </button>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full align-middle mt-16">
        <div class="px-6 text-left">
            <h2 class="font-brodyrawk text-white">NOTES</h2>
            <ul class="list-disc ml-[17px] font-ltmuseum-reg">
                <li class="text-white text-[15px]">TIDAK MENERIMA SEGALA JENIS BENTUK PENUKARAN TERMASUK
                    PENUKARAN MODEL, WARNA, DAN SIZE
                </li>
                <li class="text-white text-[15px]">TIDAK MENERIMA PENGEMBALIAN DANA ATAS PESANAN YANG
                    TELAH DILAKUKAN</li>
                <li class="text-white text-[15px]">BARANG YANG SUDAH DITERIMA TIDAK DAPAT DITUKARKAN
                    KEMBALI
                </li>
            </ul>
        </div>
    </div>


    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
        const Input = document.getElementById("qty");

        function button(btn) {
            let id = btn.getAttribute("id");
            let min = Input.getAttribute("min");
            let step = Input.getAttribute("step");
            let val = Input.getAttribute("value");


            let calcStep = (id == "increment") ? (step * 1) : (step * -1);
            let newValue = parseInt(val) + calcStep;

            if (newValue >= min) {
                Input.setAttribute("value", newValue);
                console(newValue);
            }
        }



        const turbulentRadio = document.getElementById('tee');
        const celestialRadio = document.getElementById('tee1');
        const turbsize = document.getElementById('turbsize');
        const celessize = document.getElementById('celessize');
        const judul = document.getElementById('judul');
        const isSelected = {
            value: false
        };

        turbulentRadio.addEventListener('change', function() {
            if (this.checked) {
                isSelected.value = true;
            }
            sizechanges()
        });

        celestialRadio.addEventListener('change', function() {
            if (this.checked) {
                isSelected.value = false;
            }
            sizechanges();
        });

        function sizechanges() {
            judul.classList.remove('hidden');
            judul.classList.add('block');
            if (isSelected.value === true) {
                turbsize.classList.remove('hidden');
                turbsize.classList.add('block');
                celessize.classList.remove('block');
                celessize.classList.add('hidden');
            } else {
                turbsize.classList.remove('block');
                turbsize.classList.add('hidden');
                celessize.classList.add('block');
                celessize.classList.remove('hidden');
            }
            console.log('aaaa:', isSelected.value);
        };
    </script>
</body>

@endsection