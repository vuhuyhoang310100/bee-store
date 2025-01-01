<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Bee
  </title>
  @include('shared/css')
  
</head>

<body>
  <div class="hero_area">
    <!-- header section -->
      @include('shared.header')
    <!-- slider section -->
    @include('shared.slider')
    <!-- end slider section -->
  </div>
  <!-- end hero area -->
  <!-- shop section -->
  @yield('content') 
  <!-- end shop section -->
  <!-- contact section -->
    @include('shared.contact')
  <br><br><br>
  <!-- end contact section -->
  <!-- info section -->
  <!-- end info section -->
  @include( 'shared.footer')
  @include('shared.js')

</body>
</html>