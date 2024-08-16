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
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a>
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
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="font-ltmuseumbold text-3xl md:text-4xl text-white flex justify-center text-center pt-20 mb-6">RAC Registration</div>
    <div class="flex justify-center align-middle form-container">
        <div class="content-container px-4 py-4 flex flex-col w-[400px] shadow-md shadow-[#D61625] max-w-[95vw] ">
            @if (session()->has('success'))
                <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
            @endif
            @if ($rac_teams->count() > 0)

                @php
                    $count = $rac_teams->count();
                @endphp

                @foreach ($rac_teams as $team)
                    @if (
                        $team->tim3_institusi &&
                            $team->tim3_penyiar1 &&
                            $team->tim3_penyiar2 &&
                            $team->tim3_operator &&
                            $team->tim3_contact_wa)
                        @php
                            $count += 2;
                        @endphp
                    @elseif(
                        $team->tim2_institusi &&
                            $team->tim2_penyiar1 &&
                            $team->tim2_penyiar2 &&
                            $team->tim2_operator &&
                            $team->tim2_contact_wa)
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach

                <h2 class="w-full text-center font-ltmuseumreg text-white hidden">Remaining Slots: {{ 20 - $count }}</h2>
                <h2 class="w-full text-center font-ltmuseumreg text-white text-xl py-2">Select Number Of Teams To Be Registered</h2>

                @if ($count >= 20)
                    <h2 class="w-full text-center font-taruno">Kuota Tim Habis</h2>
                @elseif ($count >= 19)
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                @elseif($count >= 18)
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/rac/form/2">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Dua Tim
                        </button>
                    </a>
                @else
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/rac/form/2">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Dua Tim
                        </button>
                    </a>
                    <a href="/rac/form/3">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Tiga Tim
                        </button>
                    </a>
                @endif
            @else
                <a href="/rac/form/1">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Satu Tim
                    </button>
                </a>
                <a href="/rac/form/2">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Dua Tim
                    </button>
                </a>
                <a href="/rac/form/3">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Tiga Tim
                    </button>
                </a>
            @endif
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
</style>

</html>
