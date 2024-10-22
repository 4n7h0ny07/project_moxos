@extends('page.layouts.master')

@section('page_title', 'Detalles | ' . setting('site.title'))

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
        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Detalles del Producto</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Inicio</a></li>
                        <li class="current"><a href="{{ route('motorcycle') }}">Motocicletas</a></li>
                        <li class="current">Detalles - {{ $producto->name_product }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section id="service-details" class="service-details section">

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="service-box">
                            <h4>Datos del Producto</h4>
                            <div class="services-list">
                                <a href="#"><i
                                        class="bi bi-arrow-right-circle"></i><span>{{ $producto->name_product }}</span></a>
                                <a href="#"><i
                                        class="bi bi-arrow-right-circle"></i><span>{{ $producto->code }}</span></a>
                                <a href="#"><i
                                        class="bi bi-arrow-right-circle"></i><span>{{ $producto->cc_product }}</span></a>
                                <a href="#"><i
                                        class="bi bi-arrow-right-circle"></i><span>{{ $producto->model_product }}</span></a>
                                <a href="#"><i
                                        class="bi bi-arrow-right-circle"></i><span>{{ $producto->code }}</span></a>
                            </div>
                        </div><!-- End Services List -->
                        {{-- 
          <div class="service-box">
            <h4>Download Catalog</h4>
            <div class="download-catalog">
              <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
              <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
            </div>
          </div><!-- End Services List --> --}}

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Tienes dudas contactanos?</h4>
                            {{-- href="https://wa.me/{{ $item->user->phone ? '591'.$item->user->phone : setting('social.whatsapp') ?? '59175199157' }}?text={{ url('details/'.$item->slug) }} Vi%20esto%20en%20tu%20sitio%20web" --}}
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span><a
                                        href="http://wa.me/591{{ setting('site-social.phone') ?? '65203074' }}?text={{ $producto->name_product }} Vi%20esto%20en%20tu%20sitio%20web"
                                        target="_blank" rel="noopener noreferrer"> +591 65203074</a></span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                    href="mailto:info@moxos.com.bo">Moxos Informaciones</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">

                        @foreach (json_decode($producto->images) as $img)
                            @php
                                $imgs = 'storage/' . str_replace('.', '.', $img);
                            @endphp
                            <img src="{{ url($imgs) }}" alt="no image" class="img-fluid services-img" width="720px">
                            {{-- <img src="{{ $producto->images }}" alt="NOT IMAGE" class="img-fluid services-img"> --}}
                        @endforeach
                        <h3>Detalles</h3>
                        <p>
                            {!! $producto->details_product !!}.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                    voluptatibus.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                        </ul>
                        <p>
                            Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi
                            optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                        </p>
                        <p>
                            Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                            mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex
                            repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam
                            vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt
                            molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui
                            maxime. Sunt eum quia impedit dolore alias explicabo ea.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /Service Details Section -->

    </main>
