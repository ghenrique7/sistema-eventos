<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrnStm @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="flex flex-col justify-between">
    <div>
        @include('components.navbar')
    </div>

    <div class="flex items-center justify-center">
        @yield('content')
    </div>
    <div class="mt-10">
        @include('components.footer')
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</html>
