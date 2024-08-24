<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2024 | Forgot Password</title>
</head>
<body>
    <section class="bg-black h-screen relative">
        <div class="w-full h-screen flex items-center justify-center">
            <img class="h-auto max-w-full max-h-full" src="{{ asset('images/LOGO RADIOACTIVE 2024.png') }}" alt="Radioactive 2024 Logo">
        </div>
        <div class="container absolute top-0 left-1/2 transform -translate-x-1/2 z-40 mx-auto p-8 flex items-start justify-center">
            <img src="{{ url('images/LOGO UMN RADIO.webp') }}" alt="Image" class="h-20" />
        </div>
        <div class="container mx-auto p-4">
            <form action="{{ route('password.email') }}" method="post">
                <div class="flex flex-col bg-clip-border rounded-xl bg-white bg-opacity-75 text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                    <h3 class="font-ltmuseumbold text-2xl font-bold text-black text-center mt-9">Forgot Your Password?</h3>
                    
                    @if ($message = session('status'))
                        <div class="text-green-500 text-center mt-3">
                            {{ $message }}
                        </div>
                    @elseif ($errors->any())
                        <ul class="text-red-500 text-center mt-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center mt-3 font-ltmuseum">Please enter your mail to password reset request.</p>
                    @endif
                    
                    <div class="p-6 flex flex-col gap-4">
                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <input name="email" type="email" placeholder="Email" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1 font-ltmuseumreg" required>
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mb-3">
                            <button type="submit" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full font-ltmuseumbold">Send Reset Link</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
