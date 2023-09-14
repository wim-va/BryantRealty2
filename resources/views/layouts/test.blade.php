{{-- <source src="{{url('assets/images/video.mp4')}}" type="video/mp4" /> --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <title>@yield('title')</title>




    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">


</head>

<body style="margin: 50px;">

    @include('partials.preloader')
    @include('partials.header')

    @yield('content')

    @include('partials.extra')

</body>

</html>
