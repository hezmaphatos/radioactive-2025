@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden bg-black">
    <div class="justify-center align-middle items-center">
       
        <div
            class="z-30 absolute w-full flex md:h-[500px] bg-black opacity-[.5] lg:h-[900px] h-[300px] justify-center items-center">
        </div>
        
        <div class="z-30 absolute w-full flex md:h-[430px] lg:h-[800px] h-[325px] justify-center items-center">
            
        </div>
        <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative overflow-hidden z-0 md:h-96 lg:h-[800px] h-[275px] rounded-lg object-top">
   
        <div class="relative overflow-hidden z-0 md:h-96 lg:h-[800px] h-[275px] rounded-lg object-top">
    <img src="/images/LOGO RA.png" alt="Logo RA" class="absolute inset-0 m-auto w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-80 lg:h-80 object-contain z-40">
    
    <div class="relative h-full w-full">
    <div class="hidden duration-300 ease-in-out" data-carousel-item="active">
        <div class="relative w-full h-full">
            <img src="/images/CAROUSEL/1.JPG" class="absolute inset-0 w-full h-full object-cover">
        </div>
    </div>

        <div class="hidden duration-300 ease-in-out" data-carousel-item>
            <div class="flex w-full md:h-96 lg:h-[800px] h-[275px]">
                <div class="flex flex-col justify-center items-start pl-2 md:pl-4 lg:pl-8 w-full md:w-1/4 space-y-1">
                    <div class="flex flex-wrap space-x-1 md:space-x-2 lg:space-x-4"></div>
                </div>
                <img src="/images/CAROUSEL/2.JPG" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>

        <div class="hidden duration-300 ease-in-out" data-carousel-item>
            <div class="flex w-full md:h-96 lg:h-[800px] h-[275px]">
                <div class="flex flex-col justify-center items-start pl-2 md:pl-4 lg:pl-8 w-full md:w-1/4 space-y-1">
                    <div class="flex flex-wrap space-x-1 md:space-x-2 lg:space-x-4"></div>
                </div>
                <img src="/images/CAROUSEL/3.JPG" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>

        <div class="hidden duration-300 ease-in-out" data-carousel-item>
            <div class="flex w-full md:h-96 lg:h-[800px] h-[275px]">
                <div class="flex flex-col justify-center items-start pl-2 md:pl-4 lg:pl-8 w-full md:w-1/4 space-y-1">
                    <div class="flex flex-wrap space-x-1 md:space-x-2 lg:space-x-4"></div>
                </div>
                <img src="/images/CAROUSEL/4.JPG" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>

        <div class="hidden duration-300 ease-in-out" data-carousel-item>
            <div class="flex w-full md:h-96 lg:h-[800px] h-[275px]">
                <div class="flex flex-col justify-center items-start pl-2 md:pl-4 lg:pl-8 w-full md:w-1/4 space-y-1">
                    <div class="flex flex-wrap space-x-1 md:space-x-2 lg:space-x-4"></div>
                </div>
                <img src="/images/CAROUSEL/5.JPG" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>


<div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
    <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
    <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
</div>


            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60">
                    <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:group-hover:bg-gray-800/60 ">
                    <svg class="w-4 h-4 text-white dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="flex flex-wrap w-full justify-center">
            <div class="flex flex-wrap justify-center w-3/4">
                @foreach ($merch as $obj)
                <a href="{{ url('/item/' . $obj->id) }}"
                    class="m-[30px] mt-[6rem] justify-center content-center gap-10 no-underline">
                    <div id="item-img"
                        class=" mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <div class="h-full w-full">
                            <img src="/images/{{ $obj->description }}/{{ $obj->image1 }}"
                                class="object-cover w-[250px] h-[350px]" />
                            <p class="mt-5 font-taruno text-white text-[15px]">{{ $obj->name }}</p>
                            <p class="mt-1 font-sans text-white text-sm">Rp {{ number_format($obj->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div id="shopping-cart" class="w-full fixed bottom-5 right-5 flex justify-end">
            <a href="{{ url('/cart') }}"
                class="rounded-full bg-white w-[60px] h-[60px] flex justify-center items-center cursor-pointer transform transition duration-500 hover:scale-110 no-underline">
                <i class="fas fa-shopping-cart fa-xl" style="color: #0E0EC0;"></i>
            </a>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
@endsection
