@extends('Dashboard.layouts.main')

@section('container')
<div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
  <h2 class="text-title-md2 font-bold text-black dark:text-white">Dashboard User</h2>
    <nav>
      <ol class="flex items-center gap-2">
        <li>
          <a class="font-medium" href="index.html">Dashboard /</a>
        </li>
        <li class="font-medium text-primary">User</li>
      </ol>
      </nav>
</div>
  <a href="/dashboard/users/create" class="mb-2 bg-primary inline-flex items-center justify-center rounded-md px-4 py-3 text-center font-medium text-white hover:bg-opacity-90 lg:px-6 xl:px-6">Create New User</a>
  @if(session()->has('success'))
    <div class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-6 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-3">
    <div class="mt-1 mr-3 flex h-5 w-full max-w-[22px] items-center justify-center rounded-lg bg-[#34D399]">
    <svg width="8" height="6" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z" fill="white" stroke="white"></path>
    </svg>
    </div>
    <div class="w-full">
      <h5 class="mt-1 text-sm font-bold text-black dark:text-[#34D399]">
        {{ session('success') }}
      </h5>
    </div>
    </div>
  @endif
<div class="flex flex-col gap-10">
  <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
    <div class="max-w-full overflow-x-auto">
      <table class="w-full table-auto">
        <thead>
          <tr class="bg-gray-2 text-left dark:bg-meta-4">
            <th class="px-4 py-4 font-medium text-black dark:text-white xl:pl-11 text-center">No.</th>
            <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Name</th>
            <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Email</th>
            <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Role</th>
            <th class="px-4 py-4 font-medium text-black dark:text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark xl:pl-11">
                <p class="text-black text-center dark:text-white">{{ $loop->iteration }}.</p>
              </td>
              <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                <p class="text-black dark:text-white">{{ $user->name }}</p>
              </td>
              <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                <p class="text-black dark:text-white">{{ $user->email }}</p>
              </td>
              <td>
                <p class="text-black dark:text-white">{{ $user->role->roles }}
              </td>
              <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                <div class="flex items-center space-x-3.5">
                  <button class="hover:text-primary">
                    <a href="/dashboard/users/{{ $user->id }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    </a>
                    </button>
                    <form action="/dashboard/users/{{ $user->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="hover:text-primary">
                          <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""/>
                          <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""/>
                          <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""/>
                          <path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""/>
                          </svg>
                        </button>
                      </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
      </div>
@endsection
