@extends('Dashboard.layouts.main')

@section('container')
    <div class="flex justify-center align-middle items-center flex-wrap gap-4">
        <a href="/dashboard/merches/{{ $merch->id }}/edit">
            <button class="button-submit text-white bg-black w-full text-sm px-5 py-1 text-center">Back to Edit
                Page</button>
        </a>
        <form action="/dashboard/merches/{{ $merch->id }}/storeimage" class="pb-24 w-full" enctype="multipart/form-data"
            method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content px-8 py-3 mb-10 font-ltmuseum bg-gray-300">
                        <div class="w-full font-ltmuseumbold text-md md:text-lg text-black text-center">Tambah Gambar</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>

                            <div class="mb-1">
                                <h3 class="text-black">Tambah Gambar Untuk <p class="text-black font-bold">
                                        {{ $merch->name }}</p>
                                    </h1>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0 text-black" for="">
                                    <span class="">Deskripsi Gambar</span>
                                </label>
                                <div>
                                    <textarea
                                        class="block @error('description') border-red-500 @enderror shadow appearance-none border border-black text-black bg-white w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        name="description" id="" cols="30" rows="5" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-1">
                                <input required
                                    class="block @error('image') border-red-500 @enderror w-full mb-5 text-xs text-black bg-white"
                                    type="file" accept="image/*" name="image">
                                @error('image')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
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
@endsection