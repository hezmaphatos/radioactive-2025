@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden bg-black h-full">
    {{-- <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}

    <div class="pt-16">
        <img id="banner" class="w-full h-48 md:h-80 object-cover object-center" src="/images/FOTO VO CHALLENGE.webp"
            alt="" />
    </div>

    <div class=" lg:-mb-0 lg:my-16" data-aos="fade-up">
        <h2 id="title" class="font-taruno2 text-white text-center my-10 mx-4">VOICEOVERR CHALLENGE</h2>
        <div id="description" class="px-8 md:px-20 lg:px-80">
            <p class="font-pathway text-sm text-white text-justify md:text-center md:pb-0">Voice Over Challenge
                merupakan salah satu rangkaian acara RADIOACTIVE 2023. Voice Over Challenge bertujuan untuk mengasah
                skill para peserta dalam bidang tarik suara. Dalam challenge ini, peserta tidak dibatasi untuk
                berkreasi. Teknis dari Voice Over Challenge ini adalah peserta dapat melakukan duet melalui media sosial
                RADIOACTIVE. Disisi lain, challenge ini juga dapat meningkatkan awareness untuk rangkaian acara
                berikutnya.</p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center"></p>
        </div>
    </div>

    <div id="tiktok" style="display:block;" class="mt-6" data-aos="fade-up">
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@umnradioactive/video/7279761605825481989"
            data-video-id="7279761605825481989" data-embed-from="oembed" style="max-width: 325px;min-width: 325px;">
            <section> <a target="_blank" title="@umnradioactive"
                    href="https://www.tiktok.com/@umnradioactive?refer=embed">@umnradioactive</a>
                <p>Yuk, ikut lomba Voiceover Challenge yang disponsori oleh BCA Blu sekarang! Lo bisa dapetin hadiah UP
                    TO 500K, loh🤩 Periodenya cuma 18 - 30 September aja, ya! Yakin masih ragu untuk ikutan?😋 <a
                        title="bcablu" target="_blank" href="https://www.tiktok.com/tag/bcablu?refer=embed">#BCABlu</a>
                    <a title="voiceoverchallenge" target="_blank"
                        href="https://www.tiktok.com/tag/voiceoverchallenge?refer=embed">#VoiceoverChallenge</a> <a
                        title="lomba" target="_blank" href="https://www.tiktok.com/tag/lomba?refer=embed">#Lomba</a>
                </p> <a target="_blank" title="♬ original sound - RADIOACTIVE 2023 - RADIOACTIVE 2023"
                    href="https://www.tiktok.com/music/original-sound-RADIOACTIVE-2023-7279761628769929990?refer=embed">♬
                    original sound - RADIOACTIVE 2023 - RADIOACTIVE 2023</a>
            </section>
        </blockquote>
        <script async src="https://www.tiktok.com/embed.js"></script>
    </div>

    <div id="mainGS" class="flex flex-col justify-center items-center my-24" data-aos="fade-up">
        <img class="hidden md:block h-36 px-2" src="/images/TIMELINE-VOC.webp" alt="" />
        <img class="md:hidden w-5/6" src="/images/TIMELINE-VOC-HP.webp" alt="">
    </div>

    <div id="button1" class="flex flex-wrap justify-center md:py-0 items-center mt-8 gap-4" data-aos="fade-up">
        <a target="_" href="https://drive.google.com/file/d/1QmfDasf6RAbZDRiw26iO7ze-FmTkuat-/view?usp=sharing" class="no-underline">
            <button id="handbookbtn"
                class="bg-[#0E0EC0] disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-80 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0] disabled:text-white">
                DOWNLOAD HANDBOOK
            </button>
        </a>
        <a href="/voc/submission" class="no-underline hidden">
            <button id="submitbtn" disabled
                class="bg-[#0E0EC0] disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-80 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0] disabled:text-white">
                SUBMIT YOUR VIDEO
            </button>
        </a>
    </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        <script>
             var CurrentDate = new Date();
             var HandbookDate = new Date("2024-09-18");
             var handbook = document.getElementById("handbookbtn");
             var submitbtn = document.getElementById('submitbtn')

             function checkTime() {
                 if (CurrentDate >= HandbookDate) {
                      handbookbtn.removeAttribute("disabled");
                     submitbtn.removeAttribute("disabled");
                 }
             }

             checkTime();
             setInterval(checkTime, 1000);
        </script>
</body>

<style>
    /* #banner {
      -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
      mask-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0));
    } */
</style>
@endsection
