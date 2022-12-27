S<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')
    <link href="{{asset('/eshoppers/eshopper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/eshoppers/eshopper/css/responsive.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
@include('component.header')
@yield('content')
@include('component.footer')
<script src="{{asset('/eshoppers/eshopper/js/jquery.js')}}"></script>
<script src="{{asset('/eshoppers/eshopper/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/eshoppers/eshopper/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('/eshoppers/eshopper/js/price-range.js')}}"></script>
<script src="{{asset('/eshoppers/eshopper/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('/eshoppers/eshopper/js/main.js')}}"></script>
@yield('js')
</body>
</html>
