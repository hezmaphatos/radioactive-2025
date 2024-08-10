<div id="header" x-data="{ isOpen: false }" class=" fixed navbar bg-transparent lg:justify-center justify-end gap-16 z-40 transition-all duration-700 pr-4 border-transparent">

<div class="absolute left-0 ">
    <img src="{{ url('/images/LOGO RADIOACTIVE 2024 png.png') }}" alt="image" class="w-14 lg:w-16 ml-2 mt-2">
    <div class="menu-item ml-0 font-ltmuseum text-white text-sm tracking-wide"
        >RADIOACTIVE</div>   
</div>

<div class="flex items-center justify-between">
    @auth
    <div onclick="toggleDropdown()" class="lg:hidden font-ltmuseum text-xs text-white flex justify-start mx-4 tracking-widest">
        Welcome, {{ auth()->user()->name }} 
    </div>
    @else
    <a class="login-item lg:hidden me-4 no-underline rounded-full ring-[#D61525] hover:ring-1 hover:ring-white" 
    href="/login"><span class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d6152581]  bg-[#D61525] cursor-pointer">LOGIN</span></a>
    @endauth
    <button @click="isOpen = !isOpen" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <div class="hidden gap-3 lg:flex pr-4">
        <a id="homeItem" class="font-ltmuseum text-white text-sm underline underline-offset-8 decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
            href="/">HOME</a>
        <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
            href="/mac">MAC</a>
        <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
            href="/rac">RAC</a>
        <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]"
            href="/closing-night">CLOSING
            NIGHT</a>
        <a class="menu-item font-ltmuseum text-white text-sm no-underline hover:underline hover:underline-offset-8 hover:decoration-[#D61525] cursor-pointer active:decoration-[#d6152581]" href="https://merch.umnradioactive.com/">MERCHANDISE</a>
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
                <div><a id="dropdown" class="login-item absolute left-5 bg-[#D61525] mx-auto px-3 font-semibold no-underline text-white rounded-md text-xs top-[22px] ring-[#D61525] hover:ring-1 hover:ring-white hover:bg-[#d61525e7] active:bg-[#d6152581] hidden w-[100px] h-[20px] text-center" 
                href="/logout">LOG OUT</a></div>
                </div>
                @else
                <a class="login-item hidden lg:block no-underline  rounded-full ring-[#D61525] hover:ring-1 hover:ring-white" 
                    href="/login"
                    ><span class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c]  bg-[#D61525] cursor-pointer"
                    >LOGIN</span></a>
                @endauth
    </div>
    </div>

    <div class="mobile-navbar">
        <div class="lg:hidden fixed right-2 h-62 p-5 bg-[#D61525] rounded-lg shadow-xl top-[4.5rem]" x-show="isOpen"
            @click.away=" isOpen = false">
            <div class="flex flex-col space-y-5 px-2">
                <a class="font-ltmuseum text-white text-sm tracking-wide underline underline-offset-8 decoration-black cursor-pointer active:decoration-[#0000002d]"
                    href="/">HOME</a>
                <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                    href="/mac">MAC</a>
                <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                    href="/rac">RAC</a>
                <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                    href="/closing-night">CLOSING
                    NIGHT</a>
                <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                @auth
                <a class="font-ltmuseum text-white text-sm tracking-wide no-underline hover:underline hover:underline-offset-8 hover:decoration-black cursor-pointer active:decoration-[#0000002d]"
                href="/logout">LOG OUT</a>
                    @else
                    <a class="login-item hidden lg:block no-underline  rounded-full ring-[#D61525] hover:ring-1 hover:ring-white" 
                    href="/login"
                    ><span class="flex font-ltmuseum text-white text-sm tracking-wide no-underline px-5 py-1 rounded-full hover:bg-[#d61525e7] active:bg-[#d615253c]  bg-[#D61525] cursor-pointer"
                    >LOGIN</span></a>
                    @endauth
            </div>
        </div>
    </div>
</div>
</div>
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

window.addEventListener('click', function (e) {
    const dropdown = document.querySelector('#dropdown');
    const dropdownButton = document.querySelector('#dropdownButton');
    const fill = document.querySelector('#fill');
    if (!dropdownButton.contains(e.target)) {
        dropdown.classList.add('hidden');
        fill.classList.toggle('rotate-180');
    }
});

const fill = document.querySelector('#fill');
    fill.addEventListener('click', () => {
    fill.classList.toggle('transform');
    fill.classList.toggle('rotate-180');
  });
</script>
