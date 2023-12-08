<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">
@include('theme.web.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('theme.web.header')
        @include('theme.web.aside')
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        {{ $slot }}
        @include('theme.web.footer')
    </div>
    @include('theme.web.js')
    @yield('script')
</body>

</html>
