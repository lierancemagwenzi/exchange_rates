<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Exchange Rates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
    <!-- Framework Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lib/owl.carousel.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lib/slick.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lib/animations.min.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700,700i,800,900" rel="stylesheet">
    <!-- Style Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!-- Style Straight Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-straight.css')}}">
</head>
<body>
<div class="wrapper">
    <div class="first-section not-images">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text">
                        <h1>USD Trade Currency</h1>

                        @if(isset($last_updated)) <h6 id="last_update" style="color: white">Last refresh:{{$last_updated}}</h6>  @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="cloud">&nbsp;</div>
        <div class="cloud-two">&nbsp;</div>
        <div class="mini-cloud"></div>
        <div class="mini-cloud two"></div>
    </div>

@yield('content')
    <!--===================== Footer ========================-->
    @include('layouts.components.footer')
    <!--===================== End of Footer ========================-->
</div><!--wrapper-->
<script src="{{asset('assets/js/lib/jquery-3.2.1.js')}}"></script>
<script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/lib/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/lib/slick.min.js')}}"></script>
<script src="{{asset('assets/js/lib/css3-animate-it.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
