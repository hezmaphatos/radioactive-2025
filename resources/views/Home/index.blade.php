@extends('layouts.main')

@section('container')

    <head>
        @vite('resources/css/home.css')
    </head>

    <body class="overflow-x-hidden bg-black">
        {{-- <div id="button1" class="fixed bottom-1 end-4 md:bottom-10 md:end-20 flex justify-center items-center z-50 animate-bounce">
        <a href="/closing-night/#ticket" class="no-underline">
            <button class="rounded-[100%] h-[5.5rem] md:h-32 aspect-square bg-[#D61525] text-white border-white font-ltmuseum text-2xs md:text-sm p-2 md:p-4 font-bold border-2 hover:bg-[#FFF000] hover:text-[#D61525]">
                GET YOUR TICKETS
            </button>
        </a>
    </div> --}}
        <div id="section-1" class="pt-32 max-w-4xl mx-auto">
            <div data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="center-center"
                class="flex flex-col md:flex-row items-center justify-center gap-4">
                <p class="text-center font-brody text-base text-white z-20 tracking-10">THE MOST SPECTACULAR ANNUAL EVENT BY
                </p>
                <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp" alt="UMN Radio Logo">
            </div>
            <div class="relative flex flex-col items-center mt-10" data-aos="fade-up" data-aos-duration="3000">
                <img class="object-cover h-[400px] w-[800px] z-0" src="images/LOGO RADIOACTIVE 2024.png"
                    alt="background logo" />
            </div>
        </div>

        <div id="about-us" class="flex flex-col justify-center items-center h-screen mt-0 mb-0 px-4 sm:px-8"
            data-aos="fade-up" data-aos-duration="1500">
            <h4 class="font-brodyrawk text-5xl sm:text-6xl md:text-8xl text-white text-center my-6 sm:my-12 tracking-wider">
                ABOUT US</h4>
            <div class="px-4 sm:px-8 md:px-20 lg:px-48">
                <p
                    class="font-ltmuseum text-base sm:text-lg md:text-xl text-white text-justify md:text-center tracking-wider mb-6">
                    RADIOACTIVE adalah Acara off air tahunan yang diselenggarakan oleh UMN Radio, radio komunitas
                    Universitas Multimedia Nusantara. Pertama kali diadakan di tahun 2015, RADIOACTIVE 2024 merupakan kali
                    ke-10 acara ini diselenggarakan.
                </p>
                <p
                    class="font-ltmuseum text-base sm:text-lg md:text-xl text-white text-justify md:text-center tracking-wider">
                    RADIOACTIVE 2024 mengangkat tema “RADIOACTIVE 2024: Resilience Era”, dengan tagline “Dare to Strive”,
                    serta bertujuan agar individu yang telah berevolusi mampu mempertahankan perubahannya dan
                    mengembangkannya dalam perjuangan tanpa ada rasa cukup.
                </p>
            </div>
        </div>

        <div id="marquee-section" class="mt-8 mb-16">
            <div class="overflow-hidden">
                <div class="marquee">
                    <span class="max font-ltmuseum text-2xl text-white tracking-8">
                        DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO
                        STRIVE
                    </span>
                    <!-- Duplicate the text -->
                    <span class="max font-ltmuseum text-2xl text-white tracking-8">
                        DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO
                        STRIVE
                    </span>
                </div>
                <div class="marquee-reverse mt-5">
                    <span class="max font-ltmuseum text-2xl text-white tracking-8">
                        DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO
                        STRIVE
                    </span>
                    <!-- Duplicate the text -->
                    <span class="max font-ltmuseum text-2xl text-white tracking-8">
                        DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO
                        STRIVE
                    </span>
                </div>
            </div>
        </div>


        <!-- <div id="upcoming-events" class="mt-8 lg:mb-0 lg:my-16 relative" data-aos="fade-up" data-aos-duration="3000" >
            <h4 class="font-brody md:text-3xl text-white text-center my-12 tracking-8">UPCOMING EVENTS</h4>
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                        <a href="/voc" class="no-underline">
                            <div class="flex bg-[#0E0EC0] flex-row max-h-44 lg:max-h-96">
                                <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                    <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                        <b>18-30</b>
                                    </h1>
                                    <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                        <b>Sept</b>
                                    </h3>
                                </div>
                                <div class="relative">
                                    <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO VO CHALLENGE.webp" alt="Voiceover Challenge">
                                    <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                        <div class="lg:px-4 lg:pb-6 pb-3">
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Voiceover</h3>
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Challenge</h3>
                                        </div>
                                        <div class="lg:px-4">
                                            <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                        <a href="/rac" class="no-underline">
                            <div class="flex bg-[#0E0EC0] max-h-44 lg:max-h-96 flex-row">
                                <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                    <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                        <b>28</b>
                                    </h1>
                                    <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                        <b>Oct</b>
                                    </h3>
                                </div>
                                <div class="relative">
                                    <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO RAC.webp" alt="Announcing Competition">
                                    <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                        <div class="lg:px-4 lg:pb-6 pb-3">
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Announcing</h3>
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Competition</h3>
                                        </div>
                                        <div class="lg:px-4">
                                            <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                        <a href="/closing-night" class="no-underline">
                            <div class="flex bg-[#0E0EC0] max-h-44 lg:max-h-96">
                                <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                    <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                        <b>18</b>
                                    </h1>
                                    <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                        <b>Nov</b>
                                    </h3>
                                </div>
                                <div class="relative">
                                    <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO CLOSING NIGHT.webp" alt="Closing Night">
                                    <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                        <div class="lg:px-4 lg:pb-6 pb-3">
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Closing</h3>
                                            <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Night</h3>
                                        </div>
                                        <div class="lg:px-4">
                                            <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="absolute top-1/2 transform -translate-y-1/2 left-4 lg:left-10 z-10">
                    <button id="prev" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">←</button>
                </div>
                <div class="absolute top-1/2 transform -translate-y-1/2 right-4 lg:right-10 z-10">
                    <button id="next" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">→</button>
                </div>
            </div>
        </div> -->

        <section class="min-h-screen max-w font-ltmuseumreg p-4" id="timeline">
            <div id="title" class="text-center my-8 px-4">
                <h1 class="font-brodyrawk md:text-3xl text-white text-center my-12 tracking-8 m-[0.3em] md:text-[3em] italic"
                    style="letter-spacing: 5px;">GENERAL TIMELINE</h1>
                {{-- <p class="text-white md:text-xl tracking-widest">------</p> --}}
            </div>
            <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
                <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
                <div class="mx-auto max-w-[34.15em]">
                    <div id="checkpoint"
                        class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                        <div>
                            <h2 class="mb-2 text-[#D61525]">2 - 9 September 2024 :<a href="/mac"
                                    class="no-underline text-white hover:opacity-50"> Mini Annoucing Challenge</a></h2>
                            <p class="leading-[27px] text-gray-300">
                                Mini Annoucing Challenge merupakan salah satu rangkaian acara RADIOACTIVE 2024. Mini
                                Annoucing Challenge bertujuan untuk mengasah skill para peserta dalam bidang siaran. Dalam
                                challenge ini, peserta tidak dibatasi untuk berkreasi. Teknis dari Mini Annoucing Challenge
                                ini adalah peserta dapat siaran menggunakan tema dan 3 kata yang sudah dipilih secara acak.
                                Disisi lain, challenge ini juga dapat meningkatkan awareness untuk rangkaian acara
                                berikutnya.
                            </p>
                        </div>
                    </div>
                    <div id="checkpoint"
                        class="border-2 border-white pl-12 m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                        <div>
                            <h2 class="mb-2 text-[#D61525]">2 September 2024 - 12 Oktober 2024 : <a href="/rac"
                                    class="no-underline text-white hover:opacity-50">Radio Announcing Competition</a></h2>
                            <p class="leading-[27px] text-gray-300">
                                Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. Lomba ini merupa
                                kan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk memperluas wawasan dan mengasah
                                kemampuan di dunia broadcasting. Radio Announcing Competition ini memiliki konsep yang
                                sesuai dengan nilai utama RADIOACTIVE 2024, yaitu “Surviving the Maze”. Tujuan dari lomba
                                ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan secara tidak langsung
                                memberikan informasi hingga mengajak para peserta untuk menggambarkan perjuangan manusia
                                dalam menghadapi rintangan dan lika-liku kehidupan.
                            </p>
                        </div>
                    </div>
                    <div id="checkpoint"
                        class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                        <div>
                            <h2 class="mb-2 text-[#D61525]">2 November 2024 : <a href="/closing-night"
                                    class="no-underline text-white hover:opacity-50">CLOSING NIGHT</a></h2>
                            <p class="leading-[27px] text-gray-300">
                                Closing Night merupakan puncak dan penutup dari rangkaian acara RADIOACTIVE 2024 yang akan
                                dilaksanakan secara offline. Kegiatan ini bertujuan untuk meningkatkan awareness dan
                                engagement RADIOACTIVE sebagai acara tahunan dari UMN Radio. Konsep Closing Night tahun ini
                                adalah “Valiant Against Fear” , Radioactive 2024 mengajak seluruh peserta dan panitia untuk
                                dapat bertahan setelah keluar dari zona nyaman mereka. Untuk closing night Radioactive tahun
                                ini akan diadakan secara intimate karena untuk berusaha bertahan di zona nyaman, tahap awal
                                yang dapat dilakukan adalah berfokus di skala yang kecil terlebih dahulu, kemudian baru
                                dilanjutkan ke skala yang lebih besar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div id="partners" class="-mb-20 md:-mb-0 md:my-24 mt-16" data-aos="fade-up">
            <div class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
                <!-- Text -->
                <div data-aos="zoom-in-right" data-aos-delay="400"
                    class="w-full lg:w-1/2 mb-12 lg:mb-0 lg:text-left text-center">
                    <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">PARTNERS</h2>
                </div>
                <!-- Images -->
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="200" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/LOGO BEM UMN PUTIH.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="400" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo Acara Kampus.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="600" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/LOGO BERITA LOMBA JPEG.jpeg" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="800" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo Eventnya Mahasiswa.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="1000" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/fourtyfiveradio.webp" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="1200" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/LOGO HMFILM.PNG" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="1400" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/logo imkom.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="1600" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo Kacamata Lomba.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="1800" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo lspr radio .jpg" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="2000" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/logo milenials radio.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="2200" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/LOGO MOESTOPO.jpg" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="2400" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo Mradio .PNG" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="2600" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/LOGO ORI.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="2800" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo Radio Untar.PNG" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="3000" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Logo SMI Putih.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="3200" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/Point Kampus.png" alt="" />
                        </div>
                        <div class="h-40 w-40 md:mx-8 mb-2">
                            <img data-aos="zoom-in-right" data-aos-delay="3400" class="w-full h-full object-contain"
                                src="/images/LOGO MEDPAR/unpar.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sponsors Section -->
        <div id="sponsors" class="py-16">
            <div data-aos="zoom-in-right" data-aos-delay="400"
                class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
                <!-- Images -->
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/ALLOBANK (2) XS.png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/AMATERASUN XS.png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/detik event (ticketing partner).png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/ITOEN WHITE XS.png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/LOGO CAP PANDA.PNG" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/PUYO XS.png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                        <div class="bg-black border border-white aspect-w-1 aspect-h-1 rounded-lg">
                            <img src="/images/LOGO SPONSOR/SARI ROTI XS.png" alt=""
                                class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
                <!-- Text -->
                <div class="w-full lg:w-1/2 mt-12 lg:mt-0 lg:text-right text-center">
                    <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">SPONSORS</h2>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap md:flex-nowrap px-4 md:px-12 mt-10 space-y-8 md:space-y-0">
            <div class="w-full md:w-1/4 p-4 md:p-6">
                <h1 class="text-lg md:text-xl font-brodyrawk text-[#D61525] mb-2 md:mb-4">UMN RADIOACTIVE 2023</h1>
                <h2 class="text-2xl md:text-4xl font-bold mb-4 md:mb-6 font-ltmuseumbold text-white">Kilas balik acara
                    tahun sebelumnya!</h2>
                <ul class="sm:flex md:block">
                    <li class="text-yellow-600 mb-1 md:mb-2"><a data-filter="all"
                            class="filter-link hover:opacity-50 no-underline font-ltmuseumreg">ALL</a></li>
                    <li class="text-gray-500 mb-1 md:mb-2"><a data-filter="voc"
                            class="filter-link hover:opacity-50  no-underline font-ltmuseumreg">VOC</a></li>
                    <li class="text-gray-500 mb-1 md:mb-2"><a data-filter="rac"
                            class="filter-link hover:opacity-50  no-underline font-ltmuseumreg">RAC</a></li>
                    <li class="text-gray-500"><a data-filter="closing-night"
                            class="filter-link hover:opacity-50  no-underline font-ltmuseumreg">CLOSING NIGHT</a></li>
                </ul>
            </div>

            <!-- Gallery Section -->
            <div class="w-full md:flex-1 grid gap-2 md:gap-4" id="gallery">
                <!-- MAC Section -->
                <div class="filter-item grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-4" data-category="voc">
                    <img src="images/VOC/1.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/VOC/2.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/VOC/3.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/VOC/4.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                </div>

                <!-- RAC Section -->
                <div class="filter-item grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-4" data-category="rac">
                    <img src="images/RAC/1.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/RAC/2.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/RAC/3.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/RAC/4.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/RAC/5.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/RAC/6.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                </div>

                <!-- Closing Night Section -->
                <div class="filter-item grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-4" data-category="closing-night">
                    <img src="images/CLOSING NIGHT/1.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/CLOSING NIGHT/2.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/CLOSING NIGHT/3.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                    <img src="images/CLOSING NIGHT/4.jpg"
                        class="w-full h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer hover:opacity-50"
                        onclick="openPopup(this.src)">
                </div>
            </div>

            <div id="popup" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50"
                onclick="closePopup()">
                <div class="relative" onclick="event.stopPropagation();">
                    <img id="popupImage" class="w-full h-auto max-w-md md:max-w-xl rounded-lg shadow-lg">
                </div>
            </div>
        </div>

        <div id="after" class="-mb-20 md:-mb-0 md:my-24" data-aos="fade-up">
            <h2 class="font-brodyrawk md:text-3xl text-white text-center my-12 tracking-8">AFTER MOVIE</h2>
            <div class="w-full flex justify-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/noafJ76PHeM?si=5ho9Ad32GabxdrVT"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const carousel = document.getElementById('carousel');
                const items = document.querySelectorAll('.carousel-item');
                const totalItems = items.length;
                let currentIndex = 0;

                document.getElementById('next').addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalItems;
                    updateCarousel();
                });

                document.getElementById('prev').addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                    updateCarousel();
                });

                function updateCarousel() {
                    const offset = -currentIndex * 100;
                    carousel.style.transform = `translateX(${offset}%)`;
                }
            });
        </script>
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
                if (CurrentDate >= closeDate) {
                    btnReg.setAttribute("class", "hidden");
                }
            }
            checkTime();
            setInterval(checkTime, 1000);
        </script>
        <script>
            function scrollToTimeline() {
                const timelineSection = document.getElementById('timeline');
                timelineSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }

            function scrollToDownload() {
                const handbookSection = document.getElementById('download');
                handbookSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const gallery = document.getElementById('gallery');
                const allImages = [];
                const categories = {};

                document.querySelectorAll('.filter-item').forEach(item => {
                    const category = item.getAttribute('data-category');
                    categories[category] = [];
                    item.querySelectorAll('img').forEach(img => {
                        categories[category].push(img.outerHTML);
                        allImages.push(img.outerHTML);
                    });
                });

                function showCategory(category) {
                    gallery.innerHTML =
                        `<div class="grid grid-cols-1 md:grid-cols-3 gap-4">${categories[category].join('')}</div>`;
                }

                function randomizeGallery() {
                    const shuffledImages = allImages.sort(() => Math.random() - 0.5).slice(0, 3);
                    gallery.innerHTML =
                        `<div class="grid grid-cols-1 md:grid-cols-3 gap-4">${shuffledImages.join('')}</div>`;
                }

                document.querySelectorAll('.filter-link').forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        const filter = this.getAttribute('data-filter');

                        if (filter === 'all') {
                            randomizeGallery();
                        } else {
                            showCategory(filter);
                        }
                    });
                });
                randomizeGallery();
            });
        </script>
        <script>
            function openPopup(src) {
                document.getElementById('popupImage').src = src;
                document.getElementById('popup').classList.remove('hidden');
            }

            function closePopup() {
                document.getElementById('popup').classList.add('hidden');
            }
        </script>
    </body>
@endsection
