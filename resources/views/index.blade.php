<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Atlantis Service Indonesia</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/logo.jpeg') }}" rel="icon" />
    <link href="{{ asset('/assets/img/logo.jpeg') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('/assets/css/variables.css') }}" rel="stylesheet" />
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts/navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row justify-content-center gy-6">
                        <div class="col-lg-5 col-md-8">
                            <div
                                style="height: 400px; background: center no-repeat url('{{ asset('/assets/img/hero-carousel/hero-carousel-1.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-4">
                            <h2>
                                Adaptively serve the quality of inspection beyond expectation.
                            </h2>
                            <hr />
                            <h2>
                                Melayani kualitas inspeksi di Luar Harapan secara adaptif
                            </h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                            <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center gy-6">
                        <div class="col-lg-5 col-md-8">
                            <div
                                style="height: 400px; background: center no-repeat url('{{ asset('/assets/img/hero-carousel/hero-carousel-2.jpg') }}'); background-size: cover;">
                            </div>
                        </div>

                        <div class="col-lg-10 text-center mt-4">
                            <h2>
                                {{ __('general.hero-section-2') }}
                            </h2>
                            <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> -->
                            <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="container">
                    <div class="row justify-content-center gy-6">
                        <div class="col-lg-5 col-md-8">
                            <div
                                style="height: 400px; background: center no-repeat url('{{ asset('/assets/img/hero-carousel/hero-carousel-3.jpg') }}'); background-size: cover;">
                            </div>
                        </div>

                        <div class="col-lg-9 text-center mt-4">
                            <h2>
                                {{ __('general.hero-section-3') }}
                            </h2>
                            <!-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> -->
                            <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Carousel Item -->
        </div>

        <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services"
            style="
          background: linear-gradient(
            180deg,
            rgba(255, 255, 255, 1) 50%,
            rgba(233, 255, 235, 1) 100%
          );
        ">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('general.services-title') }}</h2>
                    <p>{{ __('general.services-sub') }}</p>
                </div>

                <div class="row gy-5 d-flex justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-1.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('general.services-card-1-title') }}</h3>
                                </a>

                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-1-desc-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-1-desc-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-1-desc-3') }}
                                        <ol class="list-group">
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                {{ __('general.services-card-1-sub-1') }}
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                {{ __('general.services-card-1-sub-2') }}
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                {{ __('general.services-card-1-sub-3') }}
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-2.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('general.services-card-2-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-2-desc-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-2-desc-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-2-desc-3') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-3.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-easel"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('general.services-card-3-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-3-desc-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-3-desc-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('general.services-card-3-desc-3') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-4.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('general.services-card-4-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-4-desc-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-4-desc-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-4-desc-3') }}
                                    </li>
                                </ol>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-5.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>
                                      {{ __('general.services-card-5-title') }}
                                    </h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-5-desc-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-5-desc-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                      {{ __('general.services-card-5-desc-3') }}
                                    </li>
                                </ol>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="about" class="faq">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content px-xl-5">
                            <h3>{{ __('general.about-us-title') }}</h3>
                            <p>{{ __('general.about-us-sub') }}</p>
                        </div>

                        <div class="ms-5 pe-5 mt-3">
                            <p class="text-wrap fs-5">
                              {{ __('general.about-us-desc') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url('{{ asset('/assets/img/faq.jpg') }}')">
                        &nbsp;
                    </div>
                </div>
            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">
                <div class="row g-5">
                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>{{ __('general.contact-us-title') }}</h3>
                        <p>
                          {{ __('general.contact-us-desc') }}
                        </p>
                        <a class="cta-btn align-self-start" href="#">{{ __('general.contact-us-btn') }}</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            {{-- <img src="{{ asset('/assets/img/cta/cta.jpg')}}" alt="" class="img-fluid" /> --}}
                            <div
                                style="width: 300px; height: 450px; background: center no-repeat url('{{ asset('/assets/img/cta/cta.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= wch Section ======= -->
        <section id="wch" class="about"
            style="
          background: linear-gradient(
            180deg,
            rgba(186, 215, 255, 1) 0%,
            rgba(253, 254, 255, 1) 50%
          );
        ">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>{{ __('general.wch-title') }}</h2>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <div class="about-img mt-0">
                            {{-- <img src="{{ asset('/assets/img/about.jpg')}}" class="img-fluid" alt="" /> --}}
                            <div
                                style="width: 400px; height: 560px; background: center no-repeat url('{{ asset('/assets/img/hero-carousel/hero-carousel-3.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">{{ __('general.wch-p-1-title') }}</h4>
                                </div>
                                <p>
                                  {{ __('general.wch-p-1-desc') }}
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">{{ __('general.wch-p-2-title') }}</h4>
                                </div>
                                <p>
                                  {{ __('general.wch-p-2-desc') }}
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">{{ __('general.wch-p-3-title') }}</h4>
                                </div>
                                <p>
                                  {{ __('general.wch-p-3-desc') }}
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">{{ __('general.wch-p-4-title') }}</h4>
                                </div>
                                <p>
                                  {{ __('general.wch-p-4-desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End wch Section -->

        <!-- ======= Featured Services Section ======= -->
        {{-- <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>
                                Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles icon"></i>
                            </div>
                            <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week icon"></i>
                            </div>
                            <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section> --}}
        <!-- End Featured Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>
                        We Help You to Survey Everything You Needed
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <h3>Get In Touch</h3>
                            <p>
                                We Help You to Survey Everything You Needed
                            </p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Jl. Iskandar Muda Raya No.7 | Kebayoran Lama Selatan, Kebayoran Lama | Kota Adm.
                                        Jakarta Selatan | DKI Jakarta - 12241</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>For Any Inquiries Call Now :</h4>
                                    <p>(+62) 2127099176</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-8 map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253864.59119186958!2d106.67881041640626!3d-6.179688099999983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42a6e88e73d%3A0x47a1b4ad4acf3bfd!2sAtlantis%20Services%20Indonesia!5e0!3m2!1sid!2sid!4v1683692298784!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts/footer')
    <!-- End Footer -->

    {{-- Scroll To Top --}}
    @include('layouts/scroll')

    {{-- preloader --}}
    @include('layouts/preloader')

    <!-- Vendor JS Files -->
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
