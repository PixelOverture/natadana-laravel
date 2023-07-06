<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Styling --}}
  @include('includes.dashboard.style')
  @stack('style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        {{-- Navbar --}}
        @include('partials.dashboard.nav')


        {{-- Sidebar --}}
        @include('partials.dashboard.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>

      {{-- Footer --}}
      @include('partials.dashboard.footer')
    </div>
  </div>

  {{-- Scripts --}}
  @include('includes.dashboard.script')
  @stack('script')
</body>
</html>
