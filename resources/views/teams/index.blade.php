<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body class="antialiased bg-black h-full">
    {{-- <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
        </video>
    </div> --}}
    <div id="header" x-data="{ isOpen: false }"
        class=" fixed navbar bg-transparent lg:justify-center justify-end gap-16 z-40 transition-all duration-700 pr-4 border-transparent">

        <div class="absolute left-0 ">
            <img src="{{ url('/images/LOGO RADIOACTIVE 2024 png.png') }}" alt="image" class="w-14 lg:w-16 ml-2 mt-2">
            <div class="menu-item ml-0 font-ltmuseum text-white text-sm tracking-wide"
                >RADIOACTIVE</div>
           
        </div>

        <div class="flex items-center justify-between">
        <a class="login-item lg:hidden me-4 no-underline rounded-full ring-[#D61525] hover:ring-1 hover:ring-white" 
            href="/login"
            ><span class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d6152581]  bg-[#D61525] cursor-pointer"
            >LOGIN</span></a>

            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            
            <div class="hidden gap-3 lg:flex pr-4">
                <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
                    href="/">HOME</a>
                <a class=" font-ltmuseum text-white text-sm cursor-pointer no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] active:decoration-[#d6152581]"
                    href="/voc">VO
                    CHALLENGE</a>
                <a id="homeItem" class="menu-item font-ltmuseum text-white text-sm underline underline-offset-8 decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
                    href="/rac">RAC</a>
                <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
                    href="/closing-night">CLOSING
                    NIGHT</a>
                <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a>
            </div>

            <div class="absolute right-2">
                @auth
                <div id="dropdownButton" class="relative select-none">
                <div onclick="toggleDropdown()" class="font-ltmuseum text-xs text-white flex justify-start mx-4 italic tracking-widest"
                >Welcome, {{ auth()->user()->name }} 
                    <svg id="fill"  class="w-4 mx-2 cursor-pointer" fill="#D61525" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                 viewBox="0 0 330 330" xml:space="preserve">
                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
	                c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
	                s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/>
                    </svg>
                </div>
                <div><a id="dropdown" class="login-item absolute left-5 bg-[#D61525] px-3 font-semibold no-underline text-white text-xs top-[18px] rounded-md ring-[#D61525] hover:ring-1 hover:ring-white hover:bg-[#d61525e7] active:bg-[#d6152581]" 
                href="/logout">LOG OUT</a></div>
                </div>
                @else
                <a class="login-item hidden lg:block no-underline  rounded-full ring-[#D61525] hover:ring-1 hover:ring-white" 
                    href="/login"
                    ><span class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c]  bg-[#D61525] cursor-pointer"
                    >LOGIN</span></a>
                @endauth
 
            </div>

            

            <div class="mobile-navbar">
                <div class="lg:hidden fixed right-2 h-52 p-5 bg-[#D61525] rounded-lg shadow-xl top-[4.5rem]" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-5 px-2">
                        <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                            href="/">HOME</a>
                        <a class="font-ltmuseum text-white text-sm tracking-wide cursor-pointer no-underline hover:underline hover:underline-offset-8 hover:decoration-black active:decoration-[#0000002d]"
                            href="/voc">VO
                            CHALLENGE</a>
                        <a class="font-ltmuseum text-white text-sm tracking-wide underline underline-offset-8 decoration-black cursor-pointer active:decoration-[#0000002d]"
                            href="/rac">RAC</a>
                        <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                            href="/closing-night">CLOSING
                            NIGHT</a>
                        <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="w-full pt-16 relative">
        <img id="" class="w-full h-48 md:h-80 object-cover object-center -z-10" src="{{ asset('images/FOTO RAC.webp') }}"
            alt="">
        {{-- <div class="w-full h-48 md:h-80 absolute top-0 -z-10 bg-gradient-to-b from-black to-transparent"></div> --}}
    </div>

    <div class=" lg:-mb-0 lg:my-16" data-aos="fade-up">
        <h2 id="title" class="font-taruno2 text-white text-center my-12">RADIO ANNOUNCING COMPETITION</h2>
        <div id="description" class="px-8 md:px-20 lg:px-80">
            <p class="font-pathway text-sm text-white text-justify md:text-center md:pb-0">Radio Announcing Competition
                merupakan
                rangkaian acara utama RADIOACTIVE. Lomba ini merupa kan ajang untuk siswa SMA dan mahasiswa
                se-Jabodetabek untuk memperluas wawasan dan mengasah kemampuan di dunia broadcasting. <br>
                Radio Announcing Competition ini memiliki konsep yang sesuai dengan nilai utama RADIOACTIVE 2023, yaitu
                get out from
                comfort zone. Tujuan dari lomba ini adalah untuk mengasah kreativitas peserta dalam membuat siaran dan
                secara tidak langsung memberikan informasi hingga mengajak para peserta untuk keluar dari zona nyaman
                mereka.</p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center"></p>
        </div>
    </div>

    <div id="judges" class="flex flex-col justify-center items-center my-16">
        <h4 class="font-taruno md:text-xl text-white text-center font-bold mb-12" data-aos="fade-up">THE JUDGES</h4>
        <div id="judges" class="flex flex-col md:flex-row gap-12">
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-64 md:h-80 w-80 md:w-96 object-cover" src="images/FOTO-JURI-shandy.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">SHANDY LUO</h4>
            </div>
            <div class="flex flex-col" data-aos="fade-up">
                <img class="h-64 md:h-80 w-80 md:w-96 object-cover" src="images/FOTO-JURI-BELLA.webp" alt="" />
                <h4 class="font-taruno text-white text-center font-bold">BELLA PRAMBORS</h4>
            </div>
        </div>
    </div>

    <div id="timeline" class="hidden md:flex flex-col justify-center items-center my-32 mb-28" data-aos="fade-up">
        <img class="md:h-96 sm:h-0 px-2 max-w-[90%] object-contain" src="/images/rac.webp" alt="" />
    </div>

    <div id="timelineHP" class="flex flex-col justify-center items-center my-32 mb-28 md:hidden" data-aos="fade-up">
        <img class="w-80 sm:w-[60%] sm:min-w-40 px-2" src="/images/racHP.webp" alt="" />
    </div>

    <div class="flex flex-col md:flex-row justify-center sm:py-4 items-center mt-8" data-aos="fade-up">
        <div id="button2" class="my-3">
            <a target="_"
                href="https://drive.google.com/file/d/1gczHFV8MbNXSiDMOPcF3sCDbENeUkKwU/view?usp=drivesdk"
                class="no-underline py-4 px-6">
                <button
                    class="bg-[#0E0EC0] text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                    DOWNLOAD HANDBOOK
                </button>
            </a>
        </div>
        <div id="button1" class="my-3">
            <a href="/rac/register" class="no-underline py-4 px-6">
                <button disabled id="btnReg"
                    class="bg-[#0E0EC0] disabled:bg-gray-400 disabled:cursor-not-allowed text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0] disabled:text-white">
                    REGISTER HERE
                </button>
            </a>
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
            window.addEventListener('scroll', function() {
                var header = document.getElementById('header');
                if (window.scrollY > 0) {
                    header.classList.remove('bg-transparent', 'border-transparent');
                    header.classList.add('bg-[#D61525]', 'border');
                } else {
                    header.classList.add('bg-transparent', 'border-transparent' );
                    header.classList.remove('bg-[#D61525]');
                }
            });
        </script>
        <script>
            window.addEventListener('scroll', function() {
                var item = document.getElementById('homeItem');
                if (window.scrollY > 0) {
                    item.classList.remove('decoration-[#D61525]');
                    item.classList.add('decoration-black');
                } else {
                    item.classList.add('decoration-[#D61525]');
                    item.classList.remove('decoration-black');
                }
            });
        </script>
        <script>
           window.addEventListener('scroll', function() {
                var menuItems = document.querySelectorAll('.login-item');
                menuItems.forEach(function(menuItem) {
                if (window.scrollY > 0) {
                    menuItem.classList.remove('hover:ring-1', 'hover:ring-white', 'ring-[#D61525]');
                    menuItem.classList.add('ring-1', 'ring-black', 'hover:ring-2');
                } else {    
                    menuItem.classList.add('hover:ring-1', 'hover:ring-white', 'ring-[#D61525]'); 
                    menuItem.classList.remove('ring-1', 'ring-black', 'hover:ring-2');
                }
            });
            });
        </script>
        <script>
            window.addEventListener('scroll', function() {
                var svgIcon = document.getElementById('fill');
                if (window.scrollY > 0) {
                    svgIcon.setAttribute('fill', 'black');
                } else {
                    svgIcon.setAttribute('fill', '#D61525');
                }
            });
        </script>
        <script>
           window.addEventListener('scroll', function() {
                var menuItems = document.querySelectorAll('.menu-item');
                menuItems.forEach(function(menuItem) {
                if (window.scrollY > 0) {
                    menuItem.classList.remove('hover:decoration-[#D61525]');
                    menuItem.classList.add('hover:decoration-black');
                } else {
                    menuItem.classList.add('hover:decoration-[#D61525]');
                    menuItem.classList.remove('hover:decoration-black');
                }
            });
            });
        </script>
        <script>
            function toggleDropdown() {
                let dropdown = document.querySelector('#dropdownButton #dropdown');
                dropdown.classList.toggle("hidden");
            }
        </script>
</body>
<style>
    /* body {
        background-color: black;
    } */

    /* .banner-image{
        max-height: 60vh;
    } */
    /* #banner {
        -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 1)), to(rgba(0, 0, 0, 0)));
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
    } */
</style>

</html>
