<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <title>Radioactive UMN</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-white flex flex-wrap justify-center align-middle items-center">
    <div class="w-full flex flex-wrap justify-center">
        <div class="w-full flex justify-center p-4">
            <a href="/merch/admin" class="text-white bg-black px-2 py-1 rounded">Back</a>
        </div>
        <div class="">
            <div class="">
                <a href="/merch/admin/new">
                    <button
                        class="bg-green-500 hover:bg-green-400 text-white font-bold py-1 px-2 border-b-4 border-green-700 hover:border-green-500 rounded">
                        New Merch</button>
                </a>
                @if (session()->has('success'))
                    <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                @endif
            </div>

            <div class="container w-full mx-auto px-2">
                <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="posts_table" class="stripe hover"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="0">Merch ID</th>
                                <th data-priority="1">Name</th>
                                <th data-priority="2">Description</th>
                                <th data-priority="3">Price</th>
                                <th data-priority="4">Stock</th>
                                <th data-priority="5">Image</th>
                                <th data-priority="6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merches as $merch)
                                <tr>
                                    <td>{{ $merch->id }}</td>
                                    <td>{{ $merch->name }}</td>
                                    <td>
                                        <div class="max-h-48 overflow-scroll">{{ $merch->description }}</div>
                                    </td>
                                    <td>{{ $merch->price }}</td>
                                    <td>{{ $merch->total_stock() }}</td>
                                    <td><img src="{{ asset('storage/' . $merch->image) }}" alt=""
                                            class="my-1 object-contain h-32"></td>
                                    <td>
                                        <div class=" flex flex-wrap">
                                            <a href="/merch/admin/{{ $merch->id }}/edit">
                                                <button
                                                    class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                                                    Edit</button>
                                            </a>
                                            <form action="/merch/admin/{{ $merch->id }}/delete" method="post"
                                                class="inline">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    onclick="return confirm('Are you sure you want to delete merch?')"
                                                    type="submit"
                                                    class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                                    Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#posts_table').DataTable({
                    responsive: true,
                    autoWidth: false,
                    columnDefs: [{
                            width: '50px',
                            targets: 0
                        },
                        {
                            width: '200px',
                            targets: 1
                        },
                        {
                            width: '200px',
                            targets: 2
                        },
                        {
                            width: '200px',
                            targets: 3
                        },
                        {
                            width: '100px',
                            targets: 4
                        },
                        {
                            width: '100px',
                            targets: 5
                        }
                    ]
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>

</html>
