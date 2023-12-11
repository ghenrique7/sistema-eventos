<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrnStm - @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="flex flex-col">
    <nav>
        @include('components.navbar')
    </nav>

    <x-flash-messages />

    <header>
        @yield('header')
    </header>

    <div class="flex-grow flex items-center justify-center mb-10">
        @yield('content')
    </div>
    
    <div>
        <footer class="bg-gray-900 text-white p-4 bottom-0 relative">
            @include('components.footer')
        </footer>
    </div>
    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/datepicker.js"></script>


</html>
