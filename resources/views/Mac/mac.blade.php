@extends('layouts.main')

@section('container')
<body class="text-white bg-black">


<section class="flex min-h-screen flex-col justify-center align-middle items-center text-center px-4 font-['Brody_Rawk',sans-serif]">
    <h1 class="text-[24px] md:text-[48px] font-bold mb-8 text-[#d61525] mt-20" style="letter-spacing: 5px;" data-aos="fade-up">Mini Announcing Challenge</h1>
    <p class="md:text-lg max-w-4xl text-base mb-8 font-ltmuseumreg" data-aos="fade-up" data-aos-delay="100">
        Mini Annoucing Challenge merupakan salah satu rangkaian acara RADIOACTIVE 2024. Mini Annoucing Challenge bertujuan untuk mengasah skill para peserta dalam bidang siaran. Dalam challenge ini, peserta tidak dibatasi untuk berkreasi. Teknis dari Mini Annoucing Challenge ini adalah peserta dapat siaran menggunakan tema dan 3 kata yang sudah dipilih secara acak. Disisi lain, challenge ini juga dapat meningkatkan awareness untuk rangkaian acara berikutnya.
    </p>
    <nav class="flex flex-col sm:flex-row justify-between w-full max-w-2xl mb-8 text-[15px] sm:text-[20px] overflow-x-hidden">
        <a class="no-underline py-4 px-6 sm:px-2" onclick="scrollToDownload()">
            <button class="text-white border-white w-full sm:w-60 h-12 sm:h-16 p-2 sm:p-4 text-2xs sm:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202]">
                HANDBOOK & PENDAFTARAN
            </button>
        </a>
        <a class="no-underline py-4 px-6 sm:px-2 mt-2 sm:mt-0" onclick="scrollToTimeline()">
            <button class="text-white tracking-[1px] border-white w-full sm:w-60 h-12 sm:h-16 p-2 sm:p-4 text-2xs sm:text-sm font-bold border-2 hover:bg-[#0F0F0F] hover:text-[#FA0202]">
                TIMELINE
            </button>
        </a>
    </nav>
    
    <p class="mb-4 mt-auto animate-bounce">Scroll Down</p>
    <svg class="w-6 h-20 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</section>

<section class="relative bg-black min-h-screen flex items-center justify-center font-['Brody_Rawk',sans-serif]" id="download">
    <div class="absolute inset-0 h-[100%]" data-aos="fade-right" data-aos-delay="500">
        <img src="images/FOTO MAC.png" alt="Background Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="absolute flex left-0 bottom-5 opacity-100">
        <button class="bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black">Handbook</button>
        <button class="bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black">Pendaftaran</button>
    </div>
    <div class="absolute bottom-10 right-5 md:right-10 z-10">
        <span class="text-[#d61525] text-5xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-10xl font-bold" data-aos="fade-up" data-aos-delay="100">MAC</span>
    </div>
</section>

<section class="min-h-screen timeline max-w font-['LT_Museum',sans-serif]" id="timeline">
    <div id="title" class="text-center my-10">
        <h1 class="md:m-10 m-4 md:text-5xl italic font-brodyrawk" style="letter-spacing: 5px;">TIMELINE MINI ANNOUNCING CHALLENGE 2024</h1>
        <p class="text-white md:text-xl tracking-widest font-ltmuseum">DARE TO STRIVE</p>
    </div>
    <div class="relative font-ltmuseumreg" data-aos="zoom-in-right" data-aos-delay="100">
        <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
        <div class="mx-auto max-w-[65%] m-s:max-w-[34.15em]">
            <div id="checkpoint" class="border-2 border-white m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2 text-[#D61525]">2 - 9 September 2024 : <text class="text-white">Pendaftaran</text></h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Pendaftaran dapat melalui form atau mengunjungi langsung dibooth
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 2 : Seleksi</h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
    function scrollToTimeline() {   
        const timelineSection = document.getElementById('timeline');
        timelineSection.scrollIntoView({ behavior: 'smooth' });
    }
    function scrollToDownload() {
        const downloadSection = document.getElementById('download');
        downloadSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection
