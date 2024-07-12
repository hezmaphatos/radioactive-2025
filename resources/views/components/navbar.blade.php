<div id="header" x-data="{ isOpen: false }"
class="fixed navbar bg-transparent justify-center gap-16 z-40 transition-all duration-700">
<div class="flex items-center justify-between">
    <button @click="isOpen = !isOpen" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <div class="pr-4 hidden space-x-6 lg:inline-block">
        <a class="font-taruno text-white text-xs {{ ($title === "Home") ? 'underline underline-offset-4 decoration-[#FFF000] cursor-pointer' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer'}}"
            href="/">HOME</a>
        <a class="font-taruno text-white text-xs {{ ($title === "VOC") ? 'underline underline-offset-4 decoration-[#FFF000] cursor-pointer' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer'}}"
            href="/voc">VO
            CHALLENGE</a>
        <a class="font-taruno text-white text-xs {{ ($title === "RAC") ? 'underline underline-offset-4 decoration-[#FFF000] cursor-pointer' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer'}}"
            href="/rac">RAC</a>
        <a class="font-taruno text-white text-xs {{ ($title === "closing") ? 'underline underline-offset-4 decoration-[#FFF000] cursor-pointer' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer'}}"
            href="/closing-night">CLOSING
            NIGHT</a>
        <a class="font-taruno text-white text-xs {{ ($title === "merch") ? 'underline underline-offset-4 decoration-[#FFF000] cursor-pointer' : 'no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer'}}"
            href="/merch">MERCHANDISE</a>
        {{-- <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
            href="https://merch.umnradioactive.com/">MERCHANDISE</a> --}}
    </div>

    <div class="mobile-navbar">
        <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
            @click.away=" isOpen = false">
            <div class="flex flex-col space-y-6">
                <a class="font-taruno text-black text-xs underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                    href="/">HOME</a>
                <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                    href="/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                    href="/closing-night">CLOSING NIGHT</a>
                @auth
                    <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/logout">LOGOUT</a>
                @endauth
                <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                    href="/merch">MERCHANDISE</a>
            </div>
        </div>
    </div>
</div>
</div>

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