@extends('Dashboard.layouts.main')

@section('container')
<div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black">
        Edit Data Merch
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
     
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="grid grid-cols-1 gap-9 sm:grid-cols-4">
        <form method="post" action="/dashboard/merches/{{ $merch->id }}" enctype="multipart/form-data">
          @method('put')
          @csrf  
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
                <input name="name" type="text" placeholder="Nama Merch" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('name') border-red-500 @enderror" value="{{ old('name', $merch->name)}}">
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
                <textarea name="description" type="text" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('description') border-red-500 @enderror">{{ old('description', $merch->description) }}</textarea>
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
                <input name="price" type="number" placeholder="100000" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('price') border-red-500 @enderror" value="{{ old('price', $merch->price) }}">
                @error('price')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="hidden">
                <label class="mb-3 block text-sm font-medium text-black">
                  Stock
                </label>
                <input name="stock" type="number" placeholder="100" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('stock') border-red-500 @enderror" value="{{ old('stock', $merch->stock) }}">
                @error('stock')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label for="image" class="mb-3 block text-sm font-medium text-black">
                    Cover Image
                </label>
                <input type="hidden" name="oldImage" value="{{ $merch->image }}">
                @if($merch->image)
                    <img src="{{ asset('storage/' . $merch->image )}}" class="img-preview img-fluid mb-3 col-sm-5 w-48 h-64 object-cover">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5 w-48 h-64 object-cover">
                @endif
                <input type="file" id="image" name="image" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter @error('image') border-red-500 @enderror" onchange="previewImage()"/>
                @error('image')
                <div class="text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
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
          <div class="p-6.5">
            <button type="submit" class="mt-3 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
                Update Merch
            </button>
          </div>   
        </div>
      </div>
      </form>
      <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default">
        <div class="border-b border-stroke px-6.5 py-4">
          <h3 class="font-medium text-black">
            Merch Images
          </h3>
      <div class="flex gap-4 flex-wrap w-full justify-center">
          @foreach ($merch->images as $picture)
              <div class="rounded p-2 bg-gray-100">
                  <img class="w-48 object-contain" src="{{ asset('storage/' . $picture->image) }}" alt="">
                  <p class="text-black text-center w-full">{{ $picture->description }}</p>
                  <form action="/dashboard/merches/image/{{ $picture->id }}/delete" method="post" class="inline">
                      @method('delete')
                      @csrf
                      <button onclick="return confirm('Are you sure you want to delete image?')" type="submit"
                          class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 rounded">
                          Delete</button>
                  </form>
              </div>
          @endforeach
      </div>
      <a href="{{ url('/dashboard/merches/' . $merch->id . '/addimage') }}">
          <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
              Add Image
          </button>
      </a>
  </div> 
</div>
</div>
<div class="flex flex-col gap-9">
  <div class="rounded-sm border border-stroke bg-white shadow-default">
  <div class="border-b border-stroke px-6.5 py-4">
    <h3 class="font-medium text-black">
      Merch Variants
    </h3>
  <div class="flex gap-4 flex-wrap">
      @foreach ($merch->merchvariations as $variation)
          <div class="rounded p-2 bg-gray-100 w-full h-fit">
              <form id="form-{{ $variation->id }}" action="/dashboard/merches/{{ $variation->id }}/updatevariation"
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
              <form action="/dashboard/merches/{{ $variation->id }}/delete" method="post" class="inline">
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
  <a href="/dashboard/merches/{{ $merch->id }}/addvariation">
      <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
          Add Variation
      </button>
  </a>
</div>
  </div>
</div>
<div class="flex flex-col gap-9">
  <div class="rounded-sm border border-stroke bg-white shadow-default">
  <div class="border-b border-stroke px-6.5 py-4">
    <h3 class="font-medium text-black">
      Merch Links
    </h3>
  <div class="flex gap-4 flex-wrap">
      @foreach ($merch->merchlinks as $link)
          <div class="rounded p-2 bg-gray-100 w-full h-fit">
              <form id="linkform-{{ $link->id }}" action="/dashboard/merches/{{ $link->id }}/updatelink"
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
              <form action="/dashboard/merches/{{ $link->id }}/deletelink" method="post" class="inline">
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
  <a href="/dashboard/merches/{{ $merch->id }}/addlink">
      <button class="text-white bg-black w-full text-sm px-5 py-1 rounded text-center">
          Add Link
      </button>
  </a>
</div>
  </div>
</div>

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
