<div id="navbar" x-data="{ isOpen: false }"
    class="font-lavish fixed top-0 z-50 w-full bg-[#20661c] backdrop-blur-md shadow-md px-4 lg:px-12 xl:px-20 lg:pb-0 transition-all duration-300 ease-in-out"
    :class="isOpen ? 'pb-4' : 'pb-0'">

    <div class="max-w-7xl mx-auto flex items-center justify-between relative transition-all duration-300 ease-in-out">

        <!-- Logo -->
        <div class="flex items-center lg:flex-none mx-auto lg:mx-0">
            <a href="/">
                <img src="{{ url('images/LOGO RADIOACTIVE 2025.webp') }}" alt="Radioactive Logo" class="w-16 h-16">
            </a>
        </div>

        <!-- Menu Tengah (Hanya Desktop) -->
        <nav class="hidden lg:flex flex-1 justify-center space-x-8 items-center">
            @php
                $menus = [
                    ['label' => 'HOME', 'href' => '/', 'desc' => 'Home', 'icon_white' => 'home-white.webp', 'icon_gold' => 'home-gold.webp'],
                    ['label' => 'MAC', 'href' => '/mac', 'desc' => 'Mini Announcing Challenge', 'icon_white' => 'mac-white.webp', 'icon_gold' => 'mac-gold.webp'],
                    ['label' => 'RAC', 'href' => '/rac', 'desc' => 'Radio Announcing Challenge', 'icon_white' => 'rac-white.webp', 'icon_gold' => 'rac-gold.webp'],
                    ['label' => 'PODCAST', 'href' => '/podcast', 'desc' => 'Podcast', 'icon_white' => 'podcast-white.webp', 'icon_gold' => 'podcast-gold.webp'],
                    ['label' => 'AWARDING NIGHT', 'href' => '/awarding-night', 'desc' => 'Awarding Night', 'icon_white' => 'awarding-white.webp', 'icon_gold' => 'awarding-gold.webp'],
                    ['label' => 'MERCH', 'href' => '/merch', 'desc' => 'Merch', 'icon_white' => 'merch-white.webp', 'icon_gold' => 'merch-gold.webp'],
                ];
            @endphp

            @foreach ($menus as $menu)
                @php
                    $isActive = $menu['href'] === '/'
                        ? request()->is('/') || request()->path() === '/'
                        : request()->is(ltrim($menu['href'], '/'));
                @endphp

                <div class="relative group flex flex-col items-center">
                    <a href="{{ $menu['href'] }}" class="relative w-7 h-7 flex items-center justify-center transform transition-transform duration-300 ease-in-out
                      {{ $isActive ? 'scale-125' : 'group-hover:scale-125' }}">

                        {{-- Icon putih (default) --}}
                        <img src="{{ asset('images/NAVBAR/' . $menu['icon_white']) }}" alt="{{ $menu['label'] }}" class="absolute inset-0 w-7 h-7 transition-opacity duration-300 ease-in-out
                           {{ $isActive ? 'opacity-0' : 'opacity-100 group-hover:opacity-0' }}">

                        {{-- Icon emas (active atau hover) --}}
                        <img src="{{ asset('images/NAVBAR/' . $menu['icon_gold']) }}" alt="{{ $menu['label'] }}" class="absolute inset-0 w-7 h-7 transition-opacity duration-300 ease-in-out
                           {{ $isActive ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }}">
                    </a>

                    <div class="absolute top-[2.5rem] px-3 py-1 bg-[#f6e79c] text-black text-base rounded shadow-md
                       opacity-0 group-hover:opacity-100 transition duration-300 whitespace-nowrap">
                        {{ $menu['desc'] }}
                    </div>
                </div>
            @endforeach
        </nav>

        <!-- Login Kanan (Hanya Desktop) -->
        <div class="hidden lg:flex items-center space-x-4">
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
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4" @click.away="isOpen = false"
        class="lg:hidden mt-2 w-full bg-gradient-to-b from-[#20661c] to-[#144110] text-white rounded-md shadow-lg p-4 z-50 border border-[#f6e79c]/30">

        @foreach ($menus as $menu)
            @php
                $isActive = $menu['href'] === '/'
                    ? request()->is('/') || request()->path() === '/'
                    : request()->is(ltrim($menu['href'], '/'));
            @endphp

            <a href="{{ $menu['href'] }}"
                class="flex items-center space-x-3 mb-4 hover:bg-[#2a7a26] px-3 py-2 rounded-md transition no-underline w-full">

                <img src="{{ asset('images/NAVBAR/' . ($isActive ? $menu['icon_gold'] : $menu['icon_white'])) }}"
                    alt="{{ $menu['label'] }}" class="w-5 h-5">

                <span class="text-sm font-lavish {{ $isActive ? 'text-[#f6e79c]' : 'text-white' }}">
                    {{ $menu['desc'] }}
                </span>
            </a>
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