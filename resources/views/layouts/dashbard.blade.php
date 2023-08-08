<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.dashboard.meta')

    <title>@yield('title') | Website Sekolah</title>

    @stack('before-style')

    @include('includes.dashboard.style')

    @stack('after-style')
</head>

<body>

    {{-- Preloader start --}}
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    {{-- Main wrapper start --}}
    <div id="main-wrapper">

        {{-- navbar --}}
        @include('includes.dashboard.navbar')

        @yield('content')

        @include()

    </div>

</body>

@stack('before-style')

@include('includes.dashboard.script')

@stack('after-style')

</html>
