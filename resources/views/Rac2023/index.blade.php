<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023</title>
</head>

<body class="antialiased bg-black min-h-screen">
    {{-- <div>
        <video autoplay loop muted class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover"
            loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}
    <nav id="header" class="fixed navbar bg-transparent justify-center gap-16 z-40 transition-all duration-700">
        <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
            href="/">HOME</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">VO
            CHALLENGE</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">RAC</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
            href="ticket">CLOSING
            NIGHT</a>
        @auth
            <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/logout">LOGOUT</a>
        @endauth
    </nav>

    <div id="banner" class="w-full">
        <img class="banner-image w-full object-cover" src="{{ asset('images/FOTO RAC.webp') }}" alt="">
    </div>

    <div id="description" class="my-12 mb-28" data-aos="fade-up">
        <h4 class="font-taruno2 text-3xl text-white text-center mt-12 mb-8">RADIO ANNOUNCING COMPETITION</h4>
        <div class="px-8 md:px-20 lg:px-48">
            <p class="lg:px-44 font-pathway text-lg text-white text-justify ">Radio Announcing Competition merupakan
                rangkaian acara utama RADIOACTIVE. Lomba ini merupakan ajang untuk siswa SMA dan mahasiswa
                se-Jabodetabek untuk memperluas wawasan dan mengasah kemampuan di dunia broadcasting Radio Announcing
                Competition ini memiliki konsep yang sesuai dengan nilai utama RADIOACTIVE 2023, yaitu get out from
                comfort zone. Tujuan dari lomba ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan
                secara tidak langsung memberikan informasi hingga mengajak para peserta untuk keluar dari zona nyaman
                mereka.
            </p>
        </div>
    </div>

    <div id="judges" class="flex flex-col justify-center items-center my-16">
        <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-12" data-aos="fade-up">THE JUDGES</h4>
        <div id="judges" class="flex flex-col md:flex-row gap-12">
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-80 md:h-96" src="images/BACKGROUND LOGO.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">SHANDY LUO</h4>
            </div>
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-80 md:h-96" src="images/BACKGROUND LOGO.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">BELLA PRAMBORS</h4>
            </div>
        </div>
    </div>

    {{-- <div id="timeline" class="hidden md:flex flex-col justify-center items-center my-32 mb-28" data-aos="fade-up">
        <img class="md:h-96 sm:h-0 px-2 max-w-[90%] object-contain" src="/images/TIMELINE RAC.png" alt="" />
    </div>

    <div id="timelineHP" class="flex flex-col justify-center items-center my-32 mb-28 md:hidden" data-aos="fade-up">
        <img class="w-80 sm:w-[60%] sm:min-w-40 px-2" src="/images/TIMELINE RAC HP.png" alt="" />
    </div> --}}

    <div id="timeline" class="my-20 mx-auto max-w-[34.15em]">
        <div id="checkpoint checkpoint-odd" class="border-l-3 border-white pl-12 translate-x-[17em]">
            <div>
                <h2 class="mb-2">Date 1 : Pendaftaran</h2>
                <p class="leading-[27px] text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!</p>
            </div>
        </div>
        <div id="checkpoint checkpoint-even" class="border-l-3 border-white pl-12 translate-x-[17em]">
            <div>
                <h2 class="mb-2">Date 2 : Seleksi</h2>
                <p class="leading-[27px] text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!</p>
            </div>
        </div>
        <div class="checkpoint checkpoint-odd">
            <div>
                <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                <p class="leading-[27px] text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!</p>
            </div>
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
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>VO CHALLENGE</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>RAC</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>CLOSING NIGHT</b>
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
                    <a href="https://youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" target="_blank"
                        class="text-white">
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
        window.addEventListener('scroll', function() {
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
</body>
<style>
    body {
        background-color: black;
    }

    .banner-image {
        max-height: 60vh;
    }
</style>

</html>
