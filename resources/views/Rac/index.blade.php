@extends('layouts.main')

@section('container')
<body class="text-white">
    {{-- <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}
    <section class="flex min-h-screen flex-col justify-center items-center text-center font-['Brody_Rawk',sans-serif]">
        <div class="w-full pt-16 relative">
            <h1 class="text 2xl md:text-4xl s:text-[1.5em] font-bold mb-5 mt-auto text-[#d61525] p-6" style="letter-spacing: 5px;" data-aos="fade-up">Radio Announcing Competition</h1>
            <img class="w-full h-96 md:h-115 object-cover object-center -z-10" src="{{ asset('images/FOTO RAC 2.webp') }}" alt="">
        </div>
<nav class="flex flex-col md:flex-row justify-between w-full max-w-2xl mb-8 mt-5 s:text-[0.5em] space-y-2 md:space-y-0 md:space-x-4 px-4">
    <button class="flex-1 bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black tracking-[1px]" onclick="scrollToDownload()">HANDBOOK & PENDAFTARAN</button>
    <button class="flex-1 bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black tracking-[1px]" onclick="scrollToTimeline()">TIMELINE</button>  
</nav>
        <p class="mb-4 mt-auto animate-bounce">Scroll Down</p>
        <svg class="w-6 h-20 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon" onClick="scrollDown()">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </section>

    <section id="desc" class="flex flex-col md:flex-row items-center justify-center font-['Brody_Rawk',sans-serif] relative bg-black">
        <div class="w-full md:w-1/2 h-1/2 md:h-full relative">
            <img src="{{ asset('images/IGGY BINGUNG.webp') }}" class="w-full h-full object-cover opacity-100 bg-gradient-to-b from-transparent to-[#FA0202]" alt="IGGY BINGUNG">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        
        <div class="w-full md:w-1/2 h-1/2 md:h-full flex flex-col justify-center p-6 md:p-12 text-white space-y-6 md:space-y-8 relative z-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold uppercase tracking-wider leading-tight text-[#d61525]" data-aos="fade-up" data-aos-delay="100">
                Radio Announcing Competition
            </h2>
            <p class="text-sm sm:text-base md:text-lg leading-relaxed tracking-wide font-ltmuseumreg" data-aos="fade-up" data-aos-delay="150">
                Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. Lomba ini merupakan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk memperluas wawasan dan mengasah kemampuan di dunia broadcasting.
            </p>
            <p class="text-sm sm:text-base md:text-lg leading-relaxed tracking-wide font-ltmuseumreg" data-aos="fade-up" data-aos-delay="200">
                Kompetisi ini sesuai dengan nilai utama RADIOACTIVE 2024, yaitu “Surviving the Maze”. Lomba ini mengasah kreativitas dalam membuat siaran, serta menggambarkan perjuangan manusia dalam menghadapi rintangan kehidupan.
            </p>
            <p class="text-sm sm:text-base md:text-lg leading-relaxed tracking-wide" data-aos="fade-up">
            <span class="absolute bottom right-6 text-[#d61525] text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold" data-aos="fade-up" data-aos-delay="250">
                RAC
            </span>
            </p>
        </div>
    </section>
    
    <section class="items-center justify-between max-w-5xl mx-auto mt-10 p-4 font-ltmuseum">
        <div id="title" class="text-center my-8 px-4">
            <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl italic font-brodyrawk tracking-[4px]">THE JUDGES</h1>
        </div>
        <div id="judges" class="flex flex-col sm:flex-row justify-center gap-6 ">
            <div id="judge1" class="p-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="rotating-border w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 mx-auto mb-4 rounded-full relative overflow-hidden">
                    <div class="absolute inset-0.5 bg-black rounded-full z-10"></div>
                    <img src="{{ asset('images/reza_bima.webp') }}" class="absolute inset-0.5 w-[calc(100%-4px)] h-[calc(100%-4px)] object-cover object-center rounded-full z-20" alt="Reza Bima">
                </div>
                <h2 class="mb-2 text-lg sm:text-xl">Reza Bima</h2>
            </div>
            <div id="judge2" class="p-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="rotating-border w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 mx-auto mb-4 rounded-full relative overflow-hidden">
                    <div class="absolute inset-0.5 bg-black rounded-full z-10"></div>
                    <img src="{{ asset('images/dina_janidya.webp') }}" class="absolute inset-0.5 w-[calc(100%-4px)] h-[calc(100%-4px)] object-cover object-center rounded-full z-20" alt="Dina Janidya">
                </div>
                <h2 class="mb-2 text-lg sm:text-xl">Dina Janidya</h2>
            </div>
        </div>
    </section>
    
    <section class="max-w font-ltmuseumreg p-4" id="timeline">
        <div id="title" class="text-center my-8 px-4">
            <h1 class="m-[0.3em] md:text-[3em] italic mt-15 font-brodyrawk" style="letter-spacing: 5px;">TIMELINE RADIO ANNOUNCING COMPETITION 2024</h1>
            <p class="text-white md:text-xl tracking-widest">DARE TO STRIVE</p>
        </div>
        <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
            <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
            <div class="mx-auto max-w-[34.15em]">
                <div id="checkpoint" class="border-2 border-white m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="text-[#D61525]">2 - 30 September 2024 : <text class="text-white">Pendaftaran</text></h2>
                        {{-- <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p> --}}
                    </div>
                </div>
                <div id="checkpoint" class="border-2 border-white m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="text-[#D61525]">5 Oktober 2024: <text class="text-white">Technical Meeting</text></h2>
                        {{-- <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p> --}}
                    </div>
                </div>
                <div id="checkpoint" class="border-2 border-white m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                    <div>
                        <h2 class="text-[#D61525]">12 Oktober 2024: <text class="text-white">Pelaksanaan Lomba Rac</text></h2>
                        {{-- <p class="leading-[27px] text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="max-w font-brodyrawk">
        <div class="flex flex-col md:flex-row justify-center sm:py-16 items-center mt-35" data-aos="fade-up">
            <div id="button1" class="my-3">
                <a href="https://drive.google.com/file/d/1Z_lqcidtYFlSIUy-Qr1vr4P1LsmOQjeb/view?usp=drivesdk"
                    class="text-white border-white w-60 md:h-16 p-4 text-sm tracking-[1px] md:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202] no-underline flex items-center justify-center"
                    target="_blank">HANDBOOK
                </a>
            </div>
            <div id="button2" class="my-3">
                <a href="/rac/register" class="no-underline py-4 px-6 flex items-center justify-center">
                    <button disabled id="btnReg"
                        class="disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-60 md:h-16 p-4 text-sm tracking-[1px] md:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202] disabled:text-white flex items-center justify-center">
                        REGISTER HERE
                    </button>
                </a>
            </div>
            
        </div>
    </section>
    <style>
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    
        .rotating-border::before {
            content: '';
            position: absolute;
            z-index: 5;
            left: -50%;
            top: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(
                #FF0000 0deg,
                transparent 40deg,
                transparent 60deg,
                #FF0000 90deg,
                #FF0000 180deg,
                transparent 220deg,
                transparent 240deg,
                #FF0000 270deg,
                #FF0000 360deg
            );
            animation: rotate 4s linear infinite;
        }
    </style>
    
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
    <script>
        function scrollDown() {
            const nextSection = document.querySelector('section:nth-of-type(2)');
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' });
            } else {
                window.scrollTo({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });
            }
        }
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>
@endsection
