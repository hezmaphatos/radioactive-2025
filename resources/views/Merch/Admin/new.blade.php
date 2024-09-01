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

<body class="bg-white min-h-screen flex justify-center align-middle items-center overflow-scroll">
    <div class="flex justify-center align-middle items-center flex-wrap gap-4">
        <a href="/merch/admin/dashboard">
            <button class="button-submit text-white bg-black w-full text-sm px-5 py-1 text-center">Back to
                Dashboard</button>
        </a>
        <form action="/merch/admin/store" class="w-full" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content px-8 py-3 mb-10 font-pathway bg-gray-300 rounded">
                        <div class="w-full font-taruno text-md md:text-lg text-black text-center">Data Merch</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Nama Merch</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('name') border-red-500 @enderror shadow appearance-none border text-black bg-white border-black  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nama Merch" name="name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Deskripsi Merch</span>
                                </label>
                                <div>
                                    <textarea
                                        class="block @error('description') border-red-500 @enderror shadow appearance-none border text-black bg-white border-black  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        name="description" id="" cols="30" rows="5" required>{{ old('description') }}</textarea>
                                    @error('name')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Harga</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('price') border-red-500 @enderror shadow appearance-none border text-black bg-white border-black  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="number" placeholder="100000" name="price" value="{{ old('price') }}">
                                    @error('price')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Stock</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('stock') border-red-500 @enderror shadow appearance-none border text-black bg-white border-black  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="number" placeholder="100" name="stock" value="{{ old('stock') }}">
                                    @error('stock')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block form-label text-sm mb-0 text-black text-black" for="">
                                    <span class="">Cover Image</span>
                                </label>
                                <input
                                    class="block @error('image') border-red-500 @enderror w-full text-xs bg-white text-black"
                                    type="file" accept="image/*" name="image" id="image"
                                    onchange="previewImage()">

                                <label class="block form-label text-sm mb-0 text-black text-black" for="">
                                    <span class="">Preview</span>
                                </label>
                                <img src="" alt="" class="img-preview h-80 hidden">
                                @error('image')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>

                            <button
                                class="button-submit text-white bg-black w-full text-sm px-5 py-1 rounded text-center"
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

<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

</html>
