@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden bg-black h-full">
    {{-- <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}

    <div class="pt-16">
        <img class="w-full h-48 md:h-80 object-cover" src="/images/FOTO CLOSING NIGHT.webp" alt="" />
    </div>
    <div class="-mb-20 lg:-mb-0 lg:my-16" data-aos="fade-up">
        <h2 id="title" class="font-taruno2 text-white text-center my-12">CLOSING NIGHT</h2>
        <div id="description" class="px-8 md:px-20 lg:px-80" data-aos="fade-up">
            <p class="font-pathway text-sm text-white text-justify md:text-center">Closing Night merupakan puncak dan
                penutup dari rangkaian acara RADIOACTIVE 2023 yang akan dilaksanakan secara offline. Kegiatan ini
                bertujuan untuk meningkatkan awareness dan engagement RADIOACTIVE sebagai acara tahunan dari UMN Radio.
            </p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center">Konsep Closing Night tahun ini adalah
                'Neo World', yang memiliki makna dunia baru. Melalui konsep ini, kami akan mengajak peserta untuk berani
                melakukan revolusi serta keluar dari zona nyaman mereka untuk masuk ke dunia yang baru. Musisi lokal
                juga akan hadir memeriahkan acara RADIOACTIVE 2023.</p>
        </div>
        <div id="button1" class="flex justify-center items-center mt-16" data-aos="fade-up">
            <a href="#ticket" class="no-underline">
                <button
                    class="bg-[#0E0EC0] text-white border-white p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                    GET YOUR TICKETS HERE
                </button>
            </a>
        </div>
        <div id="gueststar" class="flex flex-col justify-center items-center my-16">
            <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-8" data-aos="fade-up">GUEST STARS
            </h4>
            <div id="mainGS" class="flex flex-col mb-12 relative" data-aos="fade-up">
                <img class="h-72 w-96 md:h-[400px] md:w-[500px] object-cover" src="/images/FOTO GS LOMBA SIHIR.webp"
                    alt="" />
                <h4 class="font-taruno text-xl text-white text-center font-bold">LOMBA SIHIR</h4>
            </div>
            <div id="mdGS" class="flex flex-col md:flex-row flex-wrap justify-center gap-12 mt-8">
                <div class="flex flex-col" data-aos="fade-up">
                    <img class="h-64 w-72 md:h-72 md:w-80 object-cover" src="/images/FOTO GS karaokemon.webp"
                        alt="" />
                    <h4 class="font-taruno text-white text-center font-bold">KARAOKEMON</h4>
                </div>
                <div class="flex flex-col" data-aos="fade-up">
                    <img class="h-64 w-72 md:h-72 md:w-80 object-cover" src="/images/FOTO GS 90HP.webp"
                        alt="" />
                    <h4 class="font-taruno text-white text-center font-bold">90hp</h4>
                </div>
            </div>
            <div id="smGS" class="grid grid-cols-2 gap-4 justify-center md:gap-12 mt-16 mx-2">
                <div class="flex flex-col" data-aos="fade-up">
                    <div class="flex justify-center">
                        <img class="h-56 w-64 md:h-64 md:w-72 object-cover" src="/images/FOTO GS liberal mistik.webp"
                        alt="" />
                    </div>
                    <h4 class="font-taruno text-white text-center font-bold">LIBERAL MISTEIK</h4>
                </div>
                <div class="flex flex-col" data-aos="fade-up">
                    <div class="flex justify-center">
                        <img class="h-56 w-64 md:h-64 md:w-72 object-cover" src="/images/FOTO GS the laidback horses.webp"
                        alt="" />
                    </div>
                    <h4 class="font-taruno text-white text-center font-bold">THE LAIDBACK HORSES</h4>
                </div>
            </div>
        </div>
        <div id="ticket" class="flex flex-col justify-center items-center mt-16">
            <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-16" data-aos="fade-up">GET YOUR
                TICKETS</h4>
            <div id="ticketType" class="flex flex-col md:flex-row gap-4 md:gap-24">
                <div id="ticket1" class="w-72 relative" data-aos="fade-up">
                    <img id="ticketblue1" class="" src="/images/TICKET-BLUE.webp" alt="" />
                    <img id="ticketblack1" class="hidden" src="/images/TICKET-BLACK.webp" alt="" />
                    <div class="absolute top-0 bottom-0 left-0 right-0">
                        <h4 class="font-taruno2 text-2xl text-white text-center mt-12">EARLY <br> BIRD</h4>
                        <p class="font-pathway text-md text-white text-center">15-30 <br> September 2023</p>
                        <h4 class="font-taruno text-white text-center font-bold mt-20">HTM <br> RP 30.000</h4>
                        <div id="buttonearly1" class="flex justify-center items-center mt-32">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="bg-black text-white border-white py-4 px-6 font-taruno font-bold border-2 inline-flex items-center focus:ring-gray-300"
                                type="button">BUY NOW <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdown"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="/order/1/personal-information"
                                            class="block font-pathway px-4 py-2 hover:bg-gray-100 no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000]">Single</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="buttonearly2" class="hidden flex justify-center items-center mt-36">
                            <button
                                class="disable bg-slate-400 text-white border-white mt-2 py-4 px-6 font-taruno font-bold border-2 cursor-not-allowed inline-flex items-center focus:ring-gray-300"
                                type="button">SOLD OUT <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </div>
                    </div>
                </div>
                <div id="ticket2" class="w-72 relative" data-aos="fade-up">
                    <img id="ticketblack2" class="" src="/images/TICKET-BLACK.webp" alt="" />
                    <img id="ticketblue2" class="hidden" src="/images/TICKET-BLUE.webp" alt="" />
                    <div class="absolute top-0 bottom-0 left-0 right-0">
                        <h4 class="font-taruno2 text-2xl text-white text-center mt-12">PRESALE</h4>
                        <p class="font-pathway text-md text-white text-center">1 Oktober - <br> 17 November 2023</p>
                        <h4 id="presalecomingsoon" class="font-taruno text-white text-center font-bold mt-36">HTM <br>
                            COMING SOON</h4>
                        <h4 id="presalestartsoon" class="hidden font-taruno text-white text-center font-bold mt-28">
                            HTM <br>Single - Rp 45.000 <br>
                            <div class="text-sm mt-1">Bundle (3) - Rp 115.000</div>
                        </h4>
                        <div id="buttonpresale1" class="flex justify-center items-center mt-32">
                            <button
                                class="disable bg-slate-400 text-white border-white py-4 px-6 font-taruno font-bold border-2 cursor-not-allowed inline-flex items-center focus:ring-gray-300"
                                type="button">BUY NOW <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </div>
                        <div id="buttonpresale2" class="hidden flex justify-center items-center mt-32">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2"
                                class="bg-black text-white border-white py-4 px-6 font-taruno font-bold border-2 inline-flex items-center focus:ring-gray-300"
                                type="button">BUY NOW <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdown2"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="/order/1/personal-information"
                                            class="block font-pathway px-4 py-2 hover:bg-gray-100 no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000]">Single</a>
                                    </li>
                                    <li>
                                        <a href="/order/3/personal-information"
                                            class="block font-pathway px-4 py-2 hover:bg-gray-100 no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000]">Bundle</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="buttonpresale3" class="hidden flex justify-center items-center mt-32">
                            <button
                                class="disable bg-slate-400 text-white border-white py-4 px-6 font-taruno font-bold border-2 cursor-not-allowed inline-flex items-center focus:ring-gray-300"
                                type="button">SOLD OUT<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </div>
                    </div>
                </div>
                <div id="ticket3" class="w-72 relative" data-aos="fade-up">
                    <img id="ticketblack3" class="hidden" src="/images/TICKET-BLACK.webp" alt="" />
                    <img id="ticketblue3" class="" src="/images/TICKET-BLUE.webp" alt="" />
                    <div class="absolute top-0 bottom-0 left-0 right-0">
                        <h4 class="font-taruno2 text-2xl text-white text-center mt-12">ON THE SPOT</h4>
                        <p class="font-pathway text-md text-white text-center">18 November 2023</p>
                        <h4 id="" class="font-taruno text-white text-center font-bold mt-20">
                            HTM <br>Rp 50.000 <br>
                        </h4>
                        <h4 id="" class="font-taruno text-white text-center font-bold mt-16">
                            PARKIRAN FH UMN
                        </h4>
                        <h4 id="" class="font-taruno text-white text-center font-bold mt-28 px-8">
                            GET YOUR TICKETS ON THE SPOT
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <p class="text-3xl py-8">Tickets Menu</p>
        <div class="flex flex-col">
            <a href="/custom-order">Custom Order</a>
            <a href="/order/1/personal-information">Single</a>
            <a href="/order/3/personal-information">Trio</a>
            <a href="/order/5/personal-information">Friends Combo</a>
        </div> -->
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
        var today = new Date();
        var presaleStartTime = new Date('2024-10-01');
        var presaleEndTime = new Date('2023-11-18T00:00:00+07:00');

        var earlySold = 0; //ger help!

        var ticketBlue1 = document.getElementById("ticketblue1");
        var ticketBlue2 = document.getElementById("ticketblue2");
        var ticketBlack1 = document.getElementById("ticketblack1");
        var ticketBlack2 = document.getElementById("ticketblack2");
        var buttonEarly1 = document.getElementById("buttonearly1");
        var buttonEarly2 = document.getElementById("buttonearly2");
        var buttonPresale1 = document.getElementById("buttonpresale1");
        var buttonPresale2 = document.getElementById("buttonpresale2");
        var buttonPresale3 = document.getElementById("buttonpresale3");
        var presaleComing = document.getElementById("presalecomingsoon");
        var presaleStart = document.getElementById("presalestartsoon");

        if (today >= presaleStartTime) {
            ticketBlue1.classList.add('hidden');
            ticketBlack1.classList.remove('hidden');
            ticketBlue2.classList.remove('hidden');
            ticketBlack2.classList.add('hidden');
            buttonEarly1.classList.add('hidden');
            buttonEarly2.classList.remove('hidden');
            buttonPresale1.classList.add('hidden');
            buttonPresale2.classList.remove('hidden');
            presaleComing.classList.add('hidden');
            presaleStart.classList.remove('hidden');
            if (today >= presaleEndTime) {
                ticketBlue2.classList.add('hidden');
                ticketBlack2.classList.remove('hidden');
                buttonPresale2.classList.add('hidden');
                buttonPresale3.classList.remove('hidden');
                presaleComing.classList.add('hidden');
                presaleStart.classList.remove('hidden');
            }
        } else if (today >= presaleStartTime) {
            ticketBlue1.classList.add('hidden');
            ticketBlack1.classList.remove('hidden');
            ticketBlue2.classList.remove('hidden');
            ticketBlack2.classList.add('hidden');
            buttonEarly1.classList.add('hidden');
            buttonEarly2.classList.remove('hidden');
            buttonPresale1.classList.add('hidden');
            buttonPresale2.classList.remove('hidden');
            if (today >= presaleEndTime) {
                ticketBlue2.classList.add('hidden');
                ticketBlack2.classList.remove('hidden');
                buttonPresale2.classList.add('hidden');
                buttonPresale3.classList.remove('hidden');
            }
        }
    </script>
</body>
@endsection
