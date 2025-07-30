@extends('layouts.main')

@section('container')

    <head>
        @vite(['resources/css/app.css', 'resources/css/home.css'])
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body class="overflow-x-hidden">
        {{-- Optional ticket button --}}
        {{-- <div id="button1" class="fixed bottom-1 end-4 md:bottom-10 md:end-20 flex justify-center items-center z-50 animate-bounce">
        <a href="/closing-night/#ticket" class="no-underline">
            <button class="rounded-[100%] h-[5.5rem] md:h-32 aspect-square bg-gold text-white border-white font-ltmuseum text-2xs md:text-sm p-2 md:p-4 font-bold border-2 hover:bg-[#FFF000] hover:text-gold">
                GET YOUR TICKETS
            </button>
        </a>
    </div> --}}
        
        {{-- Hero Section --}}
        <div class="parallax-section relative overflow-hidden h-screen w-screen">
            <div class="pt-16 sm:pt-24 md:pt-32 max-w-4xl mx-auto z-30 relative px-4">
                <div data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="center-center"
                    class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4">
                    <p class="text-center font-lavish text-xs sm:text-sm md:text-base text-white tracking-wider sm:tracking-widest">
                        THE MOST SPECTACULAR ANNUAL EVENT BY
                    </p>
                    <img class="w-16 sm:w-20 md:w-24" src="images/LOGO UMN RADIO.webp" alt="UMN Radio Logo">
                </div>
            </div>

            {{-- Decorative flowers --}}
            <img src="images/BUNGAKIRI.png" id="bungakiri" alt="Decorative flower left" />
            <img src="images/BUNGAKANAN.png" id="bungakanan" alt="Decorative flower right" />

            {{-- Side decorative elements --}}
            <img src="images/left.png" id="left" alt="Left decoration" />
            <img src="images/right.png" id="right" alt="Right decoration" />

            {{-- Main logo --}}
            <div class="absolute w-full h-full z-30">
  <img id="logo" class="object-contain" src="images/LOGO RADIOACTIVE 2025 PNG.png"
    alt="Radioactive 2025 Logo" />
</div>

        </div>

        {{-- Leaves separator --}}
        <div class="leaves-wrapper relative z-50 w-full">
            <img id="leaveskiri" src="images/LEAVESKIRI.png" alt="Left leaves separator" />
            <img id="leaveskanan" src="images/LEAVESKANAN.png" alt="Right leaves separator" />
        </div>

        {{-- About Us Section --}}
        <div id="about-us" class="flex flex-col justify-center items-center min-h-[300px] sm:min-h-[350px] md:min-h-[400px] mt-0 mb-8 sm:mb-12 md:mb-16 px-4 sm:px-8"
             data-aos="fade-up" data-aos-duration="1500">
            <div class="relative flex items-center justify-center h-full w-full font-lavish">
                <span class="absolute text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none">
                    ABOUT US
                </span>
                <h1 class="relative z-10 glow-text bg-gradient-to-r from-gold to-white bg-clip-text text-transparent text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold">
                    ABOUT US
                </h1>
            </div>
        </div>
            
        {{-- About Us Content --}}
        <div class="px-4 sm:px-8 md:px-20 lg:px-48">
            <p class="font-royalecoutureserif text-sm sm:text-base md:text-lg lg:text-xl text-white text-justify md:text-center tracking-wider mb-4 sm:mb-6 leading-relaxed">
                RADIOACTIVE adalah Acara off air tahunan yang diselenggarakan oleh UMN Radio, radio komunitas
                Universitas Multimedia Nusantara. Pertama kali diadakan di tahun 2015, RADIOACTIVE 2024 merupakan kali
                ke-10 acara ini diselenggarakan.
            </p>
            <p class="font-royalecoutureserif text-sm sm:text-base md:text-lg lg:text-xl text-white text-justify md:text-center tracking-wider leading-relaxed">
                RADIOACTIVE 2024 mengangkat tema "RADIOACTIVE 2024: Resilience Era", dengan tagline "Dare to Strive",
                serta bertujuan agar individu yang telah berevolusi mampu mempertahankan perubahannya dan
                mengembangkannya dalam perjuangan tanpa ada rasa cukup.
            </p>
        </div>

        <section class="w-full font-royalecoutureserif px-4 mt-16" id="timeline">
    <div class="text-center px-4 mb-8 sm:mb-12 md:mb-16">
        <div class="relative flex justify-center items-center min-h-[250px] sm:min-h-[300px] md:min-h-[400px] w-full font-lavish">
            <span class="absolute text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none text-center">
                GENERAL TIMELINE
            </span>
            <h1 class="relative z-10 glow-text bg-gradient-to-r from-gold to-white bg-clip-text text-transparent text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold text-center">
                GENERAL TIMELINE
            </h1>
        </div>
    </div>

    <div class="relative max-w-5xl mx-auto" data-aos="zoom-in-right" data-aos-delay="100">
        {{-- Vertical Line --}}
        <div class="absolute hidden md:block left-1/2 top-0 bottom-0 w-px bg-white opacity-30 z-0"></div>

        {{-- Timeline Items --}}
        <div class="space-y-12">
            {{-- ITEM 1 --}}
            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                <div class="border border-white rounded-2xl p-4 sm:p-6 bg-opacity-20 backdrop-blur-md text-white">
                    <h2 class="mb-2 text-sm sm:text-base md:text-lg text-gold font-bold">
                        2 - 9 September 2024 : Mini Annoucing Challenge
                    </h2>
                    <p class="text-xs sm:text-sm md:text-base text-gray-300">
