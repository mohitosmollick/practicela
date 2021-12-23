<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
</head>
<body>

@include('frontend.Components.header');

<!-- Page header with logo and tagline-->


<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            @yield('content')
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            @include('frontend.Components.right-sitebar');
        </div>
    </div>
</div>
<!-- Footer-->
@include('frontend.Components.footer');

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('frontend/js/scripts.js')}}"></script>
</body>
</html>
