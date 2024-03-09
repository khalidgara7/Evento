<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('front.layouts.head')
</head>

<body class="customgradient relative z-20 w-full">
    @include('front.layouts.navbar')

    @yield('content')

    @include('front.layouts.footer')



</body>
@include('front.layouts.footer-script')

</html>
