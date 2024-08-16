<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023</title>

</head>


<div>
    <video autoplay loop muted class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover"
        loading="lazy">
        <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
</div>

<div id="section-1" class="pt-32 max-w-4xl mx-auto">
    <div data-aos="zoom-in" data-aos-duration="3000" data-aos-anchor-placement="center-center"
        class="flex flex-col md:flex-row items-center justify-center gap-4">
        <p class="text-center font-brody text-base text-white z-20 tracking-12">THE MOST SPECTACULAR ANNUAL EVENT BY
        </p>
        <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp" alt="UMN Radio Logo">
@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden bg-black">
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
    <div class="relative flex flex-col items-center" data-aos="fade-up" data-aos-duration="3000">
        <img class="object-cover -mt-4 md:-mt-28 z-0" src="images/logo.png" alt="background logo" />
        <video autoplay loop muted class="object-cover -mt-4 md:mt-0 z-30 w-[640px] absolute"
            src="images/BACKGROUND_VIDEO.webm" loading="lazy" alt="logo video">
            <source src="images/BACKGROUND_VIDEO.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div id="about-us" class="flex flex-col justify-center items-center h-screen mt-0 mb-0 px-4 sm:px-8" data-aos="fade-up" data-aos-duration="1500">
    <h4 class="font-brody text-5xl sm:text-6xl md:text-8xl text-white text-center my-6 sm:my-12 tracking-wider">ABOUT US</h4>
    <div class="px-4 sm:px-8 md:px-20 lg:px-48">
        <p class="font-museum text-base sm:text-lg md:text-xl text-white text-justify md:text-center tracking-wider">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel cursus nisi. Fusce dictum maximus eros.
            Mauris convallis nunc non odio lobortis tincidunt. Vestibulum ultrices vel lectus a pharetra. Nullam at
            molestie mauris, posuere accumsan eros. Aenean congue eget massa id sollicitudin.
        </p>
    </div>
</div>


<div id="marquee-section" class="">
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
        <div class="marquee marquee2 marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8"> DARE TO STRIVE
                DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE </span>
        </div>
    </div>
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w marquee-reverse">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
    </div>
</div>

<div id="marquee-section" class="mt-8 mb-16">
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
  
    <div id="section-1" class="pt-24 max-w-4xl mx-auto">
        <div data-aos="fade-up" class="flex flex-col md:flex-row items-center justify-center gap-4">
            <p class="text-center font-taruno text-xs text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp">
        </div>
        <div class="marquee marquee2 marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8"> DARE TO STRIVE
                DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE </span>
        </div>
    </div>
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w marquee-reverse">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
    </div>
</div>

<!-- <div id="upcoming-events" class="mt-8 lg:mb-0 lg:my-16 relative" data-aos="fade-up" data-aos-duration="3000" >
        <h4 class="font-brody md:text-3xl text-white text-center my-12 tracking-8">UPCOMING EVENTS</h4>
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
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
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO VO CHALLENGE.webp" alt="Voiceover Challenge">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Voiceover</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Challenge</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
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
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO RAC.webp" alt="Announcing Competition">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Announcing</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Competition</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
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
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO CLOSING NIGHT.webp" alt="Closing Night">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Closing</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Night</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="absolute top-1/2 transform -translate-y-1/2 left-4 lg:left-10 z-10">
                <button id="prev" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">←</button>
            </div>
            <div class="absolute top-1/2 transform -translate-y-1/2 right-4 lg:right-10 z-10">
                <button id="next" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">→</button>
            </div>
        </div>
    </div> -->

<section class="min-h-screen max-w font-['LT_Museum',sans-serif] p-4" id="timeline">
    <div id="title" class="text-center my-8 px-4">
        <h1 class="font-brody md:text-3xl text-white text-center my-12 tracking-8 m-[0.3em] md:text-[3em] italic"
            style="letter-spacing: 5px;">GENERAL TIMELINE</h1>
        <p class="text-white md:text-xl tracking-widest">------</p>
    </div>
    <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
        <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
        <div class="mx-auto max-w-[34.15em]">
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 1 : Pendaftaran</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 2 : Seleksi</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<div id="partners" class="-mb-20 md:-mb-0 md:my-24 mt-16" data-aos="fade-up">
    <div class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
        <!-- Text -->
        <div data-aos="zoom-in-right" data-aos-delay="400"
            class="w-full lg:w-1/2 mb-12 lg:mb-0 lg:text-left text-center">
            <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">PARTNERS</h2>
        </div>
        <!-- Images -->
        <div class="w-full lg:w-1/2">
            <div class="grid grid-cols-4 gap-4">
                <img data-aos="zoom-in-right" data-aos-delay="200" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/logo-imkom.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="400" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/ubradio.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="600" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/ultimagz.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="800" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/funradio.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1000" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/radiountar.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1200" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/LOGO-ERAFM-UNJ.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1400" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/infolombasch.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1600" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/medialomba.webp" alt="" />
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
                <img class="h-auto md:w-40 md:mx-8 mb-2 rounded bg-[#ffffff7d]" src="/images/moestopo.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/Se7enline-Radio.webp" alt="" />
            </div>
        </div>
    </div>
</div>

