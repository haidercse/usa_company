<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','EtQ Consultance')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('frontend.layouts.partials.style')
  @stack('custom_style')
  
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.partials.header')
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {{-- @include('frontend.layouts.partials.hero') --}}
 <!-- End Hero -->

 <!-- start #main -->
 @yield('frontend_panel')
 <!-- End #main -->

  <!-- ======= Footer ======= -->
   @include('frontend.layouts.partials.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  @include('frontend.layouts.partials.script')
</body>

</html>