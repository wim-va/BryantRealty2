<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaReal - @yield('title')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body style="margin: 50px;">


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }} - Success mssg
        </div>
    @endif


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} - Status mssg
        </div>
    @endif

    @auth
        Hello

    @endauth


    @include('partials.header')


    @yield('content')

    @include('partials.footer')
</body>

</html>
