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
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2024</title>
</head>

<div>
    <video autoplay loop muted
        class="fixed -z-10 w-auto lg:w-full md:min-w-full md:min-h-full max-w-fit object-cover" loading="lazy">
        <source src="/images/BACKGROUND_DESKTOP.webm" type="video/webm">
    </video>
</div>
@include('components.navbar')

@yield('container')

@include('components.footer')
</html>
