<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('page_title', setting('site.title') ." | ". setting('site.description'))</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  {{-- <script src="{{ asset('ecommerce/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script> --}}
  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template/assets/css/main.css')}}" rel="stylesheet">

  <style>
    .colores {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .color {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
        width: 100%;
        height: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }

    .nombre-color {
        margin-top: 10px;
        font-size: 14px;
        color: #333;
    }
    #chatBox {
            width: 100%;
            max-width: 720px;
            margin: auto;
            padding: 20px;
        }
        #messages {
            height: 350px;
            border: 1px solid #ddd;
            overflow-y: scroll;
            margin-bottom: 20px;
        }
        #messages p {
            background-color: #f08553;
            padding: 10px;
            border-radius: 10px;
        }
</style>
</head>

<body class="index-page">   
 @yield('content') 

    

   
{{-- seccion del footer  --}}
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">{{ setting('site.title')}}</span>
          </a>
          <p>{{ setting('site.description')}}</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('privacity')}}">About us</a></li>
            <li><a href="{{ route('calcular.credito')}}">Services</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
            <li><a href="{{ route('privacity')}}">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="{{ route('terms')}}">Terms of service</a></li>
            <li><a href="{{ route('privacity')}}">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ setting('site.title')}}</strong> <span>Todos los derechos reservados</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Desarrollado por <a href="https://fassid.com/">fassid</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  @yield('css')
		
  @yield('scripts')
  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/aos/aos.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/purecounter/purecounter_vanilla.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js ')}}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js ')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>