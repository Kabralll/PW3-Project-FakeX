<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

<body>

<x-navbar />

<div class="content">
    @yield('content')
</div>

<x-footer />

</body>
</html>