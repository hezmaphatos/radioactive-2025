@extends('dashboard.layouts.main')

@section('container')
<div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black">
        Edit Data MAC
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="/dashboard">Dashboard /</a>
            </li>
            <li>
                <a class="font-medium text-primary" href="/dashboard/macs">MAC</a>
            </li>
        </ol>
    </nav>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/macs/{{ $mac->id }}">
        @method('put')
        @csrf       
        <label for="nama" class="block text-sm font-medium text-black">Nama</label>
        <input id="nama" name="nama" type="text" placeholder="Nama" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('nama') border-red-500 @enderror" value="{{ old('nama', $mac->nama) }}"/>
        @error('nama')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="usia" class="block text-sm font-medium text-black">Usia</label>
        <input id="usia" name="usia" type="number" placeholder="Usia" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('usia') border-red-500 @enderror" value="{{ old('usia', $mac->usia) }}"/>
        @error('usia')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="no_telp" class="block text-sm font-medium text-black">No Telp</label>
        <input id="no_telp" name="no_telp" type="text" placeholder="No Telp" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('no_telp') border-red-500 @enderror" value="{{ old('no_telp', $mac->no_telp) }}"/>
        @error('no_telp')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="email" class="block text-sm font-medium text-black">Email</label>
        <input id="email" name="email" type="email" placeholder="Email" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('email') border-red-500 @enderror" value="{{ old('email', $mac->email) }}"/>
        @error('email')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="nim" class="block text-sm font-medium text-black">NIM</label>
        <input id="nim" name="nim" type="text" placeholder="NIM" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('nim') border-red-500 @enderror" value="{{ old('nim', $mac->nim) }}"/>
        @error('nim')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="institusi" class="block text-sm font-medium text-black">Institusi</label>
        <input id="institusi" name="institusi" type="text" placeholder="Institusi" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('institusi') border-red-500 @enderror" value="{{ old('institusi', $mac->institusi) }}"/>
        @error('institusi')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="uname" class="block text-sm font-medium text-black">Username</label>
        <input id="uname" name="uname" type="text" placeholder="Username" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('uname') border-red-500 @enderror" value="{{ old('uname', $mac->uname) }}"/>
        @error('uname')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <label for="link" class="block text-sm font-medium text-black">Link</label>
        <input id="link" name="link" type="text" placeholder="Link" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('link') border-red-500 @enderror" value="{{ old('link', $mac->link) }}"/>
        @error('link')
        <div class="text-red-500">
            {{ $message }}
        </div>
        @enderror

        <div>
            <button type="submit" class="mt-3 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
                Update MAC
            </button>
        </div>
    </form>    
</div>
@endsection
