@extends('layouts.main')

@section('container')

{{-- PARALLAX BACKGROUND WRAPPER --}}
<div class="">

    {{-- Overlay --}}
    <div class="">

        {{-- CONTENT --}}
        <div class="max-w-7xl mx-auto">

            {{-- HERO SECTION --}}
            <section class="flex min-h-screen flex-col justify-center items-center text-center px-4 font-['Brody_Rawk',sans-serif] relative">

                {{-- Background Decoration --}}
                <div class="absolute inset-0 pointer-events-none" style="
                    background-image: 
                        radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%);
                    z-index: 0;
                "></div>

                <div id="title" class="text-center my-8 px-4 relative z-10">
                    <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px]" style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                        RADIO ANNOUNCING COMPETITION
                    </h1>
                    {{-- Decorative underline --}}
        <div class="w-32 h-0.5 mx-auto mt-2 opacity-80" style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
    </div>
    <p class="md:text-lg max-w-4xl text-base mb-8 font-royale z-10 relative" data-aos="fade-up" data-aos-delay="100">
        Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. 
        Lomba ini merupakan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk 
        memperluas wawasan dan mengasah kemampuan di dunia broadcasting. 
        Kompetisi ini sesuai dengan nilai utama RADIOACTIVE 2025. 
        Lomba ini mengasah kreativitas dalam membuat siaran, serta menggambarkan perjuangan manusia dalam menghadapi rintangan kehidupan.
    </p>

    <p class="mb-4 animate-bounce z-10 relative">Scroll Down</p>
    <svg class="w-6 h-20 animate-bounce z-10 relative" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</section>

            {{-- TIMELINE --}}
            <section class="w-full font-royalecoutureserif px-4 mt-16" id="timeline">
                <div class="text-center px-4 mb-8 sm:mb-12 md:mb-16">
                    <div class="relative flex justify-center items-center min-h-[250px] sm:min-h-[300px] md:min-h-[400px] w-full font-lavish">
                        <span class="absolute text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-gold to-white bg-clip-text blur-xl opacity-60 select-none text-center">
                            TIMELINE
                        </span>
                        <h1 class="relative z-10 glow-text bg-gradient-to-r from-gold to-white bg-clip-text text-transparent text-2xl sm:text-3xl md:text-5xl lg:text-6xl font-extrabold text-center">
                            TIMELINE
                        </h1>
                    </div>
                </div>

                <div class="relative max-w-5xl mx-auto" data-aos="zoom-in-right" data-aos-delay="100">
                    {{-- Vertical Line --}}
                    <div class="absolute hidden md:block left-1/2 top-0 bottom-0 w-1 z-0"
                        style="background: linear-gradient(to bottom, transparent, #f6e79c, transparent); box-shadow: 0 0 10px #f6e79c;">
                    </div>

                    {{-- Timeline Items --}}
                    <div class="space-y-12">
                        {{-- ITEM 1 --}}
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                style="box-shadow: 0 0 15px #f6e79c50;">
                                <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                    style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                    Pendaftaran Radio Announcing Competition
                                </h2>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                    30 Agustus - 2 Oktober 2025
                                </p>
                            </div>
                        </div>

                        {{-- ITEM 2 --}}
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div></div>
                            <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                style="box-shadow: 0 0 15px #f6e79c50;">
                                <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                    style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                    Technical Meeting Radio Announcing Competition
                                </h2>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                    4 Oktober 2025
                                </p>
                            </div>
                        </div>

                        {{-- ITEM 3 --}}
                        <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                            <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                style="box-shadow: 0 0 15px #f6e79c50;">
                                <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                    style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                    Pelaksanaan Radio Announcing Competition
                                </h2>
                                <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                    11 Oktober 2025
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- HANDBOOK --}}
            <section class="min-h-screen flex flex-col justify-center items-center px-4 py-16 relative overflow-hidden">
                <div class="relative z-10 flex flex-col items-center w-full max-w-5xl">
                    <div id="title" class="text-center my-8 px-4 relative z-10">
                        <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px]"
                            style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                            HANDBOOK
                        </h1>
                        {{-- Decorative underline --}}
                        <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                            style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                    </div>
                    <div class="w-full sm:w-[600px] h-[600px] bg-white rounded-md overflow-hidden shadow-lg mb-12"
                        data-aos="zoom-in" data-aos-delay="100">
                        <iframe src="https://drive.google.com/file/d/14iJn1t1djJVTXIiuQWvgExBh6DQ_IQbu/preview"
                            width="100%" height="100%"></iframe>
                    </div>
                </div>

                {{-- CTA --}}
                <a href="https://forms.gle/XTN1WX2vDHp6veNn7" target="_blank" class="no-underline">
                    <div id="title" class="text-center my-8 px-4 relative z-10" data-aos="fade-up">
                        <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px] transition duration-300 hover:text-white"
                            style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;"
                            onmouseover="this.style.color='#ffffff'; this.style.textShadow='0 0 10px #ffffff, 0 0 20px #ffffff';"
                            onmouseout="this.style.color='#f6e79c'; this.style.textShadow='0 0 10px #f6e79c, 0 0 20px #f6e79c';">
                            READY TO TAKE THE CHALLENGE?
                        </h1>
                    </div>
                </a>
            </section>

            {{-- JUDGES --}}
            <section class="items-center justify-between max-w-5xl mx-auto mt-10 p-4 font-lavish relative">
                <div id="title" class="text-center my-8 px-4 relative z-10">
                    <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px]"
                        style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                        JUDGES
                    </h1>
                    {{-- Decorative underline --}}
                    <div class="w-32 h-0.5 mx-auto mt-2 opacity-80" style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                </div>

                <div id="judges" class="flex flex-col sm:flex-row justify-center gap-6 relative z-10">
                    <div id="judge1" class="p-4 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-64 h-64 mx-auto mb-4 relative">
                            <img src="{{ asset('images/reza_bima_nobg.webp') }}" alt="Reza Bima"
                                class="w-44 h-44 object-cover object-top rounded-full absolute top-1/2 left-1/2 z-10 transform -translate-x-1/2 -translate-y-1/2">
                            <img src="{{ asset('images/judgesframe.webp') }}" alt="Frame"
                                class="w-full h-full object-contain absolute inset-0 z-20 pointer-events-none">
                        </div>
                        <h2 class="mb-2 text-lg sm:text-xl">Reza Bima</h2>
                    </div>

                    <div id="judge2" class="p-4 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-64 h-64 mx-auto mb-4 relative">
                            <img src="{{ asset('images/judgesframe.webp') }}" alt="Frame"
                                class="w-full h-full object-contain absolute inset-0 z-20 pointer-events-none">
                            <img src="{{ asset('images/dina_janidya.webp') }}" alt="Dina Janidya"
                                class="w-44 h-44 object-cover object-top rounded-full absolute top-1/2 left-1/2 z-10 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                        <h2 class="mb-2 text-lg sm:text-xl">Dina Janidya</h2>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

{{-- AOS Animation --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>

@endsection