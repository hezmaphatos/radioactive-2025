<div id="navbar" x-data="{ isOpen: false }"
    class="font-lavish sticky top-0 z-50 w-full bg-[#20661c] bg-opacity-80 backdrop-blur-md shadow-md py-8 px-4 lg:px-12 xl:px-20">

    <div class="max-w-7xl mx-auto flex items-center justify-between relative">

        <!-- Spacer kiri -->
        <div class="w-1/3 hidden lg:block"></div>

        <!-- Logo + Menu di Tengah -->
        <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center space-x-6">
            <!-- Logo -->
            <a href="/">
                <img src="{{ url('images/LOGO RADIOACTIVE 2025.webp') }}" alt="Radioactive Logo" class="w-20 h-20">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex space-x-6 items-center">
                @php
                    $menus = [
                        ['label' => 'HOME', 'href' => '/', 'desc' => 'Home', 'icon' => 'fa-home'],
                        ['label' => 'MAC', 'href' => '/mac', 'desc' => 'Mini Announcing Challenge', 'icon' => 'fa-microphone'],
                        ['label' => 'RAC', 'href' => '/rac', 'desc' => 'Radio Announcing Challenge', 'icon' => 'fa-broadcast-tower'],
                        ['label' => 'PODCAST', 'href' => '/podcast', 'desc' => 'Podcast', 'icon' => 'fa-podcast'],
                        ['label' => 'AWARDING NIGHT', 'href' => '/awarding-night', 'desc' => 'Awarding Night', 'icon' => 'fa-moon'],
                        ['label' => 'MERCH', 'href' => '/merch', 'desc' => 'Merch', 'icon' => 'fa-shopping-bag'],
                    ];
                @endphp

                @foreach ($menus as $menu)
                    <div class="relative group flex flex-col items-center text-white">
                        <a href="{{ $menu['href'] }}" class="group hover:text-[#f6e79c] transition duration-300 text-xl">
                            <i
                                class="fas {{ $menu['icon'] }} text-white transform group-hover:scale-125 group-hover:text-[#f6e79c] transition duration-300"></i>
                        </a>
                        <div
                            class="absolute top-[2.5rem] px-3 py-1 bg-[#f6e79c] text-black text-base rounded shadow-md opacity-0 group-hover:opacity-100 transition duration-300 whitespace-nowrap">
                            {{ $menu['desc'] }}
                        </div>
                    </div>
                @endforeach
            </nav>
        </div>

        <!-- Desktop Login/Logout -->
        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden lg:flex items-center space-x-4">
            @auth
                <span class="text-sm text-white tracking-widest">Welcome, {{ auth()->user()->name }}</span>
                <a href="/logout"
                    class="bg-[#f6e79c] hover:bg-white text-black px-4 py-1 text-sm font-lavish rounded-full no-underline transition">
                    Logout
                </a>
            @else
                <a href="/login"
                    class="bg-[#f6e79c] hover:bg-white text-black px-5 py-1 text-sm font-lavish rounded-full no-underline transition">
                    Login
                </a>
            @endauth
        </div>

        <!-- Mobile Menu Button -->
        <div class="absolute right-4 top-1/2 transform -translate-y-1/2 lg:hidden">
            <button @click="isOpen = !isOpen" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="isOpen" @click.away="isOpen = false"
        class="lg:hidden mt-8 w-full bg-[#111] text-white rounded-md shadow-lg p-4 z-50">
        @foreach ($menus as $menu)
            <div class="flex items-center space-x-3 mb-4">
                <i class="fas {{ $menu['icon'] }} w-5 h-5 text-white"></i>
                <a href="{{ $menu['href'] }}" class="text-sm font-lavish text-white no-underline">
                    {{ $menu['desc'] }}
                </a>
            </div>
        @endforeach

        @auth
            <div class="text-sm text-white text-center mb-2 tracking-widest">
                Welcome, {{ auth()->user()->name }}
            </div>
            <a href="/logout"
                class="block bg-[#f6e79c] text-black px-4 py-2 text-sm rounded-full text-center mt-2 font-lavish no-underline hover:bg-white transition">
                Logout
            </a>
        @else
            <a href="/login"
                class="block bg-[#f6e79c] text-black px-4 py-2 text-sm rounded-full text-center mt-2 font-lavish no-underline hover:bg-white transition">
                Login
            </a>
        @endauth
    </div>
</div>