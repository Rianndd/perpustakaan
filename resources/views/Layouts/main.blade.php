<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    @include('Layouts.css')
    @yield('style')
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('Layouts.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <!-- Navbar Header -->
          @include('Layouts.navbar')
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            @yield('content')
          </div>
        </div>
        @include('Layouts.footer')
      </div>
    </div>
    @yield('js')
    @include('Layouts.js')
  </body>
</html>
