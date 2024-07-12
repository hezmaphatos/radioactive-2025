<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Forgot Password</title>
</head>

<body>
    <section class="bg-black h-screen relative">
        <img class="absolute inset-0 h-auto w-full lg:h-3/4 max-w-full max-h-full m-auto opacity-50" src="{{ asset("images/LOGO RA.png") }}"/>
        <div class="container mx-auto p-4">
            <form action="{{ route('password.email') }}" method="post">
                <div class="flex flex-col bg-clip-border rounded-xl bg-white bg-opacity-75 text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                        <h3 class="font-ltmuseumbold text-2xl font-bold text-black text-center mt-9">Forgot Your Password?</h3>
                    @if ($errors->any())
                        <ul class="text-red-500 text-center">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center mt-3 font-ltmuseumreg">Please enter your mail to password reset request.</p>
                    @endif
                    <div class="p-6 flex flex-col gap-4">
                        @csrf
                        <div class="relative w-full min-w-[200px] h-11">
                            <input name="email" type="email" placeholder="Email" class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#D61625] focus:ring-[#D61625] block w-full rounded-xl sm:text-sm focus:ring-1">
                        </div>
                        <div class="relative w-full min-w-[200px] h-11 mb-3">
                            <button type="submit" class="bg-[#D61625] hover:bg-[#9B1625] text-white font-bold py-2 px-4 rounded-xl block w-full">Send Reset Link</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
