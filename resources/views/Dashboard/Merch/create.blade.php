@extends('Dashboard.layouts.main')

@section('container')
<div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black">
        Create New Merch
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="/dashboard">Dashboard /</a>
            </li>
            <li>
                <a class="font-medium text-primary" href="/dashboard/merches">Merch</a>
            </li>
        </ol>
    </nav>
</div>
    <form method="post" action="/dashboard/merches" enctype="multipart/form-data">
        @csrf       
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
        <div class="flex flex-col gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default">
            <div class="border-b border-stroke px-6.5 py-4">
              <h3 class="font-medium text-black">
                Data Merch
              </h3>
            </div>
            <div class="flex flex-col gap-5.5 p-6.5">
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nama Merch
                </label>
                <input name="name" type="text" placeholder="Nama Merch" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('name') border-red-500 @enderror" value="{{ old('name')}}">
                @error('name')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Deskripsi Merch
                </label>
                <textarea name="description" type="text" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Harga
                </label>
                <input name="price" type="number" placeholder="100000" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('price') border-red-500 @enderror" value="{{ old('price') }}">
                @error('price')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Stock
                </label>
                <input name="stock" type="number" placeholder="100" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('stock') border-red-500 @enderror" value="{{ old('stock') }}">
                @error('stock')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <div>
                    <label for="image" class="mb-3 block text-sm font-medium text-black">
                        Cover Image
                    </label>
                    <input type="file" id="image" name="image" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter @error('image') border-red-500 @enderror" onchange="previewImage()"/>
                    <img class="img-preview img-fluid mb-3 col-sm-5 w-48 h-64 object-cover">
                    @error('image')
                    <div class="text-sm text-red-600">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>            
              {{-- <div class="mb-4">
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
            </div> --}}

          </div>
        </div>
      </div>

      </div>  
    </div>
      {{-- <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
        <div class="p-6.5 ">
          <label for="payment_proof" class="mb-3 block text-sm font-medium text-black dark:text-white">
            Bukti Pembayaran
          </label>
          <input type="hidden" name="oldImage" value="{{ $rac->payment_proof }}">
          @if($rac->payment_proof)
            <img src="{{ asset('storage/' . $rac->payment_proof )}}" class="img-preview img-fluid mb-3 col-sm-5 w-48 h-64 object-cover">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-5 w-48 h-64 object-cover">
          @endif
          <input type="file" id="payment_proof" name="payment_proof" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter @error('payment_proof') border-red-500 @enderror" onchange="previewImage()"/>
          @error('payment_proof')
          <div class="text-sm text-red-600">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div> --}}
      {{-- <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
        <div class="p-6.5 ">
      <label for="status" class="text-sm font-medium text-black">
        Select Role
    </label>
    <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-white">
        <select class="relative z-20 w-full appearance-none rounded border bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary @error('status') border-red-500 @enderror @change="isOptionSelected = true" name="status" id="status">
          @if($rac->status == 'Pending' || $rac->status == 'Approved')
          <option value="Pending" {{ old('status', $rac->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
          <option value="Approved" {{ old('status', $rac->status) == 'Approved' ? 'selected' : '' }}>Approved</option>
      @else
          <option value="Pending" class="text-body">Pending</option>
          <option value="Approved" class="text-body">Approved</option>
      @endif
            @error('status')
              <div class="text-sm text-red-600">
                {{ $message }}
              </div>
            @enderror
        </select>
      </div>
    </div>
    </div> --}}
  <div>
    <button type="submit" class="mt-3 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
        Create Merch
    </button>
  </div>
</form>

<script>
    function previewImage(){
      const image = document.querySelector('#payment_proof');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>
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
@endsection
