<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('rpitssr')}}/assets/images/favicon.webp" type="image/webp">
    @include('layout_master.header')

</head>

<body>

@include('layout_master.nav_bar')

@yield('content')

@include('layout_master.footer')


<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->


@include('layout_master.scripts')

</body>

</html>

