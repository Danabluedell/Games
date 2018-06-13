<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
    <meta charset="UTF-8">
    <title>Dreamer</title>
</head>
<body>
    @yield('content')
    <div class="card-header"></div>
    <div class="sidebar"></div>
    <div class="content"></div>
    <div class="card-footer"></div>
</body>
</html>