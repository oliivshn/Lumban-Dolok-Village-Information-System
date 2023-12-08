<!DOCTYPE html>
<html lang="en">
@include('theme.auth.head')
<body>
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">   
    {{$slot}}
    </div>
    @include('theme.auth.js')
    @yield('custom_js')
</body>
</html>