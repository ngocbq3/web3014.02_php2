<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - website</title>
</head>
<body>
    @include('client.header')

    @yield('content')

    @include('client.footer')
    
</body>
</html>