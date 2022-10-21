<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('layouts.headcss')
        @livewireStyles
    </head>
    <body>
        @include('layouts.header')
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.footerjs')
        @livewireScripts
    </body>
</html>
