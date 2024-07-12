@extends('layouts.main')

@section('container')
<body class="antialiased bg-black min-h-screen">
    {{-- <div>
        <video autoplay loop muted class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover"
            loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}

    <div id="banner" class="w-full">
        <img class="banner-image w-full object-cover" src="{{ asset('images/FOTO RAC.webp') }}" alt="">
    </div>

    <div id="description" class="my-12 mb-28" data-aos="fade-up">
        <h4 class="font-taruno2 text-3xl text-white text-center mt-12 mb-8">RADIO ANNOUNCING COMPETITION</h4>
        <div class="px-8 md:px-20 lg:px-48">
            <p class="lg:px-44 font-pathway text-lg text-white text-justify ">Radio Announcing Competition merupakan
                rangkaian acara utama RADIOACTIVE. Lomba ini merupa kan ajang untuk siswa SMA dan mahasiswa
                se-Jabodetabek untuk memperluas wawasan dan men- gasah kemampuan di dunia broadcasting Radio Announcing
                Competition ini memiliki konsep yang sesuai dengan nilai utama RADIOACTIVE 2023, yaitu get out from
                comfort zone. Tujuan dari lomba ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan
                secara tidak langsung mem- berikan informasi hingga mengajak para peserta untuk keluar dari zona nyaman
                mereka.
            </p>
        </div>
    </div>

    <div id="judges" class="flex flex-col justify-center items-center my-16">
        <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-12" data-aos="fade-up">THE JUDGES</h4>
        <div id="judges" class="flex flex-col md:flex-row gap-12">
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-80 md:h-96" src="images/BACKGROUND LOGO.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">SHANDY LUO</h4>
            </div>
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-80 md:h-96" src="images/BACKGROUND LOGO.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">BELLA PRAMBORS</h4>
            </div>
        </div>
    </div>

    <div id="timeline" class="hidden md:flex flex-col justify-center items-center my-32 mb-28" data-aos="fade-up">
        <img class="md:h-96 sm:h-0 px-2 max-w-[90%] object-contain" src="/images/TIMELINE RAC.png" alt="" />
    </div>

    <div id="timelineHP" class="flex flex-col justify-center items-center my-32 mb-28 md:hidden" data-aos="fade-up">
        <img class="w-80 sm:w-[60%] sm:min-w-40 px-2" src="/images/TIMELINE RAC HP.png" alt="" />
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-[#0E0EC0]');
            } else {
                header.classList.add('bg-transparent');
                header.classList.remove('bg-[#0E0EC0]');
            }
        });
    </script>
</body>
<style>
    body {
        background-color: black;
    }

    .banner-image {
        max-height: 60vh;
    }
</style>
@endsection
