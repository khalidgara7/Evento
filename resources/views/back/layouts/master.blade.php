<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('back.layouts.head')
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    
    <!-- header bar -->
    @include('back.layouts.main-header')

    <!--  sidebar -->
    @include('back.layouts.main-sidebar')

    @yield('content')

</body>
@include('back.layouts.footer-script')

</html>
