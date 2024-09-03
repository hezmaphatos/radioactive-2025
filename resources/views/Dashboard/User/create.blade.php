@extends('Dashboard.layouts.main')

@section('container')
            <div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
              <h2 class="text-title-md2 font-bold text-black">
                Create New User
              </h2>
              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">User</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-8">
              <form method="post" action="/dashboard/users">
                @csrf  
                <label for="name" class="block text-sm font-medium text-black">Name</label>
                <input id="name" name="name" type="text" placeholder="Name" class="mb-2 w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('name') border-red-500 @enderror" autofocus value="{{ old('name') }}"/>
                @error('name')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror           
                <label for="email" class="block text-sm font-medium text-black">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" class="mb-2  w-full rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('email') border-red-500 @enderror" value="{{ old('email') }}"/>
                @error('email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror           
                <label for="password" class="block text-sm font-medium text-black">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter password" class="mb-2 w-full rounded border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('password') border-red-500 @enderror"/>
                @error('password')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror  
                  <label for="role_id" class="block text-sm font-medium text-black">
                      Select Role
                  </label>
                  <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-white">
                      <select class="relative z-20 w-full appearance-none rounded border bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary @change="isOptionSelected = true" name="role_id" id="role_id">
                          @foreach($roles as $role)
                              <option value="{{ $role->id }}" class="text-body">{{ $role->roles }}</option>
                          @endforeach
                      </select>
                      <span class="absolute right-4 top-1/2 z-10 -translate-y-1/2">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g opacity="0.8">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#637381"></path>
                              </g>
                          </svg>
                      </span>
                  </div>    
                <div>
                    <button type="submit" class="mt-2 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
                        Create User
                    </button>
                </div>
            </form>    
            </div>
@endsection