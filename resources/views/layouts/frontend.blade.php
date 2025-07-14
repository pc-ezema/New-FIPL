<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>{{config('app.name')}} - {{$title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="FIPL, FIPL Business, FIPL Careers, FIPL Contact Us, FIPL About Us, FIPL Sustainability" />
    <meta name="author" content="FIPL" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="{{url('assets/css/common-empty-page.min.css')}}" type="text/css">
    @stack('styles')

    <!--Favicons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/images/fipl-favicon.png')}}" />
</head>

<body class="basepage page basicpage" id="basepage-9c45fdbbba">
    <!-- Header -->
    @includeIf('layouts.header')
    <!-- Header Ends -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->

    <!-- Footer -->
    @includeIf('layouts.footer')
    <!-- Footer Ends -->

    @stack('scripts')
    <script src="{{url('assets/javascript/common-empty-page.min.js')}}"></script>
    @include('cookie-consent::index')
</body>

</html>