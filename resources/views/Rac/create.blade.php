@extends('layouts.main')

@section('container')

<body class="antialiased bg-black min-h-screen">
    <div class="font-brodyrawk text-3xl md:text-4xl text-white flex justify-center text-center pt-20 mb-6">RAC Registration</div>
    <div class="flex justify-center align-middle form-container">
        <div class="content-container px-4 py-4 flex flex-col w-[400px] shadow-md shadow-[#D61625] max-w-[95vw] ">
            @if (session()->has('success'))
                <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
            @endif
            @if ($rac_teams->count() > 0)

                @php
                    $count = $rac_teams->count();
                @endphp

                @foreach ($rac_teams as $team)
                    @if (
                        $team->tim3_institusi &&
                            $team->tim3_penyiar1 &&
                            $team->tim3_penyiar2 &&
                            $team->tim3_operator &&
                            $team->tim3_contact_wa)
                        @php
                            $count += 2;
                        @endphp
                    @elseif(
                        $team->tim2_institusi &&
                            $team->tim2_penyiar1 &&
                            $team->tim2_penyiar2 &&
                            $team->tim2_operator &&
                            $team->tim2_contact_wa)
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach

                <h2 class="w-full text-center font-ltmuseumreg text-white hidden">Remaining Slots: {{ 20 - $count }}</h2>
                <h2 class="w-full text-center font-ltmuseumbold text-white text-xl py-2">Select Number Of Teams To Be Registered</h2>

                @if ($count >= 20)
                    <h2 class="w-full text-center font-ltmuseumreg">Kuota Tim Habis</h2>
                @elseif ($count >= 19)
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumreg text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                @elseif($count >= 18)
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumreg text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/rac/form/2">
                        <button class="button-submit font-ltmuseumreg text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Dua Tim
                        </button>
                    </a>
                @else
                    <a href="/rac/form/1">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/rac/form/2">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Dua Tim
                        </button>
                    </a>
                    <a href="/rac/form/3">
                        <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                            type="submit">
                            Tiga Tim
                        </button>
                    </a>
                @endif
            @else
                <a href="/rac/form/1">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Satu Tim
                    </button>
                </a>
                <a href="/rac/form/2">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Dua Tim
                    </button>
                </a>
                <a href="/rac/form/3">
                    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-sm px-5 py-1 my-1"
                        type="submit">
                        Tiga Tim
                    </button>
                </a>
            @endif
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
            <style>
            html, body {
    height: 100%;
}

body {
    display: flex;
    flex-direction: column;
}

main {
    flex: 1;
}

footer {
    margin-top: auto;
}
        </style>
</style>

</html>
@endsection
