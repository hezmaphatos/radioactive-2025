<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radioactive</title>
</head>

<body class="min-h-screen bg-black overflow-scroll">
    <div class="flex flex-wrap justify-center items-center align-middle text-center p-8">
        <h1 class="text-4xl font-brodyrawk text-white w-full text-center mb-10">Order Details</h1>
        <div class="w-full flex justify-center items-center align-middle flex-wrap gap-8">
            <div class="bg-gray-900 border-2 border-[#d61525] font-ltmuseum-reg">
                <h1 class="text-2xl font-ltmuseum-bold">Order ID: {{$merchOrder->id}}</h1>
            </div>
        </div>
    </div>
</body>

</html>
