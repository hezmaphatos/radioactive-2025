<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2025 | Register</title>
</head>

<body>
    <section class="bg-[#2d6229] h-screen relative">
        <div class="w-full h-screen flex items-center justify-center">
            <img class="h-auto max-w-full max-h-full" src="{{ asset('images/LOGO_RADIOACTIVE2025.png') }}" alt="Radioactive 2025 Logo">
        </div>
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 z-40 p-8">
            <img src="{{ url('images/LOGO UMN RADIO.webp') }}" alt="Image" class="h-16 md:h-10 lg:h-24" />
        </div>
        <div class="container mx-auto p-4">
            <form action="/signup" method="POST">
                <div class="bg-opacity-75 flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                    <div class="p-6 flex flex-col gap-4">
                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <p class="font-ltmuseumbold text-lg text-black">Name</p>
                            <input name="name" type="name" placeholder="Name" class="font-ltmuseumreg mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#f6e79c] focus:ring-[#f6e79c] block w-full rounded-xl sm:text-sm focus:ring-1" required>
                            @error('name')
                            <div class="text-red-500">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-7">
                            <p class="font-ltmuseumbold text-lg text-black">EMAIL</p>
                            <input name="email" type="email" placeholder="Email" class="font-ltmuseumreg mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#f6e79c] focus:ring-[#f6e79c] block w-full rounded-xl sm:text-sm focus:ring-1" required>
                            @error('email')
                            <div class="text-red-500">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-7">
                            <p class="font-ltmuseumbold text-lg text-black">PASSWORD</p>
                            <input name="password" type="password" placeholder="Password" class="font-ltmuseumreg mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#f6e79c] focus:ring-[#f6e79c] block w-full rounded-xl sm:text-sm focus:ring-1" required>
                            @error('password')
                            <div class="text-red-500">
                              {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mt-10">
                            <button type="submit" class="bg-[#f6e79c] hover:bg-[#b5aa72] text-white font-ltmuseumbold py-2 px-4 rounded-xl block w-full glow-text transition duration-300 ease-in-out">Register now!</button>
                        </div>
                        <div class="relative w-full min-w-[200px]">
                            <a href="/login" class="flex justify-center text-blue-600 hover:text-blue-500 no-underline font-ltmuseumbold">Have an account? Log in here!</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
