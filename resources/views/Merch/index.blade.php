@extends('layouts.main')

@section('container')

<body class="overflow-x-hidden">
    <div class="justify-center align-middle items-center">
        <div id="indicators-carousel" class="relative w-full" data-carousel="static">

            <div class="relative overflow-hidden h-[400px] md:h-[500px]">

                <div class="hidden duration-700 ease-in-out pt-16" data-carousel-item="active">
                    <img src="/images/CAROUSEL/1.webp"
                        class="flex h-full w-full object-center object-cover brightness-50">
                </div>

                <div class="hidden duration-700 ease-in-out pt-16" data-carousel-item>
                    <img src="/images/CAROUSEL/2.webp"
                        class="flex h-full w-full object-center object-cover brightness-50">
                </div>

                <div class="hidden duration-700 ease-in-out pt-16" data-carousel-item>
                    <img src="/images/CAROUSEL/8.png"
                        class="flex h-full w-full object-center object-cover brightness-50">
                </div>

                <div class="hidden duration-700 ease-in-out pt-16" data-carousel-item>
                    <img src="/images/CAROUSEL/9.png"
                        class="flex h-full w-full object-center object-cover brightness-50">
                </div>

                <div class="hidden duration-700 ease-in-out pt-16" data-carousel-item>
                    <img src="/images/CAROUSEL/6.png"
                        class="flex h-full w-full object-center object-cover brightness-50">
                </div>

            </div>

            <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none z-20">
                <img src="/images/LOGO RA.png" alt="Logo" class="w-64 h-32 md:w-80 md:h-40 object-cover ">
                <div class="text-white text-5xl font-brodyrawk mt-1">
                    COLLECTION
                </div>
            </div>

            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white"
                    aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white"
                    aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-transparent border-[1px] border-white"
                    aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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
        <?php $no = 1; ?>
        <div id="merch_items" class="mt-[6rem] p-[30px] flex flex-wrap w-full justify-center content-center gap-10">
            <div class="flex flex-wrap gap-4 justify-center">
                @foreach ($merches as $merch)
                    <a id="merch{{$merch->id}}" class="relative no-underline" href="/merch/{{$merch->id}}">
                        <div id="item-img" class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                            <img src="{{asset('storage/'.$merch->image)}}" class="object-cover w-full h-full" />
                            <p class="mt-3 font-ltmuseumbold text-white text-[15px]">{{$merch->name}}</p>
                            <p class="mt-1 font-ltmuseumreg text-white text-sm">{{'Rp ' . number_format($merch->price, 0, ',', '.')}}</p>
                        </div>
                    </a>
                @endforeach
                <a id="merch{{$merch->id}}" class="relative no-underline" href="/merch/{{$merch->id}}">
                    <div id="item-img" class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <img src="{{asset('storage/'.$merch->image)}}" class="object-cover w-full h-full" />
                        <p class="mt-3 font-ltmuseumbold text-white text-[15px]">{{$merch->name}}</p>
                        <p class="mt-1 font-ltmuseumreg text-white text-sm">{{'Rp ' . number_format($merch->price, 0, ',', '.')}}</p>
                    </div>
                </a>
                <a id="merch{{$merch->id}}" class="relative no-underline" href="/merch/{{$merch->id}}">
                    <div id="item-img" class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <img src="{{asset('storage/'.$merch->image)}}" class="object-cover w-full h-full" />
                        <p class="mt-3 font-ltmuseumbold text-white text-[15px]">{{$merch->name}}</p>
                        <p class="mt-1 font-ltmuseumreg text-white text-sm">{{'Rp ' . number_format($merch->price, 0, ',', '.')}}</p>
                    </div>
                </a>
                <a id="merch{{$merch->id}}" class="relative no-underline" href="/merch/{{$merch->id}}">
                    <div id="item-img" class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <img src="{{asset('storage/'.$merch->image)}}" class="object-cover w-full h-full" />
                        <p class="mt-3 font-ltmuseumbold text-white text-[15px]">{{$merch->name}}</p>
                        <p class="mt-1 font-ltmuseumreg text-white text-sm">{{'Rp ' . number_format($merch->price, 0, ',', '.')}}</p>
                    </div>
                </a>
                <a id="merch{{$merch->id}}" class="relative no-underline" href="/merch/{{$merch->id}}">
                    <div id="item-img" class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <img src="{{asset('storage/'.$merch->image)}}" class="object-cover w-full h-full" />
                        <p class="mt-3 font-ltmuseumbold text-white text-[15px]">{{$merch->name}}</p>
                        <p class="mt-1 font-ltmuseumreg text-white text-sm">{{'Rp ' . number_format($merch->price, 0, ',', '.')}}</p>
                    </div>
                </a>
                {{-- <div id="merch2" class="relative">
                    <div id="item-img"
                        class="mb-[7rem] w-[250px] h-[350px] border-solid border-[1px] border-white transform transition duration-500 hover:scale-[1.03]">
                        <img src=" " class="object-cover w-full h-full" />
                        <p class="mt-5 font-LT Museum text-white text-[15px]">T-Shirt </p>
                        <p class="mt-1 font-sans text-white text-sm">Rp 50.000</p>
                    </div>
                </div> --}}
            </div>

            <div id="shopping-cart" class="w-full fixed bottom-5 right-5 flex justify-end">
                <a href="/cart"
                    class="rounded-full no-underline bg-red-600 w-[60px] h-[60px] flex justify-center items-center cursor-pointer transform transition duration-500 hover:scale-110">
                    <i class="fas fa-shopping-cart fa-xl" style="color: white;"></i>
                </a>
            </div>
        </div>

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
@endsection
