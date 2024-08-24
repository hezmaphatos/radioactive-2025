@extends('layouts.main')

@section('container')
<body class="antialiased bg-black">
    <div class="font-brodyrawk text-2xl md:text-3xl lg:text-4xl text-white flex justify-center text-center pt-16 md:pt-24 mx-4 md:mx-8 lg:mx-12">
        Thank you Revends for joining Mini Announcing Challenge! The winner will be announced on October 7th 2024
    </div>
    <img class="object-cover mt-4 md:mt-16 z-0 mx-auto w-3/4 md:w-1/2 lg:w-1/3" src="/images/LOGO RADIOACTIVE 2024.png" alt="background logo" />
    <div class="font-brodyrawk text-2xl md:text-3xl lg:text-4xl text-white flex justify-center text-center pt-16 mb-6 mx-4 md:mx-8 lg:mx-12">
        FORM PENGUMPULAN MAC
    </div>
    <form action="/mac/store" class="pb-16 md:pb-24" enctype="multipart/form-data" method="post">
        <div class="flex justify-center align-middle form-container">
            <div class="flex flex-col w-full max-w-md px-4 sm:px-6 md:px-8">
                @if (session()->has('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded"
                        role="alert">
                        <p class="font-ltmuseumbold">Success</p>
                        <p class="font-ltmuseumbold">Pengumpulan Berhasil, Terimakasih Revends!</p>
                    </div>
                @endif
                <div class="w-full form-content shadow-md px-4 py-3 md:px-8 md:py-6 mb-10 font-pathway shadow-[#D61625]">
                    <div class="w-full font-ltmuseumbold text-xl md:text-2xl text-white text-center">Data MAC</div>
                    @csrf
                    <div class="space-y-4">
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1" for="">
                                <span class="font-ltmuseumbold">Nama Lengkap</span>
                            </label>
                            <input
                                class="block @error('nama') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="text" placeholder="Nama Lengkap" name="nama"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">Usia</label>
                            <input
                                class="block @error('usia') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="number" onkeypress="return isNumberKey(event)" placeholder="Usia"
                                name="usia" value="{{ old('usia') }}">
                            @error('usia')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">Nomor Telepon/WA</label>
                            <input
                                class="block @error('no_telp') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="number" placeholder="Nomor Telepon/WA" name="no_telp"
                                value="{{ old('no_telp') }}">
                            @error('no_telp')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">Institusi/Organisasi Asal</label>
                            <input
                                class="block @error('institusi') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="text" placeholder="Institusi/Organisasi Asal" name="institusi"
                                value="{{ old('institusi') }}">
                            @error('institusi')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">NIM</label>
                            <input
                                class="block @error('nim') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="text" placeholder="'-' untuk luar UMN" name="nim"
                                value="{{ old('nim') }}">
                            @error('nim')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">E-mail</label>
                            <input
                                class="block @error('email') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">Username Tiktok</label>
                            <input
                                class="block @error('uname') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="text" placeholder="@username" name="uname"
                                value="{{ old('uname') }}">
                            @error('uname')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block form-label text-sm mb-1 font-ltmuseumbold" for="">Link Video MAC</label>
                            <input
                                class="block @error('link') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                type="text" placeholder="https://www.tiktok.com/@username/video/"
                                name="link" value="{{ old('link') }}">
                            @error('link')
                                <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-xl md:text-2xl px-4 py-2"
                                type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                Daftar
                            </button>
                        </div>
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
@endsection
