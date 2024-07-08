<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    {{-- <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script> --}}
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023 | Receipt</title>
</head>

<body class="antialiased bg-black min-h-screen">
    <div id="header" x-data="{ isOpen: false }"
        class="fixed navbar bg-[#0E0EC0] justify-center  z-40 transition-all duration-700">
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
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
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
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/rac">RAC</a>
                        <a class="font-taruno text-black text-xs underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/ticket">CLOSING
                            NIGHT</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-sm md:max-w-md mx-auto md:py-40 pt-20">
        <div
            class="bg-[#333333] text-white flex flex-col items-center  px-8 shadow-[#FFF000] border-white border-[3px]">
            <h2 class="font-taruno pt-10">Receipt</h2>
            <div class="mb-1 flex flex-col font-pathway text-sm w-full">
                <label for="name" class="">Nama</label>
                <input class="focus:outline-none focus:shadow-outline bg-black" type="text" name="name"
                    id="name" value={{ $order->name }} disabled>
            </div>
            <div class="mb-1 flex flex-col font-pathway text-sm w-full">
                <label for="name" class="">Email</label>
                <input class="focus:outline-none focus:shadow-outline bg-black" type="text" name="name"
                    id="name" value={{ $order->email }} disabled>
            </div>
            <div class="mb-1 flex flex-col font-pathway text-sm w-full">
                <label for="name" class="">Phone</label>
                <input class="focus:outline-none focus:shadow-outline bg-black" type="text" name="name"
                    id="name" value={{ $order->phone }} disabled>
            </div>
            <div class="mb-1 flex flex-col font-pathway text-sm w-full">
                <label for="name" class="">Quantity</label>
                <input class="focus:outline-none focus:shadow-outline bg-black" type="text" name="name"
                    id="name" value={{ $order->qty }} disabled>
            </div>
            <button type="submit" id="pay-button"
                class="button-submit font-taruno text-white bg-red-700 w-full text-sm px-5 py-1 my-6" disabled>Status :
                {{ $order->status }}</button>
            <div class="mb-4 flex flex-col font-pathway text-sm w-full">
                <label for="" class="">Please check your email for your tickets. If you haven't received an email in an hour or if you have entered the wrong email feel free to contact us via Instagram <strong>@umnradioactive</strong></label>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

</body>

</html>
