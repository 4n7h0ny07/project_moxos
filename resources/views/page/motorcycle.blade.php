@extends('page.layouts.master')

@section('page_title', 'Motos | ' . setting('site.title'))

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

<main class="main">
<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Motocicletas</h2>
        <div><span>Revisa </span> <span class="description-title">Nuestra flota de motocicletas a la venta</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @foreach ($producto as $item)
                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        @foreach(json_decode($item->images) as $img)
                            @php
                                $imgs = 'storage/'.str_replace('.', '.', $img);
                            @endphp
                        <img src="{{ url($imgs) }}" alt="no image" class="img-fluid">
                        @endforeach
                        <h4>{{ $item->name_product }}</h4>
                       <span>{{ $item->code }}</span>
                       <span><a href="{{route('detail', ['id' => $item->id])}}">mas detalles</a></span>
                        <div class="color" style="background-color: {{ $item->color }}">
                            
                        </div>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            @endforeach
        </div>
    </div>

</section><!-- /Team Section -->
</main>