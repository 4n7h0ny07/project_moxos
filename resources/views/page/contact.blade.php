@extends('page.layouts.master')

@section('page_title', 'Contacto | ' . setting('site.title'))

@section('content')

<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="/" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">@yield(setting('site.title'))</h1>
    </a>

    <nav id="navmenu" class="navmenu">     
      @php
          $menuItems = Voyager::model('Menu')->where('name', 'site')->first()->items;
      @endphp

      <ul>
          @if ($menuItems->count() > 0)
              @foreach ($menuItems as $item)
                  <li>
                      <a href="{{ $item->url }}">{{ $item->title }}</a>
                  </li>
              @endforeach
          @else
              <li>No hay elementos en el menú.</li>
          @endif
        
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav> 

     {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a>  --}}

  </div>
</header>
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="{{ Voyager::image( Voyager::setting('site.site_portada'))}}" alt="" data-aos="fade-in">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>{{ setting('site.title') }}</h2>
                <p>{{ setting('site.description') }}</p>
                <a href="#about" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contactanos</h2>
          <div><span>Ve</span> <span class="description-title">Nuestra ubicacion en el mapa</span></div>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
  
          <div class="row gy-4">
  
            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->
  
            </div>
  
            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->