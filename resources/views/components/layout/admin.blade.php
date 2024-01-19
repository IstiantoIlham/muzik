<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</head>
<body>
<div class="container mx-auto">
    {{$slot}}
</div>
</body>
</html>
