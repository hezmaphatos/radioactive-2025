<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMN RADIOACTIVE 2024</title>
    @vite('resources/css/app.css')
    <style>
        .shadow-follow {
            filter: drop-shadow(0 0 25px rgb(214, 21, 37, 0.7));
        }
    </style>
</head>

<body class="">
    <div>
        <video autoplay loop muted
            class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
            <source src="{{asset('images/bgApi1.webm')}}" type="video/webm">
        </video>
    </div>
    <div class="w-full pt-16 flex justify-center items-center flex-wrap">
        <div data-aos="fade-up" class="flex flex-col md:flex-row items-center justify-center gap-4">
            <p class="text-center font-ltmuseum-reg text-base md:text-xl text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp">
        </div>
        <div class="flex justify-center align-middle items-center flex-wrap w-full">
            <div class="relative">
                <img class="shadow-follow object-cover h-80 md:h-96 aspect-square animate-pulse" src="{{ asset('images/LOGO RADIOACTIVE 2024.png') }}" alt="">
                <img class="absolute top-0 object-cover h-80 md:h-96 aspect-square" src="{{ asset('images/LOGO RADIOACTIVE 2024.png') }}" alt="">
            </div>
            <h1 class="text-center text-[#D61525] font-brodyrawk text-7xl w-full">COMING SOON</h1>
        </div>
        <h1 class="text-center pt-12 md:pt-16 font-ltmuseum-bolditalic text-white">DARE TO STRIVE</h1>
    </div>
</body>

</html>
