@extends('layouts.main')

@section('container')

    <body class=" text-white font-lavish">

        {{-- PARALLAX BACKGROUND WRAPPER --}}
        <div class="">

            {{-- Overlay --}}
            <div class="">

                {{-- CONTENT --}}
                <div class="max-w-7xl mx-auto">

                    {{-- BAGIAN 1 - JUDUL DAN DESKRIPSI --}}
                    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4 py-16">
                        <div id="title" class="text-center my-8 px-4 relative z-10">
                            <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px]"
                                style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                                MINI ANNOUNCING CHALLENGE
                            </h1>
                            {{-- Decorative underline --}}
                            <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                                style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                        </div>
                        <p class="text-base sm:text-lg max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
                            Mini Announcing Challenge merupakan salah satu rangkaian acara Radioactive 2025. Mini Announcing
                            Challenge bertujuan untuk mengasah skill para peserta dalam bidang penyiaran. Dalam challenge
                            ini, peserta tidak dibatasi untuk berkreasi. Teknis dari Mini Announcing Challenge ini adalah
                            peserta dapat melakukan siaran salah satu program yang ada di UMN Radio. Peserta akan diberikan
                            pilihan kata yang wajib untuk disebutkan di dalam siarannya. Di sisi lain, challenge ini juga
                            dapat meningkatkan awareness untuk acara selanjutnya
                        </p>
                    </section>

                    {{-- BAGIAN 2 - TIMELINE, HANDBOOK, READY TO TAKE THE CHALLENGE --}}
                    <section
                        class="min-h-screen flex flex-col justify-center items-center px-4 py-16 relative overflow-hidden">
                        <div class="relative z-10 flex flex-col items-center w-full max-w-5xl">

                            {{-- TIMELINE --}}
                            <div id="title" class="text-center my-8 px-4 relative z-10">
                                <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px]"
                                    style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
                                    TIMELINE
                                </h1>
                                {{-- Decorative underline --}}
                                <div class="w-32 h-0.5 mx-auto mt-2 opacity-80"
                                    style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
                            </div>
                            <div class="relative max-w-5xl mx-auto" data-aos="zoom-in-right" data-aos-delay="100">
                                <!-- Vertical Line -->
                                <div class="absolute hidden md:block left-1/2 top-0 bottom-0 w-1 z-0"
                                    style="background: linear-gradient(to bottom, transparent, #f6e79c, transparent); box-shadow: 0 0 10px #f6e79c;">
                                </div>

                                <!-- Timeline Items -->
                                <div class="space-y-12">

                                    <!-- ITEM 1 -->
                                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                        <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                            style="box-shadow: 0 0 15px #f6e79c50;">
                                            <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                                style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                                Pendaftaran Mini Announcing Challenge
                                            </h2>
                                            <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                                1-9 September 2025
                                            </p>
                                        </div>
                                        <div></div>
                                    </div>

                                    <!-- ITEM 2 -->
                                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                        <div></div>
                                        <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                            style="box-shadow: 0 0 15px #f6e79c50;">
                                            <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                                style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                                Pre-event Mini Announcing Challenge
                                            </h2>
                                            <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                                1-4 September 2025
                                            </p>
                                        </div>
                                    </div>

                                    <!-- ITEM 3 -->
                                    <div class="md:grid md:grid-cols-2 md:gap-8 items-center">
                                        <div class="border border-[#f6e79c] rounded-2xl p-4 sm:p-6 bg-black bg-opacity-40 backdrop-blur-md text-white shadow-lg"
                                            style="box-shadow: 0 0 15px #f6e79c50;">
                                            <h2 class="mb-2 text-sm sm:text-base md:text-lg font-bold"
                                                style="color:#f6e79c; text-shadow:0 0 8px #f6e79c;">
                                                Pelaksanaan Mini Announcing Challenge
                                            </h2>
                                            <p class="text-xs sm:text-sm md:text-base text-gray-200">
                                                2-9 September 2025
                                            </p>
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>

                            {{-- HANDBOOK --}}
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

                            {{-- READY TO TAKE THE CHALLENGE --}}
                            <a href="https://forms.gle/XTN1WX2vDHp6veNn7" target="_blank" class="no-underline">
                                <div id="title" class="text-center my-8 px-4 relative z-10" data-aos="fade-up">
                                    {{-- <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-lavish tracking-[4px] transition duration-300 hover:text-white"
                                        style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;"
                                        onmouseover="this.style.color='#ffffff'; this.style.textShadow='0 0 10px #ffffff, 0 0 20px #ffffff';"
                                        onmouseout="this.style.color='#f6e79c'; this.style.textShadow='0 0 10px #f6e79c, 0 0 20px #f6e79c';">
                                        READY TO TAKE THE CHALLENGE?
                                    </h1> --}}
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