<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-black">
    <div id="header" x-data="{ isOpen: false }"
        class="fixed navbar bg-[#0E0EC0] justify-center gap-16 z-40 transition-all duration-700">
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/">HOME</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/closing-night">CLOSING
                    NIGHT</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/">HOME</a>
                        <a class="font-taruno text-black text-xs underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                            href="/voc">VO
                            CHALLENGE</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/rac">RAC</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/closing-night">CLOSING
                            NIGHT</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="font-ltmuseumbold font-bold text-3xl md:text-4xl text-white flex justify-center text-center pt-24 mx-12 md:mx-24">
        Thank you Revends for joining Voice Over Challenge! The winner will be announced on October 7th 2023
    </div>
    <div id="section-1" class="max-w-4xl mx-auto">
        <div class="relative flex flex-col items-center" data-aos="fade-up">
            <img class="object-cover mt-4 md:mt-16 z-0" src="../images/logo2024.png" alt="background logo" />
        </div>
    </div>
    <div class="font-ltmuseumbold text-3xl md:text-4xl text-white flex justify-center text-center pt-24 mb-6 mx-4">
        FORM PENGUMPULAN VOC
    </div>
    <form action="/voc/store" class="pb-24" enctype="multipart/form-data" method="post">
        <div class="flex justify-center align-middle form-container">
            <div class="flex flex-col w-[400px] max-w-[95vw]">
                @if (session()->has('success'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded"
                        role="alert">
                        <p class="font-bold">Success</p>
                        <p>Pengumpulan Berhasil, Terimakasih Revends!</p>
                    </div>
                @endif
                <div class="w-full form-content shadow-md  px-8 py-3 mb-10 font-pathway shadow-[#D61625]">
                    <div class="w-full font-ltmuseumreg text-xl md:text-2xl text-white text-center">Data VOC</div>
                    @csrf
                    <div>
                        <div class="mb-1">
                            <label class="block form-label text-sm mb-0" for="">
                                <span class="font-ltmuseumreg">Nama Lengkap</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap" name="nama"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">Usia</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('usia') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="number" onkeypress="return isNumberKey(event)" placeholder="Usia"
                                    name="usia" value="{{ old('usia') }}">
                                @error('usia')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">Nomor Telepon/WA</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('no_telp') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="number" placeholder="Nomor Telepon/WA" name="no_telp"
                                    value="{{ old('no_telp') }}">
                                @error('no_telp')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div>
                            <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="institusi"
                                value="{{ old('institusi') }}">
                            @error('institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">NIM</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('nim') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="nim"
                                    value="{{ old('nim') }}">
                                @error('nim')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">E-mail</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"class="block @error('usia') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">Username Tiktok</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('uname') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="@username" name="uname"
                                    value="{{ old('uname') }}">
                                @error('uname')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumreg" for="">Link Video VOC</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('link') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="https://www.tiktok.com/@username/video/"
                                    name="link" value="{{ old('link') }}">
                                @error('link')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="button-submit font-ltmuseumreg text-white bg-[#D61625] w-full text-xl md:text-2xl px-5 py-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Daftar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<style>
    .form-content {
        background-color: rgb(45, 45, 45);
        color: white;
        border-radius: 3px;
        border: solid 3px white;
    }

    .form-input {
        background-color: black;
        border: 1.5px solid white;
    }

    .form-input:focus {
        border-bottom: solid 4px #D61625;
    }

    .button-submit {
        transition: background-color 0.25s, transform 0.25s;
        border: 2px solid white;
    }

    .button-submit:hover {
        background-color: #FFF000;
        color: black;
        transform: scale(1.05);
    }

    .button-submit:active {
        background-color: white;
        color: black;
    }

    /* WebKit, Edge */
    ::-webkit-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Firefox 4-18 */
    :-moz-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Firefox 19+ */
    ::-moz-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* IE 10-11 */
    :-ms-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Edge */
    ::-ms-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* MODERN BROWSER */
    ::placeholder {
        font-family: 'Pathway Extreme';
    }
</style>

</html>
