<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2025 | Reset Password</title>
</head>
<body>
    <section class="bg-black h-screen relative flex items-center justify-center">
        <div class="absolute inset-0 flex items-center justify-center">
            <img class="h-auto max-w-full max-h-full" src="{{ asset('images/LOGO_RADIOACTIVE2025.png') }}" alt="Radioactive 2025 Logo">
        </div>
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 z-40 p-8">
            <img src="{{ url('images/LOGO UMN RADIO.webp') }}" alt="Image" class="h-16 md:h-10 lg:h-24" />
        </div>
        <div class="relative z-50 flex items-center justify-center w-full">
            <form action="{{ route('password.update') }}" method="post" class="w-full max-w-md">
                <div class="flex flex-col bg-clip-border rounded-xl bg-white bg-opacity-75 text-gray-700 shadow-md p-6">
                    <h3 class="font-ltmuseumbold text-2xl font-bold text-black text-center mb-3">Forgot Your Password?</h3>               
                    @if ($errors->any())
                        <ul class="text-red-500 text-center mb-3 font-ltmuseumreg">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @elseif (session()->has('status'))
                        <div class="text-green-500 text-center mb-3 font-ltmuseumreg">
                            {{ session('status') }}
                        </div>
                    @endif                   
                    <div class="flex flex-col gap-6">
                        @csrf
                        <div class="relative w-full">
                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <input type="hidden" name="email" value="{{ request()->email }}">
                            <input name="password" type="password" placeholder="New Password" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1 mb-3 font-ltmuseum">
                            <input name="password_confirmation" type="password" placeholder="Confirm Password" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1 font-ltmuseum mb-3">
                            <button type="submit" value="Update Password" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full font-ltmuseumbold">Reset Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>