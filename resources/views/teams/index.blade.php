@extends('layouts.main')

@section('container')
<body class="antialiased bg-black h-full">
    {{-- <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}
    <div class="w-full pt-16 relative">
        <img id="" class="w-full h-48 md:h-80 object-cover object-center -z-10" src="{{ asset('images/FOTO RAC.webp') }}"
            alt="">
        {{-- <div class="w-full h-48 md:h-80 absolute top-0 -z-10 bg-gradient-to-b from-black to-transparent"></div> --}}
    </div>

    <div class=" lg:-mb-0 lg:my-16" data-aos="fade-up">
        <h2 id="title" class="font-taruno2 text-white text-center my-12">RADIO ANNOUNCING COMPETITION</h2>
        <div id="description" class="px-8 md:px-20 lg:px-80">
            <p class="font-pathway text-sm text-white text-justify md:text-center md:pb-0">Radio Announcing Competition
                merupakan
                rangkaian acara utama RADIOACTIVE. Lomba ini merupa kan ajang untuk siswa SMA dan mahasiswa
                se-Jabodetabek untuk memperluas wawasan dan mengasah kemampuan di dunia broadcasting. <br>
                Radio Announcing Competition ini memiliki konsep yang sesuai dengan nilai utama RADIOACTIVE 2023, yaitu
                get out from
                comfort zone. Tujuan dari lomba ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan
                secara tidak langsung memberikan informasi hingga mengajak para peserta untuk keluar dari zona nyaman
                mereka.</p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center"></p>
        </div>
    </div>

    <div id="judges" class="flex flex-col justify-center items-center my-16">
        <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-12" data-aos="fade-up">THE JUDGES</h4>
        <div id="judges" class="flex flex-col md:flex-row gap-12">
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-64 md:h-80 w-80 md:w-96 object-cover" src="images/FOTO-JURI-shandy.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">SHANDY LUO</h4>
            </div>
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-64 md:h-80 w-80 md:w-96 object-cover" src="images/FOTO-JURI-BELLA.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">BELLA PRAMBORS</h4>
            </div>
        </div>
    </div>

    <div id="timeline" class="hidden md:flex flex-col justify-center items-center my-32 mb-28" data-aos="fade-up">
        <img class="md:h-96 sm:h-0 px-2 max-w-[90%] object-contain" src="/images/rac.webp" alt="" />
    </div>

    <div id="timelineHP" class="flex flex-col justify-center items-center my-32 mb-28 md:hidden" data-aos="fade-up">
        <img class="w-80 sm:w-[60%] sm:min-w-40 px-2" src="/images/racHP.webp" alt="" />
    </div>

    <div class="flex flex-col md:flex-row justify-center sm:py-4 items-center mt-8" data-aos="fade-up">
        <div id="button2" class="my-3">
            <a target="_"
                href="https://drive.google.com/file/d/1gczHFV8MbNXSiDMOPcF3sCDbENeUkKwU/view?usp=drivesdk"
                class="no-underline py-4 px-6">
                <button
                    class="bg-[#0E0EC0] text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                    DOWNLOAD HANDBOOK
                </button>
            </a>
        </div>
        <div id="button1" class="my-3">
            <a href="/rac/register" class="no-underline py-4 px-6">
                <button disabled id="btnReg"
                    class="bg-[#0E0EC0] disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0] disabled:text-white">
                    REGISTER HERE
                </button>
            </a>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
            var CurrentDate = new Date();
            var regDate = new Date("2023-09-18");
            var closeDate = new Date("2024-10-20");
            var btnReg = document.getElementById('btnReg');

            function checkTime() {
                if (CurrentDate >= regDate) {
                    // handbookbtn.removeAttribute("disabled");
                    btnReg.removeAttribute("disabled");
                }
                if(CurrentDate>=closeDate){
                    btnReg.setAttribute("class", "hidden");
                }
            }

            checkTime();
            setInterval(checkTime, 1000);
        </script>
</body>
<style>
    /* body {
        background-color: black;
    } */

    /* .banner-image{
        max-height: 60vh;
    } */
    /* #banner {
        -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 1)), to(rgba(0, 0, 0, 0)));
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
    } */
</style>
@endsection
