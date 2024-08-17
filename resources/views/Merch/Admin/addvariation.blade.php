<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radioactive UMN</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-white min-h-screen flex justify-center align-middle items-center">
    <div class="flex justify-center align-middle items-center flex-wrap gap-4">
        <a href="/merch/admin/{{ $merch->id }}/edit">
            <button class="button-submit text-white bg-black w-full text-sm px-5 py-1 text-center">Back to Edit
                Page</button>
        </a>
        <form action="/merch/admin/{{ $merch->id }}/storevariation" class="pb-24 w-full" enctype="multipart/form-data"
            method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content px-8 py-3 mb-10 font-pathway bg-gray-300">
                        <div class="w-full font-taruno text-md md:text-lg text-black text-center">Add Variation</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>

                            <div class="mb-1">
                                <h3 class="text-black">Add Variation For <p class="text-black font-bold">
                                        {{ $merch->name }}</p>
                                    </h1>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Variation Description</span>
                                </label>
                                <div>
                                    <input name="description" type="text" class="block @error('description') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline" value="{{ old('description') }}">
                                    @error('description')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Stock</span>
                                </label>
                                <div>
                                    <input name="stock" type="number" class="block @error('stock') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline" value="{{ old('stock') }}">
                                    @error('stock')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Additional Fees</span>
                                </label>
                                <div>
                                    <input name="additional_price" type="number" class="block @error('additional_price') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline" value="{{ old('additional_price') }}">
                                    @error('additional_price')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <button class="button-submit text-white bg-black w-full text-sm px-5 py-1 text-center"
                                type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
