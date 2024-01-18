<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container mx-auto p-4">
        {{ $slot }}
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
