<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Reset Password</title>
</head>

<body>
    <section class="bg-black h-screen relative">
        <img class="absolute inset-0 h-auto w-full lg:h-3/4 max-w-full max-h-full m-auto opacity-50" src="{{ asset("images/logo2024.png") }}"/>
        <div class="container relative z-40 mx-auto p-8 flex items-center justify-center">
            <img src="{{ url('/images/logoRadio-putih.webp') }}" alt="Image" class="h-20" />
        </div>
        <div class="container mx-auto p-4">
            <form action="{{ route('password.update') }}" method="post">
                <div class="flex flex-col bg-clip-border rounded-xl bg-white bg-opacity-75 text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                        <h3 class="font-ltmuseumbold text-2xl font-bold text-black text-center mt-9">Forgot Your Password?</h3>
                        @if ($errors->any())
                        <ul class="text-red-500 text-center">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @elseif (session()->has('status'))
                        <div class="text-green-500 text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="p-6 flex flex-col gap-14">
                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <input type="hidden" name="email" value="{{ request()->email }}">
                            <input name="password" type="password" placeholder="New Password" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1 mb-3">
                            <input name="password_confirmation" type="password" placeholder="Confirm Password" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1 mb-3">
                        </div>
                        <div class="relative w-full min-w-[200px] h-5 mb-3">
                            <button type="submit" value="Update Password" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full">Reset Password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>