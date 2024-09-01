<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body class="min-h-screen overflow-scroll bg-white text-black flex justify-center items-center align-middle">
    <div class="container w-full h-full flex justify-center items-center align-middle mx-auto px-2 gap-4">
        <a href="/merch/admin/dashboard"
            class="bg-black text-white rounded-lg p-4 flex flex-wrap justify-center align-middle items-center hover:cursor-pointer hover:bg-white hover:text-black hover:drop-shadow-xl transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">Merches</h1>
            </div>
        </a>
        <a href="/admin/orders/dashboard"
            class="bg-black text-white rounded-lg p-4 flex flex-wrap justify-center align-middle items-center hover:cursor-pointer hover:bg-white hover:text-black hover:drop-shadow-xl transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">Orders</h1>
            </div>
        </a>
        <a href="/admin/preorders/dashboard"
            class="bg-black text-white rounded-lg p-4 flex flex-wrap justify-center align-middle items-center hover:cursor-pointer hover:bg-white hover:text-black hover:drop-shadow-xl transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">Preorders</h1>
            </div>
        </a>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>

</html>
