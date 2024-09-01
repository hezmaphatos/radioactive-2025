<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2024</title>
</head>

    <body>      
        <div>
            <img src="/images/BG WEB.png" alt="Background Image"
                class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover brightness-[25%]" loading="lazy">
        </div>
        @include('components.navbar')

        @yield('container')

        @include('components.footer')
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
                var links = document.querySelectorAll('.menu-item');

                links.forEach(function(link) {
                    if (window.scrollY > 0) {
                        link.style.textDecorationColor = 'black';
                    } else {
                        link.style.textDecorationColor = '#D61525';
                    }
                });
            });
        </script>
        <script>
    window.addEventListener('scroll', function() {
        var svg = document.querySelector('#fill');
        
        if (window.scrollY > 0) {
            svg.setAttribute('fill', 'black');
        } else {
            svg.setAttribute('fill', '#D61525');
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
        <script>
            window.onload = function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional: Adds smooth scrolling
    });
};
        </script>
    </body>
</html>
