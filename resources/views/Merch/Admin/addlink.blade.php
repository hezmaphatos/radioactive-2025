<!-- resources/views/Merch/Admin/addlink.blade.php -->
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
        <form action="/merch/admin/{{ $merch->id }}/storelink" class="pb-24 w-full" enctype="multipart/form-data"
            method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content px-8 py-3 mb-10 font-ltmuseum bg-gray-300">
                        <div class="w-full font-ltmuseumbold text-md md:text-lg text-black text-center">Add Merch Link For
                            {{ $merch->name }}</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="link-type">
                                    <span class="">Link Type</span>
                                </label>
                                <div>
                                    <input list="link-types" name="type" id="link-type"
                                        class="block @error('type') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        value="{{ old('type') }}">
                                    <datalist id="link-types">
                                        <option value="TOKOPEDIA"></option>
                                        <option value="SHOPEE"></option>
                                        <option value="TIKTOK"></option>
                                        <!-- Add more predefined options if needed -->
                                    </datalist>
                                    @error('type')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Link Title</span>
                                </label>
                                <div>
                                    <input name="title" type="text"
                                        class="block @error('title') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Link URL</span>
                                </label>
                                <div>
                                    <input name="link" type="url"
                                        class="block @error('link') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        value="{{ old('link') }}">
                                    @error('link')
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
