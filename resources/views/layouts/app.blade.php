<!DOCTYPE html>

<head>
    @include('includes.meta')

    <title>@yield('title')</title>

    @stack('before-style')
    {{-- style --}}
    @include('includes.style')

    @stack('after-style')
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    @stack('before-style')
    {{-- script --}}
    @include('includes.script')

    @stack('after-style')
</body>

</html>
