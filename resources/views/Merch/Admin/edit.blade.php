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
    @if (session()->has('success'))
        <div class="text-sm text-green-500 w-full text-center" role="alert">{{ session('success') }}</div>
    @endif
    <div class="flex justify-center bg-gray-300 p-4 rounded drop-shadow-xl w-80 max-w-screen-sm">
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
    <div class="bg-gray-300 p-4 rounded drop-shadow-xl flex-wrap w-80 max-w-screen-sm gap-8">
        <div class="w-full font-taruno text-md md:text-lg text-black text-center">Merch Images</div>
        <div class="flex gap-4 flex-wrap w-full justify-center">
            @foreach ($merch->images as $picture)
                <div class="rounded p-2 bg-gray-100">
                    <img class="w-48 object-contain" src="{{ asset('storage/' . $picture->image) }}" alt="">
                    <p class="text-black text-center w-full">{{ $picture->description }}</p>
                    <form action="/merch/admin/image/{{ $picture->id }}/delete" method="post" class="inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Are you sure you want to delete image?')" type="submit"
                            class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 rounded">
                            Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href="/merch/admin/{{ $merch->id }}/addimage">
            <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
                Add Image
            </button>
        </a>
    </div>
    <div class=" bg-gray-300 p-4 rounded drop-shadow-xl flex-wrap w-80 max-w-screen-sm">
        <div class="w-full font-taruno text-md md:text-lg text-black text-center h-fit">Merch Variants</div>
        <div class="flex gap-4 flex-wrap">
            @foreach ($merch->merchvariations as $variation)
                <div class="rounded p-2 bg-gray-100 w-full h-fit">
                    <form id="form-{{ $variation->id }}" action="/merch/admin/{{ $variation->id }}/updatevariation"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Description: </p>
                            <input required
                                class="block @error('description') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="" name="description"
                                value="{{ old('description', $variation->description) }}" disabled>
                            @error('description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Stock: </p>
                            <input required
                                class="block @error('stock') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="number" placeholder="" name="stock"
                                value="{{ old('stock', $variation->stock) }}" disabled>
                            @error('stock')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Additional Price: </p>
                            <input required
                                class="block @error('additional_price') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="number" placeholder="" name="additional_price"
                                value="{{ old('additional_price', $variation->additional_price) }}" disabled>
                            @error('additional_price')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex space-x-2">
                            <button id="saveButton-{{ $variation->id }}" type="submit"
                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold px-2 rounded hidden">
                                Save
                            </button>
                            <button type="button" onclick="cancelEditing({{ $variation->id }})"
                                class="bg-gray-500 hover:bg-gray-400 text-white font-bold px-2 rounded hidden"
                                id="cancelButton-{{ $variation->id }}">
                                Cancel
                            </button>
                        </div>
                    </form>
                    <br>
                    <form action="/merch/admin/{{ $variation->id }}/delete" method="post" class="inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Are you sure you want to delete variation?')" type="submit"
                            class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 rounded">
                            Delete
                        </button>
                    </form>
                    <button onclick="enableEditing({{ $variation->id }})" type="button"
                        class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold px-2 rounded">
                        Edit
                    </button>
                </div>

                <script>
                    function enableEditing(id) {
                        const form = document.getElementById('form-' + id);
                        const inputs = form.querySelectorAll('input[type="text"], input[type="number"]');
                        inputs.forEach(input => {
                            input.disabled = false;
                        });

                        // Show the Save and Cancel buttons
                        document.getElementById('saveButton-' + id).classList.remove('hidden');
                        document.getElementById('cancelButton-' + id).classList.remove('hidden');
                    }

                    function cancelEditing(id) {
                        const form = document.getElementById('form-' + id);
                        const inputs = form.querySelectorAll('input[type="text"], input[type="number"]');

                        // Reset the form to its initial state
                        form.reset();

                        // Disable the inputs again
                        inputs.forEach(input => {
                            input.disabled = true;
                        });

                        // Hide the Save and Cancel buttons
                        document.getElementById('saveButton-' + id).classList.add('hidden');
                        document.getElementById('cancelButton-' + id).classList.add('hidden');
                    }
                </script>
            @endforeach
        </div>
        <a href="/merch/admin/{{ $merch->id }}/addvariation">
            <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
                Add Variation
            </button>
        </a>
    </div>
    <div class="bg-gray-300 p-4 rounded drop-shadow-xl flex-wrap w-80 max-w-screen-sm">
        <div class="w-full font-taruno text-md md:text-lg text-black text-center h-fit">Merch Links</div>
        <div class="flex gap-4 flex-wrap">
            @foreach ($merch->merchlinks as $link)
                <div class="rounded p-2 bg-gray-100 w-full h-fit">
                    <form id="linkform-{{ $link->id }}" action="/merch/admin/{{ $link->id }}/updatelink"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Type: </p>
                            <input required
                                class="block @error('type') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="" name="type" value="{{ old('type', $link->type) }}"
                                disabled>
                            @error('type')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Title: </p>
                            <input required
                                class="block @error('title') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="" name="title"
                                value="{{ old('title', $link->title) }}" disabled>
                            @error('title')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-nowrap">
                            <p class="text-black w-full font-bold">Link: </p>
                            <input required
                                class="block @error('link') border-red-500 @enderror shadow appearance-none bg-white text-black placeholder-slate-400 border border-black w-full px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="url" placeholder="" name="link" value="{{ old('link', $link->link) }}"
                                disabled>
                            @error('link')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex space-x-2">
                            <button id="linksaveButton-{{ $link->id }}" type="submit"
                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold px-2 rounded hidden">
                                Save
                            </button>
                            <button type="button" onclick="cancelEditingLink({{ $link->id }})"
                                class="bg-gray-500 hover:bg-gray-400 text-white font-bold px-2 rounded hidden"
                                id="linkcancelButton-{{ $link->id }}">
                                Cancel
                            </button>
                        </div>
                    </form>
                    <br>
                    <form action="/merch/admin/{{ $link->id }}/deletelink" method="post" class="inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Are you sure you want to delete this link?')" type="submit"
                            class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 rounded">
                            Delete
                        </button>
                    </form>
                    <button onclick="enableEditingLink({{ $link->id }})" type="button"
                        class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold px-2 rounded">
                        Edit
                    </button>
                </div>

                <script>
                    function enableEditingLink(id) {
                        const form = document.getElementById('linkform-' + id);
                        const inputs = form.querySelectorAll('input[type="text"], input[type="url"]');
                        inputs.forEach(input => {
                            input.disabled = false;
                        });

                        // Show the Save and Cancel buttons
                        document.getElementById('linksaveButton-' + id).classList.remove('hidden');
                        document.getElementById('linkcancelButton-' + id).classList.remove('hidden');
                    }

                    function cancelEditingLink(id) {
                        const form = document.getElementById('linkform-' + id);
                        const inputs = form.querySelectorAll('input[type="text"], input[type="url"]');

                        // Reset the form to its initial state
                        form.reset();

                        // Disable the inputs again
                        inputs.forEach(input => {
                            input.disabled = true;
                        });

                        // Hide the Save and Cancel buttons
                        document.getElementById('linksaveButton-' + id).classList.add('hidden');
                        document.getElementById('linkcancelButton-' + id).classList.add('hidden');
                    }
                </script>
            @endforeach
        </div>
        <a href="/merch/admin/{{ $merch->id }}/addlink">
            <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
                Add Link
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
