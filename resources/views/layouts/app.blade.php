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
    @if (Session::has('admin'))
        @include('includes.navbar-admin')
    @elseif(Session::has('user_id'))
        @include('includes.navbar')
    @else
        @include('includes.navbar-login')
    @endif
    @yield('content')
    @include('includes.footer')

    @stack('before-style')
    {{-- script --}}
    @include('includes.script')

    @stack('after-style')
</body>

</html>