Mini Annoucing Challenge merupakan salah satu rangkaian acara RADIOACTIVE 2024. Mini
                                Annoucing Challenge bertujuan untuk mengasah skill para peserta dalam bidang siaran. Dalam
                                challenge ini, peserta tidak dibatasi untuk berkreasi. Teknis dari Mini Annoucing Challenge
                                ini adalah peserta dapat siaran menggunakan tema dan 3 kata yang sudah dipilih secara acak.
                                Disisi lain, challenge ini juga dapat meningkatkan awareness untuk rangkaian acara
                                berikutnya.                    </p>
                </div>
                <div></div>
            </div>

            {{-- ITEM 2 --}}
            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                <div></div>
                <div class="border border-white rounded-2xl p-4 sm:p-6 bg-opacity-20 backdrop-blur-md text-white">
                    <h2 class="mb-2 text-sm sm:text-base md:text-lg text-gold font-bold">
                        2 September – 12 Oktober 2024 : Radio Announcing Competition
                    </h2>
                    <p class="text-xs sm:text-sm md:text-base text-gray-300">
Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. Lomba ini merupa
                                kan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk memperluas wawasan dan mengasah
                                kemampuan di dunia broadcasting. Radio Announcing Competition ini memiliki konsep yang
                                sesuai dengan nilai utama RADIOACTIVE 2024, yaitu "Surviving the Maze". Tujuan dari lomba
                                ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan secara tidak langsung
                                memberikan informasi hingga mengajak para peserta untuk menggambarkan perjuangan manusia
                                dalam menghadapi rintangan dan lika-liku kehidupan.                    </p>
                </div>
            </div>

            {{-- ITEM 3 --}}
            <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                <div class="border border-white rounded-2xl p-4 sm:p-6 bg-opacity-20 backdrop-blur-md text-white">
                    <h2 class="mb-2 text-sm sm:text-base md:text-lg text-gold font-bold">
                        2 November 2024 : CLOSING NIGHT
                    </h2>
                    <p class="text-xs sm:text-sm md:text-base text-gray-300">
