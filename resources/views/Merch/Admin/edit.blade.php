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

<body class="bg-white flex justify-center overflow-scroll p-16 gap-8 flex-wrap">
    <div class="flex justify-center bg-gray-300 p-4 rounded drop-shadow-xl w-80 max-w-screen-sm">
        @if (session()->has('success'))
            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
        @endif
        <form action="/merch/admin/{{ $merch->id }}/update" class="" enctype="multipart/form-data"
            method="post">
            @csrf
            @method('put')
            <div class="w-full font-taruno text-md md:text-lg text-black text-center">Edit Merch</div>
            <div class="mb-1">
                <label class="block form-label text-sm mb-0 text-black" for="">
                    <span class="">Nama Merch</span>
                </label>
                <div>
                    <input required
                        class="block @error('name') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Nama Merch" name="name" value="{{ old('name', $merch->name) }}">
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
                        class="block @error('description') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                        name="description" id="" cols="30" rows="5" required>{{ old('description', $merch->description) }}</textarea>
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
                        class="block @error('price') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                        type="number" placeholder="100000" name="price" value="{{ old('price', $merch->price) }}">
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
                        class="block @error('stock') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                        type="number" placeholder="100" name="stock" value="{{ old('stock', $merch->stock) }}">
                    @error('stock')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block form-label text-sm mb-0 text-black" for="">
                    <span class="">Cover Image</span>
                </label>
                <input type="hidden" name="old_image" value="{{ $merch->image }}">
                <input class="block @error('image') border-red-500 @enderror w-full text-xs bg-white text-black"
                    type="file" accept="image/*" name="image" id="image" onchange="previewImage()">

                <label class="block form-label text-sm mb-0 text-black" for="">
                    <span class="">Preview</span>
                </label>
                <img src="{{ asset('storage/' . $merch->image) }}" alt="" class="img-preview h-80">
                @error('image')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <button class="button-submit text-white bg-black w-full text-sm px-5 py-1 rounded text-center"
                type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                Submit
            </button>
        </form>
    </div>
    <div
        class="flex justify-center items-center align-middle bg-gray-300 p-4 rounded drop-shadow-xl flex-wrap w-80 max-w-screen-sm gap-4">
        <div class="w-full font-taruno text-md md:text-lg text-black text-center">Merch Images</div>
        @foreach ($merch->images as $picture)
            <div class="rounded p-2 bg-gray-100">
                <img class="w-48 object-contain" src="{{ asset('storage/' . $picture->image) }}" alt="">
                <p class="text-black text-center w-full">{{ $picture->description }}</p
                    class="text-black text-center w-full">
                <form action="/merch/admin/image/{{ $picture->id }}/delete" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Are you sure you want to delete image?')" type="submit"
                        class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 rounded">
                        Delete</button>
                </form>
            </div>
        @endforeach
        <a href="/merch/admin/1/addimage">
            <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
                Add Image
            </button>
        </a>
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
