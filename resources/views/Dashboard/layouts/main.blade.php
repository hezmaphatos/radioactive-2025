<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      UMN RADIOACTIVE 2024 | Dashboard Admin
    </title>
    @vite('resources/css/dashboard.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap/dist/maps/world.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  </head>
<body x-data="{ page: 'tables', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }">
@include('Dashboard.layouts.preloader')
    <div class="flex h-screen overflow-hidden">
        @include('Dashboard.layouts.sidebar')
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            @include('Dashboard.layouts.header')
              <div>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                  @yield('container')
                </div>
              </div>
        </div>
    </div>
</body>
</html>