Closing Night merupakan puncak dan penutup dari rangkaian acara RADIOACTIVE 2024 yang akan
                                dilaksanakan secara offline. Kegiatan ini bertujuan untuk meningkatkan awareness dan
                                engagement RADIOACTIVE sebagai acara tahunan dari UMN Radio. Konsep Closing Night tahun ini
                                adalah "Valiant Against Fear" , Radioactive 2024 mengajak seluruh peserta dan panitia untuk
                                dapat bertahan setelah keluar dari zona nyaman mereka. Untuk closing night Radioactive tahun
                                ini akan diadakan secara intimate karena untuk berusaha bertahan di zona nyaman, tahap awal
                                yang dapat dilakukan adalah berfokus di skala yang kecil terlebih dahulu, kemudian baru
                                dilanjutkan ke skala yang lebih besar.                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</section>

        

        

        {{-- Exclusive Radio Partner --}}
        <div class="px-4 mt-12 sm:mt-16 md:mt-20">
            <div data-aos="zoom-in-up" data-aos-delay="400"
                class="container mx-auto flex flex-col md:flex-row justify-center md:justify-around items-center align-middle gap-6 md:gap-4">
                <div class="relative text-center font-lavish">
                    <span class="absolute inset-0 text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none tracking-wider">
                        EXCLUSIVE RADIO PARTNER
                    </span>
                    <h2 class="relative z-10 glow-text text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text tracking-wider">
                        EXCLUSIVE RADIO PARTNER
                    </h2>
                </div>
                <img src="/images/LOGO MEDPAR/LOGO MUSTANG.webp" alt="Mustang Radio Logo" 
                     class="w-48 sm:w-64 md:w-80 lg:w-96 object-contain">
            </div>
        </div>

        {{-- Partners Section --}}
        <div id="partners" class="mt-8 sm:mt-12 md:mt-16 lg:mt-24 px-4" data-aos="fade-up">
            <div class="container mx-auto">
                {{-- Title --}}
                <div data-aos="zoom-in-up" data-aos-delay="400" class="w-full text-center mb-8 sm:mb-10 md:mb-12">
                    <div class="relative text-center font-lavish">
                        <span class="absolute inset-0 text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none tracking-wider">
                            PARTNERS
                        </span>
                        <h2 class="relative z-10 glow-text text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text tracking-wider">
                            PARTNERS
                        </h2>
                    </div>
                </div>

                {{-- Pyramid Layout --}}
                <div class="w-full">
                    <div class="flex flex-col items-center space-y-4 sm:space-y-6 md:space-y-8">
                        {{-- Tier 1 - 1 logo (Largest) --}}
                        <div class="flex justify-center">
                            <img class="w-48 sm:w-56 md:w-64 lg:w-80 h-16 sm:h-20 md:h-24 lg:h-28 object-contain"
                                src="/images/LOGO MEDPAR/logo milenials radio.webp" alt="Milenials Radio" />
                        </div>

                        {{-- Tier 2 - 2 logos (Large) --}}
                        <div class="flex justify-center items-center space-x-8 sm:space-x-12 md:space-x-16 lg:space-x-20">
                            <img class="w-32 sm:w-36 md:w-40 lg:w-48 h-12 sm:h-14 md:h-16 lg:h-20 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo SMI Putih.webp" alt="SMI" />
                            <img class="w-32 sm:w-36 md:w-40 lg:w-48 h-12 sm:h-14 md:h-16 lg:h-20 object-contain"
                                 src="/images/LOGO MEDPAR/Logo Ultimagz Putih.webp" alt="Ultimagz" />
                        </div>

                        {{-- Tier 3 - 3 logos (Medium) --}}
                        <div class="flex justify-center items-center space-x-6 sm:space-x-8 md:space-x-10 lg:space-x-14">
                            <img class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo lspr radio .webp" alt="LSPR Radio" />
                            <img class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo Mradio .webp" alt="M Radio" />
                            <img class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain" 
                                 src="/images/LOGO MEDPAR/fourtyfiveradio.webp" alt="45 Radio" />
                        </div>

                        {{-- Tier 4 - 4 logos (Small-Medium) --}}
                        <div class="flex justify-center items-center space-x-4 sm:space-x-6 md:space-x-8 lg:space-x-10">
                            <img src="/images/LOGO MEDPAR/LOGO BEM UMN PUTIH.webp" alt="BEM UMN"
                                class="w-16 sm:w-18 md:w-20 lg:w-28 h-8 sm:h-10 md:h-12 lg:h-14 object-contain">
                            <img class="w-16 sm:w-18 md:w-20 lg:w-28 h-8 sm:h-10 md:h-12 lg:h-14 object-contain" 
                                 src="/images/LOGO MEDPAR/LOGO HMFILM.webp" alt="HM Film" />
                            <img class="w-16 sm:w-18 md:w-20 lg:w-28 h-8 sm:h-10 md:h-12 lg:h-14 object-contain" 
                                 src="/images/LOGO MEDPAR/logo imkom.webp" alt="Imkom" />
                            <img class="w-16 sm:w-18 md:w-20 lg:w-28 h-8 sm:h-10 md:h-12 lg:h-14 object-contain"
                                 src="/images/LOGO MEDPAR/Logo Kacamata Lomba.webp" alt="Kacamata Lomba" />
                        </div>

                        {{-- Tier 5 - 5 logos (Small) --}}
                        <div class="flex justify-center items-center space-x-3 sm:space-x-4 md:space-x-6 lg:space-x-8">
                            <img class="w-12 sm:w-14 md:w-16 lg:w-24 h-6 sm:h-8 md:h-10 lg:h-12 object-contain" 
                                 src="/images/LOGO MEDPAR/LOGO_MOESTOPO.webp" alt="Moestopo" />
                            <img class="w-12 sm:w-14 md:w-16 lg:w-24 h-6 sm:h-8 md:h-10 lg:h-12 object-contain" 
                                 src="/images/LOGO MEDPAR/LOGO ORI.webp" alt="ORI" />
                            <img class="w-12 sm:w-14 md:w-16 lg:w-24 h-6 sm:h-8 md:h-10 lg:h-12 object-contain" 
                                 src="/images/LOGO MEDPAR/unpar.webp" alt="Unpar" />
                            <img class="w-12 sm:w-14 md:w-16 lg:w-24 h-6 sm:h-8 md:h-10 lg:h-12 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo Acarakampus.com.webp" alt="Acara Kampus" />
                            <img class="w-12 sm:w-14 md:w-16 lg:w-24 h-6 sm:h-8 md:h-10 lg:h-12 object-contain" 
                                 src="/images/LOGO MEDPAR/LOGO BERITA LOMBA PNG.webp" alt="Berita Lomba" />
                        </div>

                        {{-- Tier 6 - 6 logos (Smallest) --}}
                        <div class="flex justify-center items-center space-x-2 sm:space-x-3 md:space-x-4 lg:space-x-6 flex-wrap max-w-4xl gap-y-2">
                            <img class="w-10 sm:w-12 md:w-14 lg:w-20 h-5 sm:h-6 md:h-8 lg:h-10 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo Eventnya Mahasiswa.webp" alt="Event Mahasiswa" />
                            <img class="w-10 sm:w-12 md:w-14 lg:w-20 h-5 sm:h-6 md:h-8 lg:h-10 object-contain" 
                                 src="/images/LOGO MEDPAR/Logo Radio Untar.webp" alt="Radio Untar" />
                            <img class="w-10 sm:w-12 md:w-14 lg:w-20 h-5 sm:h-6 md:h-8 lg:h-10 object-contain" 
                                 src="/images/LOGO MEDPAR/Point Kampus.webp" alt="Point Kampus" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Divider --}}
        <div class="w-full flex justify-center mt-12 sm:mt-16 md:mt-20 lg:mt-24">
            <hr class="w-[90%] border-white/30">
        </div>

        {{-- Ticketing Partner --}}
        <div class="px-4 mt-12 sm:mt-16 md:mt-20">
            <div data-aos="zoom-in-up" data-aos-delay="400"
                class="container mx-auto flex flex-col md:flex-row justify-center md:justify-around items-center align-middle gap-6 md:gap-4">
                <div class="relative text-center font-lavish">
                    <span class="absolute inset-0 text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none tracking-wider">
                        TICKETING PARTNER
                    </span>
                    <h2 class="relative z-10 glow-text text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text tracking-wider">
                        TICKETING PARTNER
                    </h2>
                </div>
                <img src="/images/LOGO SPONSOR/detik event.webp" alt="Detik Event" 
                     class="w-48 sm:w-64 md:w-80 lg:w-96 object-contain">
            </div>
        </div>

        {{-- Sponsors Section --}}
        <div id="sponsors" class="mt-8 sm:mt-12 md:mt-16 lg:mt-24 px-4" data-aos="fade-up">
            <div class="container mx-auto">
                {{-- Title --}}
                <div data-aos="zoom-in-up" data-aos-delay="400" class="w-full text-center mb-8 sm:mb-10 md:mb-12">
                    <div class="relative text-center font-lavish">
                        <span class="absolute inset-0 text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none tracking-wider">
                            SPONSORS
                        </span>
                        <h2 class="relative z-10 glow-text text-xl sm:text-2xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text tracking-wider">
                            SPONSORS
                        </h2>
                    </div>
                </div>

                {{-- Pyramid Layout --}}
                <div class="w-full">
                    <div class="flex flex-col items-center space-y-4 sm:space-y-6 md:space-y-8">
                        {{-- Tier 1 - 1 logo (Largest) --}}
                        <div class="flex justify-center">
                            <img src="/images/LOGO SPONSOR/ALLOBANK (2) XS.webp" alt="Allo Bank"
                                class="w-48 sm:w-56 md:w-64 lg:w-80 h-16 sm:h-20 md:h-24 lg:h-28 object-contain">
                        </div>

                        {{-- Tier 2 - 2 logos (Large) --}}
                        <div class="flex justify-center items-center space-x-8 sm:space-x-12 md:space-x-16 lg:space-x-20">
                            <img src="/images/LOGO SPONSOR/AMATERASUN XS.webp" alt="Amaterasun"
                                class="w-32 sm:w-36 md:w-40 lg:w-48 h-12 sm:h-14 md:h-16 lg:h-20 object-contain">
                            <img src="/images/LOGO SPONSOR/ITOEN WHITE XS.webp" alt="Ito En"
                                class="w-32 sm:w-36 md:w-40 lg:w-48 h-12 sm:h-14 md:h-16 lg:h-20 object-contain">
                        </div>

                        {{-- Tier 3 - 3 logos (Medium) --}}
                        <div class="flex justify-center items-center space-x-6 sm:space-x-8 md:space-x-10 lg:space-x-14">
                            <img src="/images/LOGO SPONSOR/LOGO CAP PANDA.webp" alt="Cap Panda"
                                class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain">
                            <img src="/images/LOGO SPONSOR/PUYO XS.webp" alt="Puyo"
                                class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain">
                            <img src="/images/LOGO SPONSOR/SARI ROTI XS.webp" alt="Sari Roti"
                                class="w-24 sm:w-28 md:w-32 lg:w-36 h-10 sm:h-12 md:h-14 lg:h-16 object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gallery Section --}}
        <div class="flex flex-col lg:flex-row px-4 md:px-8 lg:px-12 mt-12 sm:mt-16 md:mt-20 space-y-6 lg:space-y-0 lg:space-x-6">
            {{-- Gallery Filter Section --}}
            <div class="w-full lg:w-1/4 p-4 md:p-6">
                <h1 class="text-base sm:text-lg md:text-xl font-lavish text-gold mb-2 md:mb-4">UMN RADIOACTIVE 2023</h1>
                <div class="relative text-center my-4 sm:my-6 font-lavish">
                    <span class="absolute inset-0 text-lg sm:text-xl md:text-3xl lg:text-4xl font-bold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none">
                        Flashback to last year's thrills!
                    </span>
                    <h2 class="relative z-10 glow-text text-lg sm:text-xl md:text-3xl lg:text-4xl font-bold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text">
                        Flashback to last year's thrills!
                    </h2>
                </div>

                <div class="flex flex-wrap items-center align-middle gap-3 sm:gap-4">
                    <div><a data-filter="all"
                            class="filter-link no-underline font-royalecoutureserif text-sm sm:text-base text-gold hover:cursor-pointer hover:opacity-50">ALL</a></div>
                    <div><a data-filter="voc"
                            class="filter-link no-underline font-royalecoutureserif text-sm sm:text-base text-gold hover:cursor-pointer hover:opacity-50">VOC</a></div>
                    <div><a data-filter="rac"
                            class="filter-link no-underline font-royalecoutureserif text-sm sm:text-base text-gold hover:cursor-pointer hover:opacity-50">RAC</a></div>
                    <div><a data-filter="closing-night"
                            class="filter-link no-underline font-royalecoutureserif text-sm sm:text-base text-gold hover:cursor-pointer hover:opacity-50">CLOSING NIGHT</a></div>
                </div>
            </div>

            {{-- Gallery Images Section --}}
            <div class="w-full lg:flex-1" id="gallery">
                {{-- VOC Section --}}
                <div class="filter-item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4" data-category="voc">
                    <img src="images/VOC/1.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="VOC Event 1">
                    <img src="images/VOC/2.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="VOC Event 2">
                    <img src="images/VOC/3.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="VOC Event 3">
                    <img src="images/VOC/4.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="VOC Event 4">
                </div>

                {{-- RAC Section --}}
                <div class="filter-item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4" data-category="rac">
                    <img src="images/RAC/1.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 1">
                    <img src="images/RAC/2.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 2">
                    <img src="images/RAC/3.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 3">
                    <img src="images/RAC/4.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 4">
                    <img src="images/RAC/5.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 5">
                    <img src="images/RAC/6.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="RAC Event 6">
                </div>

                {{-- Closing Night Section --}}
                <div class="filter-item grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4" data-category="closing-night">
                    <img src="images/CLOSING NIGHT/1.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="Closing Night 1">
                    <img src="images/CLOSING NIGHT/2.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="Closing Night 2">
                    <img src="images/CLOSING NIGHT/3.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="Closing Night 3">
                    <img src="images/CLOSING NIGHT/4.webp"
                        class="w-full h-32 sm:h-40 md:h-48 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300 cursor-pointer"
                        onclick="openPopup(this.src)" alt="Closing Night 4">
                </div>
            </div>

            {{-- Image Popup --}}
            <div id="popup" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50"
                onclick="closePopup()">
                <div class="relative max-w-[90vw] max-h-[90vh]" onclick="event.stopPropagation();">
                    <img id="popupImage" class="w-full h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl rounded-lg shadow-lg">
                    <button onclick="closePopup()" class="absolute top-2 right-2 text-white text-2xl bg-black bg-opacity-50 rounded-full w-8 h-8 flex items-center justify-center hover:bg-opacity-75">×</button>
                </div>
            </div>
        </div>

        {{-- After Movie Section --}}
        <div id="after" class="mt-12 sm:mt-16 md:mt-20 lg:mt-24 px-4" data-aos="fade-up">
            <div class="relative text-center mb-6 sm:mb-8 md:mb-12 font-lavish">
                <span class="absolute inset-0 text-base sm:text-lg md:text-2xl lg:text-3xl text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none tracking-wider">
                    AFTER MOVIE RADIOACTIVE 2023
                </span>
                <h2 class="relative z-10 glow-text text-base sm:text-lg md:text-2xl lg:text-3xl text-transparent bg-gradient-to-r from-gold to-white bg-clip-text tracking-wider">
                    AFTER MOVIE RADIOACTIVE 2023
                </h2>
            </div>
            <div class="w-full flex justify-center">
                <div class="relative w-full max-w-4xl aspect-video">
                    <iframe 
                        class="w-full h-full rounded-lg shadow-lg" 
                        src="https://www.youtube.com/embed/noafJ76PHeM?si=5ho9Ad32GabxdrVT"
                        title="YouTube video player" 
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        {{-- Scripts --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        
        {{-- Gallery Filter Script --}}
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
                        `<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4">${categories[category].join('')}</div>`;
                }

                function randomizeGallery() {
                    const shuffledImages = allImages.sort(() => Math.random() - 0.5).slice(0, 6);
                    gallery.innerHTML =
                        `<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4">${shuffledImages.join('')}</div>`;
                }

                document.querySelectorAll('.filter-link').forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        const filter = this.getAttribute('data-filter');

                        // Remove active class from all links
                        document.querySelectorAll('.filter-link').forEach(l => l.classList.remove('opacity-100'));
                        // Add active class to clicked link
                        this.classList.add('opacity-100');

                        if (filter === 'all') {
                            randomizeGallery();
                        } else {
                            showCategory(filter);
                        }
                    });
                });
                
                // Initialize with random gallery
                randomizeGallery();
            });
        </script>

        {{-- Image Popup Script --}}
        <script>
            function openPopup(src) {
                document.getElementById('popupImage').src = src;
                document.getElementById('popup').classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            }

            function closePopup() {
                document.getElementById('popup').classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }

            // Close popup with Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closePopup();
                }
            });
        </script>

        {{-- Parallax Script with Performance Optimization --}}
        <script>
            const elements = {
                left: document.getElementById('left'),
                right: document.getElementById('right'),
                bungakiri: document.getElementById('bungakiri'),
                bungakanan: document.getElementById('bungakanan'),
                logo: document.getElementById('logo'),
                leaveskiri: document.getElementById('leaveskiri'),
                leaveskanan: document.getElementById('leaveskanan')
            };

            let ticking = false;

            function updateParallax() {
                const value = window.scrollY;
                const maxLeafMove = window.innerWidth < 768 ? 200 : 400;

                // Background layer - slowest
                if (elements.bungakiri) {
                    elements.bungakiri.style.transform = `translate(${value * -0.2}px, 0%)`;
                }
                if (elements.bungakanan) {
                    elements.bungakanan.style.transform = `translate(${value * 0.2}px, 0%)`;
                }

                // Mid layer
                if (elements.left) {
                    elements.left.style.transform = `translate(${value * -0.4}px, 0%)`;
                }
                if (elements.right) {
                    elements.right.style.transform = `translate(${value * 0.4}px, 0%)`;
                }

                // Foreground layer - fastest
                if (elements.logo) {
                    elements.logo.style.transform = `translate(-50%, calc(-50% + ${value * 0.25}px))`;
                }

                // Leaves with limited movement
                const kiriOffset = Math.min(value * 0.6, maxLeafMove);
                const kananOffset = Math.max(-value * 0.6, -maxLeafMove);

                if (elements.leaveskiri) {
                    elements.leaveskiri.style.transform = `translate(${kiriOffset}px, 0%)`;
                }
                if (elements.leaveskanan) {
                    elements.leaveskanan.style.transform = `translate(${kananOffset}px, 0%)`;
                }

                ticking = false;
            }

            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(updateParallax);
                    ticking = true;
                }
            }

            // Throttled scroll event
            window.addEventListener('scroll', requestTick, { passive: true });

            // Resize handler
            window.addEventListener('resize', () => {
                requestTick();
            });
        </script>

        {{-- Date Check Script --}}
        <script>
            var CurrentDate = new Date();
            var regDate = new Date("2023-09-18");
            var closeDate = new Date("2024-10-20");
            var btnReg = document.getElementById('btnReg');

            function checkTime() {
                if (btnReg) {
                    if (CurrentDate >= regDate) {
                        btnReg.removeAttribute("disabled");
                    }
                    if (CurrentDate >= closeDate) {
                        btnReg.classList.add("hidden");
                    }
                }
            }
            
            checkTime();
            setInterval(checkTime, 1000);
        </script>

        {{-- Smooth Scroll Functions --}}
        <script>
            function scrollToTimeline() {
                const timelineSection = document.getElementById('timeline');
                if (timelineSection) {
                    timelineSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }

            function scrollToDownload() {
                const handbookSection = document.getElementById('download');
                if (handbookSection) {
                    handbookSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        </script>

    </body>
@endsection