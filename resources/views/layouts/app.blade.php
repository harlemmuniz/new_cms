<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>    
</head>

<body>
    <div class="content">
        @yield('content')
    </div>
    @yield('footer')
</body>

</html>