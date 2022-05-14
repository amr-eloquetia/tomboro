<!DOCTYPE HTML>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">

<head>
    @include('Frontend.layouts.header')
</head>

<body class="preload">
    <!-- start menu-area -->
    @include('Frontend.layouts.navbar')
    <!-- end /.menu-area -->
    {{-- @include('Frontend.layouts.preloader') --}}
    @include('Frontend.layouts.scrollToTop')
    {{-- @include('Frontend.layouts.theme-switcher') --}}
    @include('Frontend.layouts.loginRegister')
    @include('Frontend.layouts.navbar')
    <!-- content-area -->
    @yield('content')

    <!-- ends: .content area -->

    @include('Frontend.layouts.footer')
    @include('Frontend.layouts.scripts')

</body>

</html>
