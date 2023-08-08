<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include()

    <title>@yield('title') | Website Sekolah</title>

    @stack('before-style')

    @include('')

    @stack('after-style')
</head>
<body>
    @include('')

    @yield('content')

    @include('')
</body>

    @stack('before-style')

    @include()

    @stack('after-style')

</html>
