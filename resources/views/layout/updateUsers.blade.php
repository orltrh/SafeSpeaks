<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SafeSpeak')</title>
    <!-- Favicons -->
    <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    {{-- Template Icon --}}
    {{-- <link rel="stylesheet" href="npm i bootstrap-icons"> --}}
    {{-- <script src="npm i bootstrap-icons" ></script> --}}

    {{-- Template Routing Machine Leaflet --}}
    <link rel="stylesheet" href="{{ url('assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.css') }}" />

    {{-- Template Leaflet Maps --}}
    <link rel="stylesheet" href="{{ url('https://unpkg.com/leaflet@1.9.3/dist/leaflet.css') }}"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    {{-- Template CSS Leaflet Maps --}}
    <style>
        #map { height: 600px; }
    </style>

    {{-- Template Boostrap --}}
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css') }}">

    {{-- Template Leaflet CSS JS --}}
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    {{-- Template Routing Machine Leaflet CSS JS --}}
    <script src="{{ url('assets/js/leaflet-routing-machine/dist/leaflet-routing-machine.js') }}"></script>

    {{-- Template Geocoder --}}
    <script src="{{ url('assets/js/leaflet-routing-machine/examples/Control.Geocoder.js') }}"></script>

    {{-- Template Jquery --}}
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js') }}"></script>

</head>
@section('body')
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index">SafeSpeak</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto @yield('menuIndex')" href="{{ route('dashboard') }}">Home</a></li>
          <li><a class="nav-link scrollto @yield('menuTrack')" href="{{ route('uptrackingposition') }}">Tracking Position</a></li>
          <li><a class="nav-link scrollto @yield('menuEdukasi')" href="{{ route('edukasi') }}">Edukasi</a></li>
          <li><a class="nav-link scrollto @yield('menuPanduan')" href="{{ route('panduan') }}">Panduan</a></li>
          <li><a class="nav-link scrollto @yield('menuForum')" href="{{ route('forum') }}">Forum</a></li>
          <div>
            @auth
            <div class="dropdown">
              <a class="nav-link scrollto @yield('menuProfile') dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
              </a>
              <ul class="menu" aria-labelledby="profileDropdown">
                <li>
                  <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                </li>
                <li>
                  <div>
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <a><button type="submit" role="button" class="dropdown-item" style="border:none">Log Out</button></a>
                    </form>
                  </div>

                </li>
              </ul>
            </div>
            @else
            <li><a class="getstarted scrollto text-decoration-none" href="{{ route('login') }}">Login</a></li>
            @endauth
          </div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{-- Content --}}
  @section('content')
  <div class="main">
    <div class="container p-5 text-center" >
        @show
    </div>
  </div>


    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
            &copy; Copyright <strong><span>SafeSpeak</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
            Designed by <a href="#">Kelompok 9 Pemograman Web</a>
            </div>
        </div>
        </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

</body>
</html>