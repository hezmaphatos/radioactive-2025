@extends('layouts.main')

@section('container')
<body class="text-white" style="
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/footerbg.webp') }}') no-repeat center center fixed;
  background-size: cover;
  background-blend-mode: darken;
">
    
<section class="flex min-h-screen flex-col justify-center items-center text-center px-4 font-['Brody_Rawk',sans-serif] relative">

    {{-- Background Decoration --}}
    <div class="absolute inset-0 pointer-events-none" style="
        background-image: 
            radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%);
        z-index: 0;
    "></div>

    <div id="title" class="text-center my-8 px-4 relative z-10">
        <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale tracking-[4px]" style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
            RADIO ANNOUNCING COMPETITION
        </h1>
        {{-- Decorative underline --}}
        <div class="w-32 h-0.5 mx-auto mt-2 opacity-80" style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
    </div>

    <p class="md:text-lg max-w-4xl text-base mb-8 font-royale z-10 relative" data-aos="fade-up" data-aos-delay="100">
        Radio Announcing Competition merupakan rangkaian acara utama RADIOACTIVE. 
        Lomba ini merupakan ajang untuk siswa SMA dan mahasiswa se-Jabodetabek untuk 
        memperluas wawasan dan mengasah kemampuan di dunia broadcasting. 
        Kompetisi ini sesuai dengan nilai utama RADIOACTIVE 2024, yaitu “Surviving the Maze”. 
        Lomba ini mengasah kreativitas dalam membuat siaran, serta menggambarkan perjuangan manusia dalam menghadapi rintangan kehidupan.
    </p>

    <p class="mb-4 animate-bounce z-10 relative">Scroll Down</p>
    <svg class="w-6 h-20 animate-bounce z-10 relative" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</section>

<section class="items-center justify-between max-w-5xl mx-auto mt-10 p-4 font-ltmuseum relative">
    {{-- Handbook Background Decoration --}}
    <div class="absolute inset-0 pointer-events-none" style="
        background-image: 
            radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%);
        z-index: 0;
    "></div>

    <div id="title" class="text-center my-8 px-4 relative z-10">
        <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale tracking-[4px]" style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
    HANDBOOK
    </h1>
        {{-- Decorative underline --}}
        <div class="w-32 h-0.5 mx-auto mt-2 opacity-80" style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
    </div>
    </section>

<section class="items-center justify-between max-w-5xl mx-auto mt-10 p-4 font-ltmuseum relative">
    {{-- Judges Background Decoration --}}
    <div class="absolute inset-0 pointer-events-none" style="
        background-image: 
            radial-gradient(circle at 30% 70%, rgba(246, 231, 156, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 70% 30%, rgba(246, 231, 156, 0.06) 0%, transparent 50%);
        z-index: 0;
    "></div>

    <div id="title" class="text-center my-8 px-4 relative z-10">
        <h1 class="m-[0.3em] text-2xl sm:text-3xl md:text-4xl font-royale tracking-[4px]" style="color: #f6e79c; text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
            JUDGES
        </h1>
        {{-- Decorative underline --}}
        <div class="w-32 h-0.5 mx-auto mt-2 opacity-80" style="background: linear-gradient(90deg, transparent, #F6E79C, transparent);"></div>
    </div>

    <div id="judges" class="flex flex-col sm:flex-row justify-center gap-6 relative z-10">
    <div id="judge1" class="p-4 text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="w-64 h-64 mx-auto mb-4 relative">
            <img src="{{ asset('images/reza_bima_nobg.webp') }}" alt="Reza Bima" class="w-44 h-44 object-cover object-top rounded-full absolute top-1/2 left-1/2 z-10 transform -translate-x-1/2 -translate-y-1/2">
            <img src="{{ asset('images/judgesframe.webp') }}" alt="Frame" class="w-full h-full object-contain absolute inset-0 z-20 pointer-events-none">
        </div>
        <h2 class="mb-2 text-lg sm:text-xl">Reza Bima</h2>
    </div>
    <div id="judge2" class="p-4 text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="w-64 h-64 mx-auto mb-4 relative">
            <img src="{{ asset('images/judgesframe.webp') }}" alt="Frame" class="w-full h-full object-contain absolute inset-0 z-20 pointer-events-none">
            <img src="{{ asset('images/dina_janidya.webp') }}" alt="Dina Janidya" class="w-44 h-44 object-cover object-top rounded-full absolute top-1/2 left-1/2 z-10 transform -translate-x-1/2 -translate-y-1/2">
        </div>
        <h2 class="mb-2 text-lg sm:text-xl">Dina Janidya</h2>
    </div>
</div>
    </section>

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

</body>
@endsection