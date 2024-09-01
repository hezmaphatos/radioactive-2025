@extends('layouts.main')

@section('container')

<body class="antialiased min-h-screen">
    <div class="font-ltmuseumbold text-3xl md:text-4xl text-white flex justify-center text-center pt-20 mb-6">Confirmation
        Page
    </div>
    @if (session()->has('success'))
    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
    <div class="flex justify-center">
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded w-[400px]" role="alert">
            <p class="font-bold font-ltmuseumreg">Success</p>
            <p class="font-ltmuseumreg">Pendaftaran Berhasil, Terimakasih Revends!</p>
        </div>
    </div>
    @endif
    <div class="flex justify-center align-middle form-container">
        <div class="content-container px-4 py-4 flex flex-col w-[400px] max-w-[95vw] shadow-md shadow-[#D61625]">

            @if (session()->has('tim1_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 1</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim1_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim1_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 1</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim1_email') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim2_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 2</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim2_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim2_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 2</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim2_email') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim3_nama'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Nama Tim 3</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim3_nama') }}
                        </div>
                    </div>
                </div>
            @endif

            @if (session()->has('tim3_email'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="font-ltmuseumreg">Email Tim 3</span>
                    </label>
                    <div>
                        <div class="font-ltmuseumreg block shadow appearance-none border w-full py-2 px-1 form-input leading-tight focus:outline-none focus:shadow-outline"
                            type="text">
                            {{ session('tim3_email') }}
                        </div>
                    </div>
                </div>
            @endif

            <p class="mx-2 my-2 font-ltmuseumreg">Screenshot layar ini dan silahkan melakukan konfirmasi pendaftaran ke CP RAC Radioactive 2024
                <br>
                <ul class="text-[#FFF000] mx-2 my-2">
                    <li class="font-ltmuseumreg">Whatsapp: 08119058838 (RARA)</li>
                    <li class="font-ltmuseumreg">Whatsapp: 081383732561 (LITANI)</li>
                </ul>
            </p>

            {{-- @if (session()->has('payment_proof'))
                <div class="mb-1">
                    <label class="block form-label text-sm mb-0" for="">
                        <span class="">Payment Proof</span>
                    </label>
                    <div>
                        <img src={{ asset('storage/' . $team->payment_proof) }}
                            style="width:100%;height:100%;object-fit:contain;" alt="">
                    </div>
                </div>
            @endif --}}
        </div>
    </div>
</body>

<style>
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

    .content-container {
        background-color: rgb(45, 45, 45);
        color: white;
        border-radius: 3px;
        border: solid 3px white;
    }

    .form-input {
        background-color: black;
        border: 1.5px solid white;
    }
</style>
@endsection
