<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <link rel="stylesheet" href="{{ url('email-templates/css/style.css') }}">
    </link>
    <link href="{{ url('email-templates/fonts/Jost-VariableFont_wght.ttf') }}">
    </link>
    <title>@yield('title')</title>

</head>

<body class="bg-light">
    @include('email-templates::layouts.navbar')
    @yield('content')
    @yield('scripts')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/9abc1ff96d.js" crossorigin="anonymous"></script>

</html>
