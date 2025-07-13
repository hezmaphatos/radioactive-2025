@extends('layouts.main')

@section('container')

    <body class="bg-black text-white font-royale">

        {{-- PARALLAX BACKGROUND WRAPPER --}}
        <div class="bg-fixed bg-center bg-cover bg-no-repeat min-h-screen"
            style="background-image: url('{{ asset('images/mac-bg.jpeg') }}');">

            {{-- Overlay --}}
            <div class="bg-black bg-opacity-70 w-full h-full">

                {{-- CONTENT --}}
                <div class="max-w-7xl mx-auto">

                    {{-- BAGIAN 1 - JUDUL DAN DESKRIPSI --}}
                    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4 py-16">
                        <div id="title" class="text-center my-8 px-4 relative z-10">
                            <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale-serif tracking-[4px]"
                                style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                                MINI ANNOUNCING CHALLENGE
                            </h1>
                            {{-- Decorative underline --}}
                            <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                                style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                        </div>
                        <p class="text-base sm:text-lg max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
                            Mini Announcing Challenge merupakan salah satu rangkaian acara RADIOACTIVE 2025. Challenge ini
                            bertujuan mengasah skill peserta dalam bidang siaran. Peserta bebas berkreasi menggunakan tema
                            dan 3 kata yang dipilih secara acak, sekaligus meningkatkan awareness untuk rangkaian acara
                            berikutnya.
                        </p>
                    </section>

                    {{-- BAGIAN 2 - TIMELINE, HANDBOOK, READY TO TAKE THE CHALLENGE --}}
                    <section
                        class="min-h-screen flex flex-col justify-center items-center px-4 py-16 relative overflow-hidden">
                        <div class="relative z-10 flex flex-col items-center w-full max-w-5xl">

                            {{-- TIMELINE --}}
                            <div id="title" class="text-center my-8 px-4 relative z-10">
                                <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale-serif tracking-[4px]"
                                    style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                                    TIMELINE
                                </h1>
                                {{-- Decorative underline --}}
                                <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                                    style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                            </div>
                            <!-- <p class="text-base sm:text-lg mb-8" data-aos="fade-up" data-aos-delay="100">
                                {{-- isi timeline jika ada --}}
                            </p> -->
                            <div class="bg-black bg-opacity-60 border border-[#f6e79c] p-6 rounded-lg text-center w-full max-w-md mb-12"
                                data-aos="fade-up" data-aos-delay="200">
                                <h3 class="text-xl sm:text-2xl text-[#f6e79c] font-royale-serif mb-2">
                                    2-9 September 2025
                                </h3>
                                <p class="text-sm sm:text-base">
                                    Pendaftaran dibuka melalui Google Form atau kunjungi langsung booth kami.
                                </p>
                            </div>

                            {{-- HANDBOOK --}}
                            <div id="title" class="text-center my-8 px-4 relative z-10">
                                <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale-serif tracking-[4px]"
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

                            {{-- READY TO TAKE THE CHALLENGE --}}
                            <a href="https://forms.gle/XTN1WX2vDHp6veNn7" target="_blank" class="no-underline">
                                <div id="title" class="text-center my-8 px-4 relative z-10" data-aos="fade-up">
                                    <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale-serif tracking-[4px] transition duration-300 hover:text-white"
                                        style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;"
                                        onmouseover="this.style.color='#ffffff'; this.style.textShadow='0 0 10px #ffffff, 0 0 20px #ffffff';"
                                        onmouseout="this.style.color='#f6e79c'; this.style.textShadow='0 0 10px #f6e79c, 0 0 20px #f6e79c';">
                                        READY TO TAKE THE CHALLENGE?
                                    </h1>
                                    {{-- Decorative underline --}}
                                    <!-- <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                                        style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);">
                                    </div> -->
                                </div>
                            </a>

                        </div>
                    </section>

                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
@endsection