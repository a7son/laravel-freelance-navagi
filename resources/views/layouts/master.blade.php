<!doctype html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ URL::asset('magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->    
    
    <link rel="stylesheet" href="{{ URL::asset('css/freelancer.min.css') }}">

</head>

<body id="page-top">
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
