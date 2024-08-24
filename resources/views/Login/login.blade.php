<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2024 | Login</title>
</head>
<body>
    <section class="bg-black h-screen relative">
        <div class="absolute inset-0 flex items-center justify-center">
            <img class="h-auto max-w-full max-h-full" src="{{ asset('images/LOGO RADIOACTIVE 2024.png') }}" alt="Radioactive 2024 Logo">
        </div>
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 z-40 p-8">
            <img src="{{ url('images/LOGO UMN RADIO.webp') }}" alt="Image" class="h-16 md:h-10 lg:h-24" />
        </div>       
        <div class="container mx-auto">
            <form action="/login" method="POST">
                <div class="bg-opacity-75 flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4 p-6">
                        @csrf
                        @if ($errors->any())
                            <div class="bg-red-500 text-white p-4 rounded-md font-ltmuseumreg">
                                <ul class="list-none">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @elseif (session()->has('status'))
                            <div class="bg-green-500 text-white p-2 rounded=md font-ltmuseumreg">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="bg-green-500 text-white p-2 rounded=md font-ltmuseumreg">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="relative w-full min-w-[200px] h-11">
                            <p class="font-ltmuseumbold text-lg text-black">EMAIL</p>
                            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="font-ltmuseumreg px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1" required>
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-6">
                            <p class="font-ltmuseumbold text-lg text-black">PASSWORD</p>
                            <input name="password" type="password" placeholder="Password" class="font-ltmuseumreg px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1" required>
                        </div>
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember" type="checkbox" class="h-12 w-4 text-[#D61625] focus:ring-[#D61625] border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 text-sm text-gray-900 font-ltmuseumbold">Remember Me</label>
                            </div>
                            <a class="text-blue-600 hover:text-blue-500 text-sm no-underline font-ltmuseumbold" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>                        
                        <div class="w-full min-w-[200px] h-11">
                            <button type="submit" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-ltmuseumbold py-2 px-4 rounded-xl block w-full">Login</button>
                        </div>
                        <div class="relative w-full min-w-[200px]">
                            <a href="/signup" class="flex justify-center text-blue-600 text-sm font-ltmuseumbold hover:text-blue-500 no-underline mt-2">Don't have an account yet? Register here!</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>
