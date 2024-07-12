@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden">
    <div id="button1"
        class="fixed bottom-12 end-4 md:bottom-20 md:end-20 flex justify-center items-center z-50 animate-bounce"
        data-aos="fade-up">
        <a href="/closing-night/#ticket" class="no-underline">
            <button
                class="rounded-[100%] h-[5.5rem] md:h-32 aspect-square bg-[#0E0EC0] text-white border-white font-taruno text-2xs md:text-sm p-2 md:p-4 font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                GET YOUR TICKETS
            </button>
        </a>
    </div>

    <div id="section-1" class="pt-24 max-w-4xl mx-auto">
        <div data-aos="fade-up" class="flex flex-col md:flex-row items-center justify-center gap-4">
            <p class="text-center font-taruno text-xs text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp">
        </div>
        <div class="relative flex flex-col items-center" data-aos="fade-up">
            <img class="object-cover -mt-4 md:-mt-28 z-0" src="images/BACKGROUND LOGO.webp" alt="background logo" />
            <video autoplay loop muted class="object-cover -mt-4 md:-mt-0 z-30 w-[640px] absolute"
                src="images/logo.webm" alt="logo" loading="lazy" />
        </div>
    </div>

    <div id="section2" class="-mt-8 md:-mt-28 mb-16" data-aos="fade-up">
        <h4 class="font-taruno2 md:text-xl text-white text-center my-12">ABOUT US</h4>
        <div class="px-8 md:px-20 lg:px-48">
            <p class="lg:px-44 font-pathway text-sm text-white text-justify md:text-center">RADIOACTIVE merupakan acara
                off air tahunan yang
                diselenggarakan oleh UMN Radio, radio komunitas dari Universitas Multimedia Nusantara.
            </p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center">Dimulai sejak 2015, RADIOACTIVE tahun
                in menjadi kali
                ke-9 acara ini terselenggara. Hal tersebut menandakan bahwa RADIOACTIVE berkembang dengan baik. Lebih
                lanjut, RADIOACTIVE
                diadakan sebagai brand activation untuk terus menjaga eksistensi dari UMN Radio.</p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center">Pada tahun ini, acara kami mengangkat
                tema "RADIOACTIVE
                2023: Revolution" dengan tagline "New Revolution Starts with You", yang ber-fokus pada pengembangan diri
                individu dan mendorong
                mereka untuk berani bertindak demi suatu perubahan dalam diri. Acara kami sebelumnya mengangkat tema
                "RADIOACTIVE 2022: Radiant"
                dengan tagline "Light Up Your Action” yang berfokus pada tindakan anak-anak muda untuk bersinar dan
                memancarkan cahaya positif dari
                diri mereka kepada orang lain di sekitarnya.</p>
            <br>
        </div>
    </div>

    <div id="section3" class="-mb-20 lg:-mb-0 lg:my-16" data-aos="fade-up">
        <h4 class="md:text-xl font-taruno2 text-white text-center my-12">UPCOMING EVENTS</h4>
        <div class="carousel carousel-center flex">
            <div class="carousel-item ml-16 lg:ml-32 border border-white">
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
                            <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO VO CHALLENGE.webp"
                                alt="" />
                            <div
                                class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                <div class="lg:px-4 lg:pb-6 pb-3">
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Voiceover</h3>
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Challenge</h3>
                                </div>
                                <div class="lg:px-4">
                                    <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item border border-white ml-16">
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
                            <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO RAC.webp"
                                alt="" />
                            <div
                                class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                <div class="lg:px-4 lg:pb-6 pb-3">
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Announcing</h3>
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Competition</h3>
                                </div>
                                <div class="lg:px-4">
                                    <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="carousel-item border border-white ml-16 mr-32">
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
                            <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover"
                                src="/images/FOTO CLOSING NIGHT.webp" alt="" />
                            <div
                                class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                <div class="lg:px-4 lg:pb-6 pb-3">
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Closing</h3>
                                    <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">
                                        Night</h3>
                                </div>
                                <div class="lg:px-4">
                                    <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
        </div>
        <div id="section4" class="-mb-20 md:-mb-0 md:my-24" data-aos="fade-up">
            <h2 class="font-taruno2 text-white text-center mb-6 mt-12">EXCLUSIVE MEDIA PARTNER</h2>
            <div class="w-4/6 mb-4 md:w-1/4 items-center justify-center text-center mx-auto md:mb-6">
                <img class="" src="/images/prambors.webp" alt="" />
            </div>

            <h2 class="font-taruno2 text-white text-center mb-6 mt-12">MEDIA PARTNERS</h2>

            <div id="medpar-L"
                class="grid grid-cols-2 w-4/5 md:w-2/5 gap-2 items-center justify-center text-center mx-auto">
                <img class="h-auto max-w-12 md:w-48 md:mx-8 rounded bg-[#ffffff7d]" src="/images/LOGO-BEM-UMN.webp"
                    alt="" />
                <img class="h-auto max-w-12 md:w-48 md:mx-8" src="/images/lsr.webp" alt="" />
            </div>

            <div id="medpar-S"
                class="grid grid-cols-3 md:grid-cols-5 w-4/5 md:w-2/3 gap-2 items-center justify-center text-center mx-auto">
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/logo-imkom.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/ubradio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/ultimagz.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/funradio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/radiountar.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/LOGO-ERAFM-UNJ.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/infolombasch.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/medialomba.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/logo-event.list.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventcampus.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/t-radio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/logo-eventmahasiswa8.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventcenter.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2 rounded bg-[#ffffff7d]" src="/images/eventnetwork.webp"
                    alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/Logo-Eventhunter.id.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/umntv.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/fourtyfiveradio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventapaaja.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/infoevent.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/LOGO-UBV-Radio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2 rounded bg-[#ffffff7d]" src="/images/moestopo.webp"
                    alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/Se7enline-Radio.webp" alt="" />

            </div>
        </div>

        <div id="section5" class="py-20 md:py-0 lg:-mb-0 lg:my-16" data-aos="fade-up">
            <h2 class="font-taruno2 text-white text-center my-12">SPONSORS</h2>

            <div id="sponsor-M"
                class="grid grid-cols-1 w-4/5 md:w-2/5 gap-2 items-center justify-center text-center mx-auto md:mb-6">
                <div class="w-full flex justify-center">

                    <img class="md:w-3/5 w-4/5 md:mx-8 mb-5 rounded bg-[#ffffff7d]" src="/images/somethinc-m.webp"
                        alt="" />
                </div>
            </div>

            <div id="medpar-S"
                class="grid grid-cols-3 md:grid-cols-3 w-11/12 md:w-1/2 gap-2 items-center justify-center text-center mx-auto mb-4 md:mb-6">
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/kino-s.webp" alt="" />
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/panda-s.webp" alt="" />
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/pia100-s.webp" alt="" />
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/snackit-s.webp" alt="" />
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/aice-s.webp" alt="" />
                <img class="h-auto md:w-48 md:mx-8 mb-2" src="/images/blu-s.webp" alt="" />
            </div>

            <div id="medpar-XS"
                class="grid grid-cols-4 md:grid-cols-4 w-11/12 md:w-2/3 gap-2 items-center justify-center text-center mx-auto">
                <img class="h-auto md:w-32 md:mx-8 mb-2" src="/images/artha-xs.webp" alt="" />
                <img class="h-auto md:w-32 md:mx-8 mb-2" src="/images/chuga-xs.webp" alt="" />
                <img class="h-auto md:w-32 md:mx-8 mb-2" src="/images/puyo-xs.webp" alt="" />
                <img class="h-auto md:w-32 md:mx-8 mb-2" src="/images/pandaboo-xs.webp" alt="" />
            </div>
        </div>

        <div id="after" class="-mb-20 md:-mb-0 md:my-24" data-aos="fade-up">
            <h2 class="font-taruno2 text-white text-center mb-6 mt-6">AFTER MOVIE</h2>
            <div class="w-full flex justify-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/noafJ76PHeM?si=x_X9yxOawXxH8Id2" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
@endsection
