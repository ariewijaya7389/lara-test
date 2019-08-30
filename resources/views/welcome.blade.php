<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>

        @include('template.head')
        @stack('css')
    </head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded fixed-navbar"
    data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    @include('template.nav-menu')

    <div class="app-content container center-layout mt-2">
        TES
       @yield('content')
    </div>
    @include('template.foot')
@stack('js')
</body>

</html>
