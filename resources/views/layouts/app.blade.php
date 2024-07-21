<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('adminpanel.layout/header-script')
</head>
<body class="hold-transition login-page">
            @yield('content')
    @include('adminpanel.layout/footer-script')
    @if (session('status'))
<script>
    localStorage.removeItem('calander_data');
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "timeOut": "5000"
    }
    toastr.success("{!! Session::get('status') !!}");
</script>
@endif
</body>
</html>