<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('front.layout.headcss')
        @livewireStyles
    </head>
    <body>
        @include('front.layout.header')
        @include('front.layout.nav')
        @yield('content')
        @include('front.layout.footer')
        @include('front.layout.footerjs')
        @livewireScripts
    </body>
</html>
