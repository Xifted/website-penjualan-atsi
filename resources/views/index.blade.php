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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    @include('layouts/navbar')

    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="hero carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"> --}}
    <section id="hero" class="hero carousel carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" style="overflow: visible">
            @include('layouts/carousel-item', ['active' => true, 'image' => '1.png'])
            <!-- End Carousel Item -->

            @include('layouts/carousel-item', ['image' => '2.png'])
            <!-- End Carousel Item -->

            @include('layouts/carousel-item', ['image' => '3.png'])
            <!-- End Carousel Item -->
            <ol class="carousel-indicators"></ol>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services"
            style="background: top / cover no-repeat url('{{ asset('/assets/img/our-service-bg.png') }}') fixed;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2 class="text-capitalize text-light">Layanan Kami</h2>
                    <div style="height: 0.2rem; width: 15rem;" class="bg-white mx-auto"></div>
                    <h2 class="text-capitalize text-light">Our Services</h2>
                </div>

                <div class="row gy-5 d-flex justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-1.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3 class="text-capitalize">{{ __('service.services-1-title') }}</h3>
                                </a>

                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-1-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-1-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-1-3') }}
                                        <ol class="list-group">
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • {{ __('service.services-1-3-1') }}
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • {{ __('service.services-1-3-2') }}
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • {{ __('service.services-1-3-3') }}
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-2.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('service.services-2-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-2-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-2-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-2-3') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-3.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-check2-circle"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('service.services-3-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-3-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-3-2') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-3-3') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
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
                                    <h3>{{ __('service.services-4-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-4-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-4-2') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-5.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('service.services-5-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-5-1') }}
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-5-2') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item changeLangBtn"
                            data-lang="{{ session()->get('locale') == 'en' ? 'id' : 'en' }}">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-6.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>{{ __('service.services-6-title') }}</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        {{ __('service.services-6-1') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->


        <!-- ======= About Us Section ======= -->
        <section id="about" class="faq position-relative m-0 p-0">
            <img src="{{ asset('/assets/img/about-us.png') }}" class="img-fluid">
            <div class="container bg-white rounded-2 rounded p-0 position-absolute bottom-0 start-50 translate-middle-x mb-5"
                data-aos="fade-up">
                <div class="position-relative text-center p-1 rounded-top" style="background-color: #DCD6D6">
                    <div
                        class="position-absolute top-50 ms-2 translate-middle-y d-flex flex-row gap-2 fs-5 fw-semibold">
                        <div style="height: 20px; width: 20px; border-radius: 100%; background-color: #EE6A5E;"></div>
                        <div style="height: 20px; width: 20px; border-radius: 100%; background-color: #F6BD4E;"></div>
                        <div style="height: 20px; width: 20px; border-radius: 100%; background-color: #62C455;"></div>
                    </div>
                    <h3 class="fs-3 fw-bold">{{ __('about.title') }}</h3>
                </div>
                <p class="text-wrap p-3">{{ __('about.paragraph') }}</p>
                <button
                    class="changeLangBtn px-4 btn btn-primary rounded-pill fs-4 fw-bold position-absolute start-0 ms-5"
                    style="top: -3em; border: transparent; background-color: #52A347;"
                    {{ session()->get('locale') == 'id' ? 'disabled' : '' }} data-lang="id">BAHASA</button>
                <button
                    class="changeLangBtn px-4 btn btn-primary rounded-pill fs-4 fw-bold position-absolute end-0 me-5"
                    style="top: -3em; border: transparent; background-color: #52749F;"
                    {{ session()->get('locale') == 'en' ? 'disabled' : '' }} data-lang="en">ENGLISH</button>
            </div>
            <button class="label-btn">
                About Us
            </button>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">
                <div class="row g-5">
                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Interested? <em>Contact Us</em> Now</h3>
                        <p>
                            {{ "We are always ready to listen to you! Do you have questions, suggestions, or need help? Don't hesitate to contact our team. We are very happy to help you." }}
                        </p>
                        <a class="cta-btn align-self-start" href="#">Contact Us</a>
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
        <section id="wch" class="about position-relative"
            style="background: center / cover no-repeat url('{{ asset('/assets/img/experience-bg.png') }}')">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <button class="btn text-btn changeLangBtn"
                        data-lang="en"{{ session()->get('locale') == 'en' ? 'disabled' : '' }}>
                        <img src="{{ asset('/assets/img/language-btn/en.png') }}" style="height: 7em">
                    </button>
                    <button class="btn text-btn changeLangBtn"
                        data-lang="id"{{ session()->get('locale') == 'id' ? 'disabled' : '' }}>
                        <img src="{{ asset('/assets/img/language-btn/id.png') }}" style="height: 7em">
                    </button>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5 order-{{ session()->get('locale') == 'en' ? '2' : '1' }}">
                        <div class="about-img mt-0">
                            {{-- <img src="{{ asset('/assets/img/about.jpg')}}" class="img-fluid" alt="" /> --}}
                            <div
                                style="width: 400px; height: 560px; background: center no-repeat url('{{ asset('/assets/img/wch.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-{{ session()->get('locale') == 'en' ? '1' : '2' }}">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">
                                        {{ __('experience.title-1') }}</h4>
                                </div>
                                <p class="{{ session()->get('locale') == 'en' ? 'text-end' : '' }}">
                                    {{ __('experience.paragraph-1') }}</p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">
                                        {{ __('experience.title-2') }}</h4>
                                </div>
                                <p class="{{ session()->get('locale') == 'en' ? 'text-end' : '' }}">
                                    {{ __('experience.paragraph-2') }}</p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">
                                        {{ __('experience.title-3') }}</h4>
                                </div>
                                <p class="{{ session()->get('locale') == 'en' ? 'text-end' : '' }}">
                                    {{ __('experience.paragraph-3') }}</p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">
                                        {{ __('experience.title-4') }}</h4>
                                </div>
                                <p class="{{ session()->get('locale') == 'en' ? 'text-end' : '' }}">
                                    {{ __('experience.paragraph-4') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="label-btn">Experience</button>
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
        <section id="contact" class="contact vh-100 d-flex flex-column justify-content-end position-relative"
            style="background: center / cover no-repeat url('{{ asset('/assets/img/contact-bg.png') }}')">
            <button class="label-btn">Contact Us</button>

            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-4">
                        <div class="info bg-white rounded">
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
                                    <p>customerservice@atsi.co.id</p>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87995324115198!2d106.78172993833786!3d-6.253288657897372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f18308bbf15b%3A0x7cdb3177b122531b!2sPT.%20ATLANTIS%20SERVICES%20INDONESIA!5e0!3m2!1sid!2sid!4v1695917303680!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen class="rounded"></iframe>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Thank You Page ======= -->
        <section class="min-vh-100 d-flex justify-content-center align-items-center position-relative"
            style="background: center / cover no-repeat url('{{ asset('/assets/img/thankyou-bg.png') }}')">
            <img src="{{ asset('/assets/img/thankyou-fg.png') }}" class="w-75">
            <div class="position-absolute top-50 left-0 translate-middle-y w-100 text-center p-3"
                style="background-color: rgba(100,100,100,0.5)">
                <span class="fw-bold text-light h1">Thank You For Choosing ATSI As Your Business Partner</span>
            </div>
        </section>
        <!-- End Thank You Page -->
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
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
        $(".changeLangBtn").click(function() {
            window.location.href = `${url}?lang=${$(this).data('lang')}`
        })
    </script>
</body>

</html>
