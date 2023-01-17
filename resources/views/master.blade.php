<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/jquery.selectBoxIt.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/front.css') }}">
    </head>
    <body>
        @yield('content')

        
        <script src="{{URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{URL::asset('/js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::asset('/js/jquery.selectBoxIt.min.js')}}"></script>
        <script src="{{URL::asset('/js/front.js')}}"></script>
    </body>
</html>