@extends('dashboard.layouts.main')

@section('container')
<div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
    <h2 class="text-title-md2 font-bold text-black">
        Edit Data RAC
    </h2>
    <nav>
        <ol class="flex items-center gap-2">
            <li>
                <a class="font-medium" href="/dashboard">Dashboard /</a>
            </li>
            <li>
                <a class="font-medium text-primary" href="/dashboard/racs">RAC</a>
            </li>
        </ol>
    </nav>
</div>
    <form method="post" action="/dashboard/racs/{{ $rac->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf       
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
        @if($rac->tim1_nama)
        <div class="flex flex-col gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default">
            <div class="border-b border-stroke px-6.5 py-4">
              <h3 class="font-medium text-black">
                Tim 1
              </h3>
            </div>
            <div class="flex flex-col gap-5.5 p-6.5">
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nama Tim
                </label>
                <input name="tim1_nama" type="text" placeholder="Nama Tim" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_nama') border-red-500 @enderror" value="{{ old('tim1_nama', $rac->tim1_nama) }}">
                @error('tim1_nama')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Penyiar 1
                </label>
                <input name="tim1_penyiar1" type="text" placeholder="Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_penyiar1') border-red-500 @enderror" value="{{ old('tim1_penyiar1', $rac->tim1_penyiar1) }}">
                @error('tim1_penyiar1')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Penyiar 2
                </label>
                <input name="tim1_penyiar2" type="text" placeholder="Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_penyiar2') border-red-500 @enderror" value="{{ old('tim1_penyiar2', $rac->tim1_penyiar2) }}">
                @error('tim1_penyiar2')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Operator
                </label>
                <input name="tim1_operator" type="text" placeholder="Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_operator') border-red-500 @enderror" value="{{ old('tim1_operator', $rac->tim1_operator) }}">
                @error('tim1_operator')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Institusi/Organisasi Asal
                </label>
                <input name="tim1_institusi" type="text" placeholder="Institusi/Organisasi Asal" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_institusi') border-red-500 @enderror" value="{{ old('tim1_institusi', $rac->tim1_institusi) }}">
                @error('tim1_institusi')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Penyiar 1
                </label>
                <input name="tim1_nims1" type="text" placeholder="Nim Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_nims1') border-red-500 @enderror" value="{{ old('tim1_nims1', $rac->tim1_nims1) }}">
                @error('tim1_nims1')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Penyiar 2
                </label>
                <input name="tim1_nims2" type="text" placeholder="Nim Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_nims2') border-red-500 @enderror" value="{{ old('tim1_nims2', $rac->tim1_nims2) }}">
                @error('tim1_nims2')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Operator
                </label>
                <input name="tim1_nimop" type="text" placeholder="Nim Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary  @error('tim1_nimop') border-red-500 @enderror" value="{{ old('tim1_nimop', $rac->tim1_nimop) }}">
                @error('tim1_nimop')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  WA
                </label>
                <input name="tim1_contact_wa" type="text" placeholder="WA" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_contact_wa') border-red-500 @enderror" value="{{ old('tim1_contact_wa', $rac->tim1_contact_wa) }}">
                @error('tim1_contact_wa')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  LINE
                </label>
                <input name="tim1_contact_line" type="text" placeholder="LINE" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_contact_line') border-red-500 @enderror" value="{{ old('tim1_contact_line', $rac->tim1_contact_line) }}">
                @error('tim1_contact_line')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Email
                </label>
                <input name="tim1_email" type="text" placeholder="Email" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim1_email') border-red-500 @enderror" value="{{ old('tim1_email', $rac->tim1_email) }}">
                @error('tim1_email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
        </div>
        @endif
        @if($rac->tim2_nama)
        <div class="flex flex-col gap-9">
          <div class="rounded-sm border border-stroke bg-white shadow-default">
          <div class="border-b border-stroke px-6.5 py-4">
            <h3 class="font-medium text-black">
              Tim 2
            </h3>
          </div>
          <div class="flex flex-col gap-5.5 p-6.5">
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nama Tim
              </label>
              <input name="tim2_nama" type="text" placeholder="Nama Tim" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_nama') border-red-500 @enderror" value="{{ old('tim2_nama', $rac->tim2_nama) }}">
              @error('tim2_nama')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Penyiar 1
              </label>
              <input name="tim2_penyiar1" type="text" placeholder="Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_penyiar1') border-red-500 @enderror" value="{{ old('tim2_penyiar1', $rac->tim2_penyiar1) }}">
              @error('tim2_penyiar1')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Penyiar 2
              </label>
              <input name="tim2_penyiar2" type="text" placeholder="Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_penyiar2') border-red-500 @enderror" value="{{ old('tim2_penyiar2', $rac->tim2_penyiar2) }}">
              @error('tim2_penyiar2')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Operator
              </label>
              <input name="tim2_operator" type="text" placeholder="Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_operator') border-red-500 @enderror" value="{{ old('tim2_operator', $rac->tim2_operator) }}">
              @error('tim2_operator')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Institusi/Organisasi Asal
              </label>
              <input name="tim2_institusi" type="text" placeholder="Institusi/Organisasi Asal" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_institusi') border-red-500 @enderror" value="{{ old('tim2_institusi', $rac->tim2_institusi) }}">
              @error('tim2_institusi')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Penyiar 1
              </label>
              <input name="tim2_nims1" type="text" placeholder="Nim Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_nims1') border-red-500 @enderror" value="{{ old('tim2_nims1', $rac->tim2_nims1) }}">
              @error('tim2_nims1')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Penyiar 2
              </label>
              <input name="tim2_nims2" type="text" placeholder="Nim Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_nims2') border-red-500 @enderror" value="{{ old('tim2_nims2', $rac->tim2_nims2) }}">
              @error('tim2_nims2')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Operator
              </label>
              <input name="tim2_nimop" type="text" placeholder="Nim Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_nimop') border-red-500 @enderror" value="{{ old('tim2_nimop', $rac->tim2_nimop) }}">
              @error('tim2_nimop')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                WA
              </label>
              <input name="tim2_contact_wa" type="text" placeholder="WA" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_contact_wa') border-red-500 @enderror" value="{{ old('tim2_contact_wa', $rac->tim2_contact_wa) }}">
              @error('tim2_contact_wa')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                LINE
              </label>
              <input name="tim2_contact_line" type="text" placeholder="LINE" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_contact_line') border-red-500 @enderror" value="{{ old('tim2_contact_line', $rac->tim2_contact_line) }}">
              @error('tim2_contact_line')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Email
              </label>
              <input name="tim2_email" type="text" placeholder="Email" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim2_email') border-red-500 @enderror" value="{{ old('tim2_email', $rac->tim2_email) }}">
              @error('tim2_email')
              <div class="text-red-500">
                  {{ $message }}
              </div>
              @enderror
            </div>
            </div>
          </div>
        </div>        
        @endif
      @if($rac->tim3_nama)
      <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default">
        <div class="border-b border-stroke px-6.5 py-4">
          <h3 class="font-medium text-black">
            Tim 3
          </h3>
        </div>
        <div class="flex flex-col gap-5.5 p-6.5">
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Nama Tim
            </label>
            <input name="tim3_nama" type="text" placeholder="Nama Tim" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_nama') border-red-500 @enderror" value="{{ old('tim3_nama', $rac->tim3_nama) }}">
            @error('tim3_nama')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Penyiar 1
            </label>
            <input name="tim3_penyiar1" type="text" placeholder="Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_penyiar1') border-red-500 @enderror" value="{{ old('tim3_penyiar1', $rac->tim3_penyiar1) }}">
            @error('tim3_penyiar1')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Penyiar 2
            </label>
            <input name="tim3_penyiar2" type="text" placeholder="Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_penyiar2') border-red-500 @enderror" value="{{ old('tim3_penyiar2', $rac->tim3_penyiar2) }}">
            @error('tim3_penyiar2')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Operator
            </label>
            <input name="tim3_operator" type="text" placeholder="Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_operator') border-red-500 @enderror" value="{{ old('tim3_operator', $rac->tim3_operator) }}">
            @error('tim3_operator')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Institusi/Organisasi Asal
            </label>
            <input name="tim3_institusi" type="text" placeholder="Institusi/Organisasi Asal" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_institusi') border-red-500 @enderror" value="{{ old('tim3_institusi', $rac->tim3_institusi) }}">
            @error('tim3_institusi')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Nim Penyiar 1
            </label>
            <input name="tim3_nims1" type="text" placeholder="Nim Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_nims1') border-red-500 @enderror" value="{{ old('tim3_nims1', $rac->tim3_nims1) }}">
            @error('tim3_nims1')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Nim Penyiar 2
            </label>
            <input name="tim3_nims2" type="text" placeholder="Nim Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_nims2') border-red-500 @enderror" value="{{ old('tim3_nims2', $rac->tim3_nims2) }}">
            @error('tim3_nims2')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Nim Operator
            </label>
            <input name="tim3_nimop" type="text" placeholder="Nim Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_nimop') border-red-500 @enderror" value="{{ old('tim3_nimop', $rac->tim3_nimop) }}">
            @error('tim3_nimop')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              WA
            </label>
            <input name="tim3_contact_wa" type="text" placeholder="WA" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_contact_wa') border-red-500 @enderror" value="{{ old('tim3_contact_wa', $rac->tim3_contact_wa) }}">
            @error('tim3_contact_wa')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              LINE
            </label>
            <input name="tim3_contact_line" type="text" placeholder="LINE" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_contact_line') border-red-500 @enderror" value="{{ old('tim3_contact_line', $rac->tim3_contact_line) }}">
            @error('tim3_contact_line')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div>
            <label class="mb-3 block text-sm font-medium text-black">
              Email
            </label>
            <input name="tim3_email" type="text" placeholder="Email" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary @error('tim3_email') border-red-500 @enderror" value="{{ old('tim3_email', $rac->tim3_email) }}">
            @error('tim3_email')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
          </div>
          </div>
        </div>
      </div>
      @endif
      </div>  
      <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
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
          <div class="text-red-500">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
    </div>
  <div>
    <button type="submit" class="mt-3 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
        Update RAC
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
@endsection
