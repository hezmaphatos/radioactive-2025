<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-black min-h-screen">
    <div id="header" x-data="{ isOpen: false }"
        class="fixed navbar bg-[#0E0EC0] justify-center gap-16 z-40 transition-all duration-700">
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/">HOME</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/ticket">CLOSING
                    NIGHT</a>
                {{-- <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="#">MERCHANDISE</a> --}}
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a class="font-taruno text-black text-xs no-underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                            href="/">HOME</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/voc">VO
                            CHALLENGE</a>
                        <a class="font-taruno text-black text-xs underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/rac">RAC</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/ticket">CLOSING
                            NIGHT</a>
                        {{-- <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="#">MERCHANDISE</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="font-ltmuseumbold text-3xl md:text-4xl text-white flex justify-center text-center pt-20 mb-6">Confirmation
        Page
    </div>
    @if (session()->has('success'))
    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
    <div class="flex justify-center">
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded w-[400px]" role="alert">
            <p class="font-bold font-ltmuseumreg">Success</p>
            <p class="font-ltmuseumreg">Pendaftaran Berhasil, Terimakasih Revends!</p>
        </div>
    </div>
    @endif
    <div class="flex justify-center align-middle form-container">
        <div class="content-container px-4 py-4 flex flex-col w-[400px] max-w-[95vw] shadow-md shadow-[#D61625]">

            @if (session()->has('tim1_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 1</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim1_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim1_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 1</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim1_email') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim2_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 2</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim2_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim2_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 2</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim2_email') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim3_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 3</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim3_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim3_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 3</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim3_email') }}
                        </div>
                    </div>
                </div>
            @endif

            <p class="mx-2 my-2 font-ltmuseumreg">Screenshot layar ini dan silahkan melakukan konfirmasi pendaftaran ke CP RAC Radioactive 2023
                <br>
                <ul class="text-[#FFF000] mx-2 my-2">
                    <li class="font-ltmuseumreg">Line: yohanesriangto</li>
                    <li class="font-ltmuseumreg">Line: anastasyagloriawijay</li>
                </ul>
            </p>

            {{-- @if (session()->has('payment_proof'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="">Payment Proof</span>
                    </label>
                    <div>
                        <img src={{ asset('storage/' . $team->payment_proof) }}
                            style="width:100%;height:100%;object-fit:contain;" alt="">
                    </div>
                </div>
            @endif --}}
        </div>
    </div>
</body>

<style>
    .button-submit {
        transition: background-color 0.25s, transform 0.25s;
        border: 2px solid white;
    }

    .button-submit:hover {
        background-color: #FFF000;
        color: black;
        transform: scale(1.05);
    }

    .button-submit:active {
        background-color: white;
        color: black;
    }

    .content-container {
        background-color: rgb(45, 45, 45);
        color: white;
        border-radius: 3px;
        border: solid 3px white;
    }

    .form-input {
        background-color: black;
        border: 1.5px solid white;
    }
</style>

</html>
