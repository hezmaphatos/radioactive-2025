<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2023 | Login</title>
</head>

<body>
    <section class="bg-black h-screen relative">
        <img class="absolute inset-0 h-auto w-full lg:h-3/4 max-w-full max-h-full m-auto opacity-50" src="{{ asset('images/logo2024.png') }}" />
        <div class="container mx-auto p-4">
            <form action="/login" method="POST">
                <div class="bg-opacity-75 flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                    <div class="p-6 flex flex-col gap-4">
                        @csrf
                        @if ($errors->any())
                            <div class="bg-red-500 text-white p-2 rounded-md mb-4">
                                <ul class="list-none">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="relative w-full min-w-[200px] h-11">
                            <p class="font-ltmuseumbold text-xl">EMAIL</p>
                            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="font-ltmuseumbold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-7">
                            <p class="font-ltmuseumbold text-xl">PASSWORD</p>
                            <input name="password" type="password" placeholder="Password" class="font-ltmuseumbold mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </div>
                        <div class="flex items-center mt-4">
                            <input id="remember_me" name="remember" type="checkbox" class="h-12 w-4 text-[#D61625] focus:ring-[#D61625] border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900 font-ltmuseumreg">Remember Me</label>
                        </div>
                        <div class="w-full min-w-[200px] h-11">
                            <button type="submit" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full">Login</button>
                        </div>
                        <div class="flex justify-center w-full min-w-[200px]">
                            <a class="text-blue-600 hover:text-blue-500 text-s" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="relative w-full min-w-[200px]">
                            <a href="/signup" class="flex justify-center text-blue-600 text-s hover:text-blue-500">Don't have an account yet? Register here!</a>
                        </div>
                        
<div class="absolute inset-0 z-0 h-full w-full bg-black" />
    <img src="{{ url('/images/LOGO RADIOACTIVE 2024 png.png') }}" alt="Image"
        class=" absolute inset-0 z-0 h-full w-[80%] m-auto  object-cover" />
    <div class="absolute inset-0 z-0 h-full w-full bg-black/50" />
    <div class="container relative z-40 mx-auto p-8 flex items-center justify-center">
        <video autoplay loop muted src="{{ url('/img/logo.webm') }}" alt="Image" class="h-32" loading="lazy"/>
    </div>
    <div class="class=container mx-auto p-4">
        <form action="/login" method="POST">
            <div
                class="class=flex flex-col bg-clip-border bg-white/70 text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                <!-- <div
                    class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-28 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                    <h3 class="block antialiased tracking-normal font-sans text-3xl font-bold leading-snug text-white">
                        Log In</h3>
                </div> -->
                <div class="p-4 flex flex-col gap-4 font-ltmuseum">
                    @csrf
                    <div class="relative w-full min-w-[200px] h-11 mb-5">
                        <label for="email" class="text-xs font- mx-2">EMAIL
                        <input name="email" type="email" placeholder="Email" id="email"
                            class=" px-3 py-2 bg-white/70 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61525] focus:ring-[#D61525] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </label>
                    </div>
                    <div class="relative w-full min-w-[200px] h-11 mb-2">
                        <label for="password" class="text-xs font-semibold mx-2">PASSWORD
                        <input name="password" type="password" placeholder="Password" id="password"
                            class=" px-3 py-2 bg-white/70 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61525] focus:ring-[#D61525] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </label>
                    </div>
                    <div class="relative w-full min-w-[200px] text-left text-xs font-semibold mx-1">
                        <a class="text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">Forget
                            Password?</a>
                    </div>
                    <div class="relative w-full min-w-[200px] h-11 mb-3">
                        <button type="submit"
                            class="bg-[#D61525] hover:shadow-lg  hover:shadow-[#D61525]/40 text-white py-2 px-9 rounded-xl block text-sm mx-auto my-6 font-ltmuseum tracking-wider active:bg-[#d615255d]">
                            LOGIN
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
