<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Natadana | @yield('title')</title>
    @include('includes.style')
</head>
<body>
    @if (!request()->is('login') && !request()->is('register'))
        @include('partials.navbar')
    @endif
    @yield('content')
    @if (!request()->is('login') && !request()->is('register'))
        @include('partials.footer')
    @endif
    @include('includes.script')
</body>
</html>
