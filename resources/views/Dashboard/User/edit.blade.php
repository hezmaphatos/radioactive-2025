@extends('dashboard.layouts.main')

@section('container')
            <div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Edit User
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
              <form method="post" action="/dashboard/users/{{ $user->id }}">
                @method('put')
                @csrf  
                <label for="name" class="block text-sm font-medium text-black dark:text-white">Name</label>
                <input id="name" name="name" type="text" placeholder="Name" class="mb-2 w-full lg:w-auto rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('name') border-red-500 @enderror" autofocus value="{{ old('name', $user->name) }}"/>
                @error('name')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror           
                <label for="email" class="block text-sm font-medium text-black dark:text-white">Email</label>
                <input id="email" name="email" type="email" placeholder="Email" class="mb-2  w-full lg:w-auto rounded-lg border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('email') border-red-500 @enderror" value="{{ old('email', $user->email) }}"/>
                @error('email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror           
                <label for="password" class="block text-sm font-medium text-black dark:text-white">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter password" class="mb-2 w-full lg:w-auto rounded border-[1.5px] bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary @error('password') border-red-500 @enderror"/>
                @error('password')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror          
                <div>
                    <button type="submit" class="mt-2 mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-3 xl:px-3">
                        Create User
                    </button>
                </div>
            </form>    
            </div>
@endsection