<!-- Sponsors Section -->
<div id="sponsors" class="py-16">
    <div data-aos="zoom-in-right" data-aos-delay="400"
        class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
        <!-- Images -->
        <div class="w-full lg:w-1/2">
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
            </div>
        </div>
        <!-- Text -->
        <div class="w-full lg:w-1/2 mt-12 lg:mt-0 lg:text-right text-center">
            <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">SPONSORS</h2>
        </div>
    </div>
</div>


<div id="after" class="-mb-20 md:-mb-0 md:my-24" data-aos="fade-up">
    <h2 class="font-brody md:text-3xl text-white text-center my-12 tracking-8">AFTER MOVIE</h2>
    <div class="w-full flex justify-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/noafJ76PHeM?si=x_X9yxOawXxH8Id2"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
</div>

<footer class="bg-gradient-to-b from-transparent to-[#0E0EC0] pt-56 pb-16">
    <div class="flex flex-col w-full justify-center md:items-center md:flex-row">
        <div class="flex justify-center lg:container w-full">
            <img src="/images/LOGO RA.webp" alt="" class="h-40 object-contain">
        </div>
        <div class="lg:container flex flex-col justify-evenly py-3 my-10 gap-4 text-center md:text-left">
            <a href="/"
                class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                <h5 class="text-xs font-taruno font-medium text-white">
                    <b>HOME</b>
                </h5>
            </a>
            <a href="/voc"
                class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                <h5 class="text-xs font-taruno font-medium text-white">
                    <b>VO CHALLENGE</b>
                </h5>
            </a>
            <a href="/rac"
                class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                <h5 class="text-xs font-taruno font-medium text-white">
                    <b>RAC</b>
                </h5>
            </a>
            <a href="/closing-night"
                class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                <h5 class="text-xs font-taruno font-medium text-white">
                    <b>CLOSING NIGHT</b>
                </h5>
            </a>
            <a href="https://merch.umnradioactive.com/"
                class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                <h5 class="text-xs font-taruno font-medium text-white">
                    <b>MERCHANDISE</b>
                </h5>
            </a>
        </div>
        <div class="mx-auto flex flex-wrap content-center mb-12 md:mb-0">
            <div class="flex space-x-4 mt-4 sm:mt-0">
                <a href="mailto:mediarelation.radioactive@gmail.com" target="_blank" class="text-white">
                    <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M18.821,20.5H5.179A3.683,3.683,0,0,1,1.5,16.821V7.179A3.683,3.683,0,0,1,5.179,3.5H18.821A3.683,3.683,0,0,1,22.5,7.179v9.642A3.683,3.683,0,0,1,18.821,20.5ZM5.179,4.5A2.682,2.682,0,0,0,2.5,7.179v9.642A2.682,2.682,0,0,0,5.179,19.5H18.821A2.682,2.682,0,0,0,21.5,16.821V7.179A2.682,2.682,0,0,0,18.821,4.5Z">
                        </path>
                        <path
                            d="M12,14.209a.5.5,0,0,1-.346-.138L4.286,7.028a.5.5,0,0,1,.691-.723L12,13.018l7.023-6.713a.5.5,0,1,1,.691.723l-7.368,7.043A.5.5,0,0,1,12,14.209Z">
                        </path>
                        <path
                            d="M4.7,17.833a.5.5,0,0,1-.347-.86l5.54-5.31a.5.5,0,0,1,.692.722L5.048,17.694A.5.5,0,0,1,4.7,17.833Z">
                        </path>
                        <path
                            d="M19.3,17.832a.5.5,0,0,1-.346-.139l-5.538-5.308a.5.5,0,0,1,.692-.722l5.538,5.308a.5.5,0,0,1-.346.861Z">
                        </path>
                    </svg>
                </a>
                <a href="https://instagram.com/umnradioactive" target="_blank" class="text-white">
                    <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z">
                        </path>
                        <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                        <path
                            d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z">
                        </path>
                    </svg>
                </a>
                <a href="https://tiktok.com/@umnradioactive" target="_blank" class="text-white">
                    <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z">
                        </path>
                    </svg>
                </a>
                <a href="https://youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" target="_blank" class="text-white">
                    <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex justify-center md:justify-end items-center w-full mb-10 md:mb-0">
            <img src="/images/LOGO UMN RADIO.webp" alt="" class="h-12 lg:h-16">
        </div>
        <div class="flex justify-center w-full">
            <img src="/images/LOGO UMN.webp" alt="" class="h-36 lg:h-40">
        </div>

    </div>
    <div class="flex justify-center align-middle mt-10 text-center">
        <p class="mb-2 text-xs font-taruno font-medium text-white">&copy; UMN RADIOACTIVE 2023</p>
    </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script>
    window.addEventListener('scroll', function () {
        var header = document.getElementById('header');
        if (window.scrollY > 0) {
            header.classList.remove('bg-transparent');
            header.classList.add('bg-[#0E0EC0]');
        } else {
            header.classList.add('bg-transparent');
            header.classList.remove('bg-[#0E0EC0]');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('carousel');
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        let currentIndex = 0;

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        });

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carousel.style.transform = `translateX(${offset}%)`;
        }
    });
</script>

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
        if (CurrentDate >= closeDate) {
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
</body>

</html>
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
