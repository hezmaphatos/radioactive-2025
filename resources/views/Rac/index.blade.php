@extends('layouts.main')

@section('container')
<body class="text-white">
    <section class="flex min-h-screen flex-col justify-center items-center text-center px-4 font-['Brody_Rawk',sans-serif]">
        <div class="w-full pt-16 relative">
            <h1 class="text 2xl md:text-4xl s:text-[1.5em] font-bold mb-8 mt-auto text-red-800 p-6" style="letter-spacing: 5px;" data-aos="fade-up">Radio Announcing Competition</h1>
            <img class="w-full h-48 md:h-80 object-cover object-center -z-10" src="{{ asset('images/tes foto rac.jpg') }}" alt="">
        </div>
        <nav class="flex flex-col md:flex-row justify-between w-full max-w-2xl mb-8 mt-5 s:text-[0.5em] ">
            <a href="#" class="no-underline text-white md:text-base font-['LT_Museum',sans-serif] hover:text-red-500" onclick="scrollToDownload()">HANDBOOK & PENDAFTARAN</a>
            <a href="#" class="no-underline text-white md:text-base font-['LT_Museum',sans-serif] hover:text-red-500" onclick="scrollToTimeline()">TIMELINE</a>
        </nav>
        <p class="mb-4 mt-auto animate-bounce">Scroll Down</p>
        <svg class="w-6 h-20 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </section>

    <section id="desc" class="min-h-screen flex items-center justify-center font-['Brody_Rawk',sans-serif]" data-aos="slide-up" data-aos-delay="200">
        <div class="flex items-center text-justify opacity-50">
            <img src="{{ asset('images/IGGY BINGUNG.png') }}" class="grid grid-cols-2 gap-2 place-content-start w-65 h-48 bg-gradient-to-b from-transparent to-[#FA0202]">
            <p class="text-[0.7em] max-w-4xl sm:text-xl m-6 justify-center" style="letter-spacing: 5px;" data-aos="slide-up" data-aos-delay="50">
                Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. Lomba ini merupa kan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk memperluas wawasan dan mengasah kemampuan di dunia broadcasting. 

                Radio Announcing Competition ini memiliki konsep yang sesuai dengan nilai utama RADIOACTIVE 2024, yaitu “Surviving the Maze”. Tujuan dari lomba ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan secara tidak langsung memberikan informasi hingga mengajak para peserta untuk menggambarkan perjuangan manusia dalam menghadapi rintangan dan lika-liku kehidupan.
            </p>
        </div>
        <div class="absolute bottom-10 right-10 z-10">
            <span class="text-red-800 text-6xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-10xl font-bold" data-aos="fade-up" data-aos-delay="100">RAC</span>
        </div>
    </section>

    <section class="min-h-screen items-center justify-between max-w-5xl mx-auto mt-40 p-4 font-['LT_Museum',sans-serif]">
        <div id="title" class="text-center my-8 px-4">
            <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl italic">THE JUDGES</h1>
        </div>
        <div id="judges" class="flex flex-col sm:flex-row justify-center gap-6 mt-10">
            <div id="judge1" class="p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/gojo satoru.webp') }}" class="w-28 h-28 sm:w-32 sm:h-32 mx-auto mb-4 rounded">
                <h2 class="mb-2">Judge 1</h2>
            </div>
            <div id="judge2" class="p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/tony-stark.png') }}" class="w-28 h-28 sm:w-32 sm:h-32 mx-auto mb-4 rounded">
                <h2 class="mb-2">Judge 2</h2>
            </div>
        </div>
    </section>
    <section class="min-h-screen max-w font-['LT_Museum',sans-serif] p-4" id="timeline">
        <div id="title" class="text-center my-8 px-4">
            <h1 class="m-[0.3em] md:text-[3em] italic" style="letter-spacing: 5px;">TIMELINE RADIO ANNOUNCING COMPETITION 2024</h1>
            <p class="text-white md:text-xl tracking-widest">------</p>
        </div>
        <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
            <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
            <div class="mx-auto max-w-[34.15em]">
                <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="mb-2">Date 1 : Pendaftaran</h2>
                        <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p>
                    </div>
                </div>
                <div id="checkpoint" class="border-2 border-white pl-12 m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="mb-2">Date 2 : Seleksi</h2>
                        <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p>
                    </div>
                </div>
                <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                        <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="download" class="min-h-screen max-w font-['Brody_Rawk',sans-serif] pt-56">
        <div class="flex flex-col md:flex-row justify-center sm:py-16 items-center mt-15" data-aos="fade-up">
            <div id="button1" class="my-3">
                <a target="_"
                    href="https://drive.google.com/file/d/1gczHFV8MbNXSiDMOPcF3sCDbENeUkKwU/view?usp=drivesdk"
                    class="no-underline py-4 px-6">
                    <button
                        class="text-white border-white w-60 md:h-16 p-4 text-2xs md:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202]">
                        DOWNLOAD HANDBOOK
                    </button>
                </a>
            </div>
            <div id="button2" class="my-3">
                <a href="/rac/register" class="no-underline py-4 px-6">
                    <button disabled id="btnReg"
                        class="disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-60 md:h-16 p-4 text-2xs md:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202] disabled:text-white">
                        REGISTER HERE
                    </button>
                </a>
            </div>
        </div>
    </section>
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
        <script>
        function scrollToTimeline() {
            const timelineSection = document.getElementById('timeline');
            timelineSection.scrollIntoView({ behavior: 'smooth' });
        }
        function scrollToDownload() {
            const handbookSection = document.getElementById('download');
            handbookSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>
@endsection
