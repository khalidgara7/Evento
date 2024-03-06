<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts.head')
</head>

<body class="customgradient relative z-20 w-full">
    @include('front.layouts.navbar')

    @yield('content')

    @include('front.layouts.footer')



</body>
@include('front.layouts.footer-script')

</html>
