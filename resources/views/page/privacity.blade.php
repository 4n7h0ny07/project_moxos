@extends('page.layouts.master')

@section('page_title', 'Politicas de Privacidad | ' . setting('site.title'))

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



        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Politicas y Privacidad</h2>
                <div><span>Revise </span> <span class="description-title">Detalladamente nuestras politicas de
                        privacidad</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">

                @php
                    use Illuminate\Support\Str;
                    $privacyPolicyHtml = Str::markdown(setting('site.privacity'));
                @endphp
                {!! $privacyPolicyHtml !!}
            </div>

        </section><!-- /Starter Section Section -->

    </main>
