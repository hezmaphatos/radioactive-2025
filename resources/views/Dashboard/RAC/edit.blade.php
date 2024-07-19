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
<div class="col-lg-8">
    <form method="post" action="/dashboard/racs/{{ $rac->id }}">
        @method('put')
        @csrf       
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="grid grid-cols-1 gap-9 sm:grid-cols-3">
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
                <input name="tim1_nama" type="text" placeholder="Nama Tim" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_nama', $rac->tim1_nama) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Penyiar 1
                </label>
                <input name="tim1_penyiar1" type="text" placeholder="Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_penyiar1', $rac->tim1_penyiar1) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Penyiar 2
                </label>
                <input name="tim1_penyiar2" type="text" placeholder="Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_penyiar2', $rac->tim1_penyiar2) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Operator
                </label>
                <input name="tim1_operator" type="text" placeholder="Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_operator', $rac->tim1_operator) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Institusi/Organisasi Asal
                </label>
                <input name="tim1_institusi" type="text" placeholder="Institusi/Organisasi Asal" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_institusi', $rac->tim1_institusi) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Penyiar 1
                </label>
                <input name="tim1_nims1" type="text" placeholder="Nim Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_nims1', $rac->tim1_nims1) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Penyiar 2
                </label>
                <input name="tim1_nims2" type="text" placeholder="Nim Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_nims2', $rac->tim1_nims2) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Nim Operator
                </label>
                <input name="tim1_nimop" type="text" placeholder="Nim Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_nimop', $rac->tim1_nimop) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  WA
                </label>
                <input name="tim1_contact_wa" type="text" placeholder="WA" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_contact_wa', $rac->tim1_contact_wa) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  LINE
                </label>
                <input name="tim1_contact_line" type="text" placeholder="LINE" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_contact_line', $rac->tim1_contact_line) }}">
              </div>
              <div>
                <label class="mb-3 block text-sm font-medium text-black">
                  Email
                </label>
                <input name="tim1_email" type="text" placeholder="Email" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim1_email', $rac->tim1_email) }}">
              </div>
            </div>
          </div>
        </div>
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
              <input name="tim2_nama" type="text" placeholder="Nama Tim" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_nama', $rac->tim2_nama) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Penyiar 1
              </label>
              <input name="tim2_penyiar1" type="text" placeholder="Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_penyiar1', $rac->tim2_penyiar1) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Penyiar 2
              </label>
              <input name="tim2_penyiar2" type="text" placeholder="Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_penyiar2', $rac->tim2_penyiar2) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Operator
              </label>
              <input name="tim2_operator" type="text" placeholder="Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_operator', $rac->tim2_operator) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Institusi/Organisasi Asal
              </label>
              <input name="tim2_institusi" type="text" placeholder="Institusi/Organisasi Asal" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_institusi', $rac->tim2_institusi) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Penyiar 1
              </label>
              <input name="tim2_nims1" type="text" placeholder="Nim Penyiar 1" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_nims1', $rac->tim2_nims1) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Penyiar 2
              </label>
              <input name="tim2_nims2" type="text" placeholder="Nim Penyiar 2" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_nims2', $rac->tim2_nims2) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Nim Operator
              </label>
              <input name="tim2_nimop" type="text" placeholder="Nim Operator" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_nimop', $rac->tim2_nimop) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                WA
              </label>
              <input name="tim2_contact_wa" type="text" placeholder="WA" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_contact_wa', $rac->tim2_contact_wa) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                LINE
              </label>
              <input name="tim2_contact_line" type="text" placeholder="LINE" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_contact_line', $rac->tim2_contact_line) }}">
            </div>
            <div>
              <label class="mb-3 block text-sm font-medium text-black">
                Email
              </label>
              <input name="tim2_email" type="text" placeholder="Email" class="w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary" value="{{ old('tim2_email', $rac->tim2_email) }}">
            </div>
          </div>
        </div>
      </div>        
      </div>  
  </div>
  <div>
    <button type="submit" class="mt-3 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
        Update RAC
    </button>
  </div>
</form>  
@endsection
