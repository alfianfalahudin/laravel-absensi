<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.dashboard.meta')

    <title>@yield('title') | Website Sekolah</title>

    @stack('before-style')

    @include('includes.dashboard.style')

    @stack('after-style')
</head>

<body class="vh-100">

    @yield('content')

</body>

@stack('before-style')

@include('includes.dashboard.script')

@stack('after-style')

</html>
