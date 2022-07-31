<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Turis Loja</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../storage/Imagenes/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/front/animate.css') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/front/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/front/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/front/LineIcons.2.0.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('css/front/tailwind.css') }}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="hidden preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container relative">
                <div class="row">
                    <div class="w-full">
                        <nav class="flex items-center justify-between navbar navbar-expand-lg">
                            <a class="mr-4 navbar-brand" href="/">
                                <img src="../storage/Imagenes/logo.png" style="max-width: 40%" alt="Logo">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button"
                                data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow lg:w-auto collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none"
                                id="navbarOne">
                                <ul id="nav"
                                    class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="/">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Información</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Gráficas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Museos</a>
                                    </li>
                                    
                                    @if (Auth::user())
                                    <li class="nav-item">
                                        <a class="page-scroll">-----</a>
                                    </li>
                                        <!-- Profile -->
                                        <li class="nav-item">
                                            <a href="{{ route('profile.show') }}">Perfil</a>
                                        </li>
                                        <!-- Dashboard -->
                                        <li class="nav-item">
                                            <a href="/dashboard" >Dashboard</a>
                                        </li>
                                    @endif
                                    
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div
                                class="absolute right-0 hidden mt-2 mr-24 navbar-btn sm:inline-block lg:mt-0 lg:static lg:mr-0">
                                <a class="main-btn gradient-btn" data-scroll-nav="0" href="{{ route('login') }}"
                                    rel="nofollow">Iniciar Sesión</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero" style="background-image: url(../storage/front/banner-bg.svg)">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="pt-32 mb-12 text-center lg:pt-48 header-hero-content">
                            <h3 class="text-4xl font-light leading-tight text-white header-sub-title wow fadeInUp"
                                data-wow-duration="1.3s" data-wow-delay="0.2s">Turis Loja - Gestion de museos</h3>
                            <h2 class="mb-3 text-4xl font-bold text-white header-title wow fadeInUp"
                                data-wow-duration="1.3s" data-wow-delay="0.5s">Registros, encuestas, gráficas y más</h2>
                            <p class="mb-8 text-white text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                En nuestra plataforma podras gestionar usuarios, museos, y encuestas
                            </p>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">
                            <img src="../storage/front/header-hero.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Fácil y sencillo de usar, <span> Que esperas para usarlo!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="../storage/front/services-shape.svg" alt="shape">
                            <img class="shape-1" src="../storage/front/services-shape-1.svg" alt="shape">
                            <i class="lni lni-baloon"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">Gestiona Museos</h4>
                            <p class="mb-8">Crea museos y asigna a tu personal al mismo para poder empezar a obtener y guardar información del mismo.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="../storage/front/services-shape.svg" alt="shape">
                            <img class="shape-1" src="../storage/front/services-shape-2.svg" alt="shape">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">Gestiona Personal</h4>
                            <p class="mb-8">Podrás crear y eliminar usuarios, asignar un rol para poder acceder a las diferentes funciones, todo el control en una misma plataforma.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="../storage/front/services-shape.svg" alt="shape">
                            <img class="shape-1" src="../storage/front/services-shape-3.svg" alt="shape">
                            <i class="lni lni-bolt-alt"></i>
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">Visualización</h4>
                            <p class="mb-8">Explota al máximo tus datos mediante gráficas que te ayudaran a entender y comprender de mejor manera toda la información recopilada.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="relative pt-20 about-area">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="mt-4 mb-4 section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Gráfica de</span> cantidad de visitantes</h3>
                        </div> <!-- section title -->
                        <p class="mt-10">En este gráfico de barras se puede visualizar la cantidad de visitantes que tuvo cada lugar de información a lo largo de este tiempo, 
                            es importante mencionar que la información mostrada aquí ha sido recopilada desde Noviembre del 2021 hasta Julio del 2022.</p>
                    </div> <!-- about content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-1 text-center about-image wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="../storage/front/img.png" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="../storage/front/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="relative pt-20 about-area">
        <div class="about-shape-2">
            <img src="../storage/front/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2 lg:order-last">
                    <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="mt-4 mb-4 section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Gráfica de</span> días de visita</h3>
                        </div> <!-- section title -->
                        <p class="mt-10">En este gráfico de dona se puede visualizar la cantidad de días que los vistantes fueron a cada lugar de información a lo largo de este tiempo, 
                            es importante mencionar que la información mostrada aquí ha sido recopilada desde Noviembre del 2021 hasta Julio del 2022.</p>
                    </div> <!-- about content -->
                </div>
                <div class="w-full lg:w-1/2 lg:order-first">
                    <div class="mx-4 mt-1 text-center about-image wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="../storage/front/img1.png" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->

    <section class="relative pt-20 about-area">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="mt-4 mb-4 section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Gráfica de</span> medios de transporte</h3>
                        </div> <!-- section title -->
                        <p class="mt-10">En este gráfico de barra apilada se puede visualizar la cantidad de medios de transporte utilizados por los visitantes, esta información fue obtenida de cada lugar de información a lo largo de este tiempo, 
                            es importante mencionar que la información mostrada aquí ha sido recopilada desde Noviembre del 2021 hasta Julio del 2022.</p>
                    </div> <!-- about content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-1 text-center about-image wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="../storage/front/img2.png" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="../storage/front/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== ABOUT PART ENDS ======-->

   {{--  <!--====== VIDEO COUNTER PART START ======-->

    <section id="facts" class="pt-20 video-counter">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="relative pb-8 mt-12 video-content wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img class="absolute bottom-0 left-0 -ml-8 dots" src="../storage/front/dots.svg" alt="dots">
                        <div class="relative mr-6 rounded-lg shadow-md video-wrapper">
                            <div class="video-image">
                                <img src="../storage/front/video.png" alt="video">
                            </div>
                            <div
                                class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-blue-900 bg-opacity-25 rounded-lg video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i
                                        class="lni lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="pl-0 mt-12 counter-wrapper lg:pl-16 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="mb-8 section-title">
                                <div class="line"></div>
                                <h3 class="title">Cool facts <span> about this app</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">
                            <div class="flex items-center justify-center single-counter counter-color-1">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">125</span>K</span>
                                    <p class="text-white">Downloads</p>
                                </div>
                            </div> <!-- single counter -->
                            <div class="flex items-center justify-center single-counter counter-color-2">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">87</span>K</span>
                                    <p class="text-white">Active Users</p>
                                </div>
                            </div> <!-- single counter -->
                            <div class="flex items-center justify-center single-counter counter-color-3">
                                <div class="text-center counter-items">
                                    <span class="text-2xl font-bold text-white"><span class="counter">4.8</span></span>
                                    <p class="text-white">User Rating</p>
                                </div>
                            </div> <!-- single counter -->
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== VIDEO COUNTER PART ENDS ======--> --}}

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-8 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title"><span>Museos de la</span> Ciudad de Loja</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-team wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="relative team-image">
                            <img class="w-full" src="../storage/front/puertaciudad.jpg" alt="Team">
                            <div class="team-social">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-8">
                            <h5 class="mb-1 text-xl font-bold text-gray-900">Museo Puerta de la ciudad</h5>
                            <p>Loja - Ecuador</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-team wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="relative team-image">
                            <img class="w-full" src="../storage/front/musica.jpg" alt="Team">
                            <div class="team-social">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-8">
                            <h5 class="mb-1 text-xl font-bold text-gray-900">Museo de la Música</h5>
                            <p>Loja - Ecuador</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-team wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="relative team-image">
                            <img class="w-full" src="../storage/front/arqueologia.jpg" alt="Team">
                            <div class="team-social">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-8">
                            <h5 class="mb-1 text-xl font-bold text-gray-900">Museo de Arqueología y Lojanidad</h5>
                            <p>Loja - Ecuador</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    {{-- <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Users sharing<span> their experience</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="w-full lg:w-1/3">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor
                                invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.
                            </p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="../storage/front/textimonial-shape.svg" alt="shape">
                                <img class="author" src="../storage/front/author-1.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">Jenny Deo</h6>
                                <p>CEO, SpaceX</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor
                                invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.
                            </p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="../storage/front/textimonial-shape.svg" alt="shape">
                                <img class="author" src="../storage/front/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">Marjin Otte</h6>
                                <p>UX Specialist, Yoast</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor
                                invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.
                            </p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="../storage/front/textimonial-shape.svg" alt="shape">
                                <img class="author" src="../storage/front/author-3.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">David Smith</h6>
                                <p>CTO, Alphabet</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="flex items-center justify-between mb-6">
                            <div class="quota">
                                <i class="text-4xl duration-300 lni lni-quotation text-theme-color"></i>
                            </div>
                            <div class="star">
                                <ul class="flex">
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                    <li><i class="lni lni-star-filled text-theme-color-2"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-8">
                            <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor
                                invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu.
                            </p>
                        </div>
                        <div class="flex items-center testimonial-author">
                            <div class="relative author-image">
                                <img class="shape" src="../storage/front/textimonial-shape.svg" alt="shape">
                                <img class="author" src="../storage/front/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="mb-1 text-xl font-bold text-gray-900">Fajar Siddiq</h6>
                                <p>COO, MakerFlix</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======--> --}}

    {{-- <!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="pb-8 section-title">
                        <div class="line"></div>
                        <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="justify-center row">
                <div class="w-full md:w-2/3 lg:w-1/3">
                    <div class="mx-4 mt-10 single-blog wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="mb-5 overflow-hidden blog-image rounded-xl">
                            <img class="w-full" src="../storage/front/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="flex mb-5 meta">
                                <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                                <li class="ml-12">03 June, 2023</li>
                            </ul>
                            <p class="mb-6 text-2xl leading-snug text-gray-900">Lorem ipsuamet conset sadips cing elitr
                                seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="text-theme-color-2" href="javascript:void(0)">
                                Learn More
                                <i class="ml-2 lni lni-chevron-right"></i>
                            </a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="w-full md:w-2/3 lg:w-1/3">
                    <div class="mx-4 mt-10 single-blog wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="mb-5 overflow-hidden blog-image rounded-xl">
                            <img class="w-full" src="../storage/front/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="flex mb-5 meta">
                                <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                                <li class="ml-12">03 June, 2023</li>
                            </ul>
                            <p class="mb-6 text-2xl leading-snug text-gray-900">Lorem ipsuamet conset sadips cing elitr
                                seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="text-theme-color-2" href="javascript:void(0)">
                                Learn More
                                <i class="ml-2 lni lni-chevron-right"></i>
                            </a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="w-full md:w-2/3 lg:w-1/3">
                    <div class="mx-4 mt-10 single-blog wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="mb-5 overflow-hidden blog-image rounded-xl">
                            <img class="w-full" src="../storage/front/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="flex mb-5 meta">
                                <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                                <li class="ml-12">03 June, 2023</li>
                            </ul>
                            <p class="mb-6 text-2xl leading-snug text-gray-900">Lorem ipsuamet conset sadips cing elitr
                                seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="text-theme-color-2" href="javascript:void(0)">
                                Learn More
                                <i class="ml-2 lni lni-chevron-right"></i>
                            </a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======--> --}}

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="relative z-10 footer-area pt-120">
        <div class="footer-bg" style="background-image: url(../storage/front/footer-bg.svg);"></div>
        <div class="container">
            <div class="px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn"
                data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="w-full lg:w-1/2">
                        <div class="lg:mt-12 subscribe-content">
                            <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                                Déjanos tu correo 
                                <span class="block font-normal">y obten boletines mensuales</span>
                            </h2>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="mt-12 subscribe-form">
                            <form action="#" class="relative focus:outline-none">
                                <input type="email" placeholder="Ingresa tu correo"
                                    class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none">
                                <button class="main-btn gradient-btn">Suscribirse</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-120">
                <div class="row">
                    <div class="w-4/5 md:w-3/5 lg:w-2/6">
                        <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="inline-block mb-8 logo" href="index.html">
                                <img src="../storage/Imagenes/logo.png" style="max-width: 100%" alt="logo" class="w-40">
                            </a>
                            <p class="pb-10 pr-10 leading-snug text-white">Ten el control de tu museo con la mejor plataforma para gestionar usuarios, museos, encuestar y graficar.</p>
                            <ul class="flex footer-social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                        <div class="row">
                            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                                <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Enlaces</h4>
                                    </div>
                                    <ul class="link">
                                        <li><a href="#team">Museos</a></li>
                                        <li><a href="javascript:void(0)">Política de privacidad</a></li>
                                        <li><a href="javascript:void(0)">Términos y condiciones</a></li>
                                    </ul>
                                </div> <!-- footer wrapper -->
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                                <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Recursos</h4>
                                    </div>
                                    <ul class="link">
                                        <li><a href="/">Inicio</a></li>
                                        <li><a  href="#features">Información</a></li>
                                        <li><a href="#about">Gráficas</a></li>
                                    </ul>
                                </div> <!-- footer wrapper -->
                            </div>
                        </div>
                    </div>
                    <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                        <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="mb-8 text-2xl font-bold text-white">Contáctanos</h4>
                            </div>
                            <ul class="contact">
                                <li>+5939999999999</li>
                                <li>info@gmail.com</li>
                                <li>Proyecto UTPL</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
        </div> <!-- container -->
        <div id="particles-2" class="particles"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{ asset('js/front/vendor/jquery-3.5.1-min.js') }}"></script>
    <script src="{{ asset('js/front/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ asset('js/front/plugins.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('js/front/slick.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('js/front/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/front/scrolling-nav.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('js/front/wow.min.js') }}"></script>

    <!--====== Particles js ======-->
    <script src="{{ asset('js/front/particles.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/front/main.js') }}"></script>

</body>

</html>