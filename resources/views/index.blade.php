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
    <section id="hero" class="hero carousel carousel-fade vh-100" data-bs-ride="carousel">
        <div class="carousel-inner border" style="overflow: visible">
            @include('layouts/carousel-item', [
                'active' => true,
                'image' => 'hero-carousel-1.jpg',
                'indonesia' =>
                    'Memberikan layanan kebutuhan inspeksi dengan kualitas yang melampaui harapan secara adaptif',
                'english' => 'Adaptively providing inspection services with quality beyond expectation',
            ])
            <!-- End Carousel Item -->

            @include('layouts/carousel-item', [
                'image' => 'hero-carousel-2.jpg',
                'indonesia' =>
                    'Kami menjunjung tinggi integritas dan profesionalisme sebagai nilai inti dalam memberikan layanan terbaik, serta menempatkan team yang handal dan berpengalaman luas',
                'english' =>
                    'We put integrity & professionalism as our highest values in providing only the best services, by developing reliable & expert team',
            ])
            <!-- End Carousel Item -->

            @include('layouts/carousel-item', [
                'image' => 'hero-carousel-3.jpg',
                'indonesia' =>
                    'Dalam melakukan inspeksi, supervisi & verifikasi kami menjalankan azaz transapransi dalam segala aspek guna menjaga kualitas serta kepercayaan klien & publik',
                'english' =>
                    'We conduct inspection, supervision & verification with transparent principles, in order to maintain quality and the trustworthiness from customer as well as from public',
            ])
            <!-- End Carousel Item -->
        </div>

        <ol class="carousel-indicators"></ol>
    </section>
    <!-- End Hero Section -->
    </div>

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
                    <h2 class="text-capitalize">Our Services</h2>
                    <p>HIGH QUALITY SERVICES YOU NEED</p>
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
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3 class="text-capitalize">In The Factory</h3>
                                </a>

                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Factory Assessment and Audit
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Workshop and Warehouse Inspection
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Production Inspection
                                        <ol class="list-group">
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • Initial Check
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • During Production Inspection and
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • Final Random Inspection
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
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Inspection for Export of Products/Goods</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Inspection on Quantity and Quality of Products/Goods
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Supervision of Stuffing (in to the Container)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Supervision of Loading (in to the Vessel)
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
                                    <i class="bi bi-check2-circle"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>Inspection for Import of Products/Goods</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Supervision of Unloading (from the Ship)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Supervision of Unstuffing (from the Container)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Inspection on Quantity, Quality and Condition of Products/Goods
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
                                    <h3>{{ GoogleTranslate::trans("Collateralx's Management Agreement/ CMA Service", app()->getLocale()) }}
                                    </h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    {{-- <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengelolaan agunan bank atau pendana lain selain bank dibutuhkan guna memastikan detail dan kepastian pemasukan, persediaan, dan pengeluaran atas barang yang menjadi agunan tersebut
                                    </li> --}}
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Inspeksi tempat penyimpanan barang(gudang)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Managemen agunan/persediaan
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemantauan agunan/persediaan
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Verifikasi/estimasi persediaan
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
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>
                                        International Standards for Quality of Products/Goods
                                    </h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan kuantitas dan kualitas sesuai kesepakatan (ANZI, ASTM dan JIS)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengambilan sampel untuk analisa laboratorium
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
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-6.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>
                                        VPTI(Verifikasi Penelusuran Teknis Impor) Services
                                    </h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan dan pemastian terhadap kesesuaian dokumen administrasi
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Identifikasi spesifikasi/kriteria Barang melalui analisa kualitatif dan/atau
                                        kuantitatif
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemastian jumlah dan/atau volume
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemastian negara muat, negara asal Barang dan/atau negara tujuan
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

        <!-- ======= About Us Section ======= -->
        <section id="about" class="faq">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content px-xl-5">
                            <h3>About Us</h3>
                            <p>We Help You to Survey Everything You Needed</p>
                        </div>

                        <div class="ms-5 pe-5 mt-3">
                            <p class="text-wrap fs-5">
                                PT. ATLANTIS SERVICES INDONESIA (ATSI) merupakan perusahaan nasional yang berdiri pada
                                tahun 2007. Bergerak di bidang jasa inspeksi atau verifikasi berbagai jenis
                                produk/barang hasil industri dan juga perdagangan. ATSI mempunyai pengalaman dalam
                                kegiatan pemeriksaan produk industri manufaktur berupa bahan baku dan/atau bahan
                                penolong, produk setengah jadi (Intermediate Goods), produk akhir/barang jadi/barang
                                konsumsi (Consumers Goods) dan Pekerjaan Regulasi Pemerintah VPTI .
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
        <!-- End About Us Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">
                <div class="row g-5">
                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Interested? <em>Contact Us</em> Now</h3>
                        <p>
                            {{ GoogleTranslate::trans("We are always ready to listen to you! Do you have questions, suggestions, or need help? Don't hesitate to contact our team. We are very happy to help you.", app()->getLocale()) }}
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
                    <h2>Why Choose Us?</h2>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <div class="about-img mt-0">
                            {{-- <img src="{{ asset('/assets/img/about.jpg')}}" class="img-fluid" alt="" /> --}}
                            <div
                                style="width: 400px; height: 560px; background: center no-repeat url('{{ asset('/assets/img/wch.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">Impartiality</h4>
                                </div>
                                <p>
                                    Always serve and give the best for client, put every effort
                                    in improving competence, knowing priorities and doing good
                                    coordination. Be polite and responsive yet friendly 2 ways
                                    feedback. Still uphold the value of HIGH QUALITY and
                                    SATISFYING services.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">Credibility</h4>
                                </div>
                                <p>
                                    Always serve and give the best for client, put every effort
                                    in improving competence, knowing priorities and doing good
                                    coordination. Be polite and responsive yet friendly 2 ways
                                    feedback. Still uphold the value of HIGH QUALITY and
                                    SATISFYING services.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">Integrity</h4>
                                </div>
                                <p>
                                    Be honest and dedicated in discipline work. Be loyal and
                                    respect to the client and fully responsible to achieve
                                    similar vision. As a respected consultant, ATSI always be
                                    adaptive, always be sensitive for facing the time-changes,
                                    and be innovative in order to make the best improvements in
                                    all areas by showing the best possible result and more of
                                    that ATSI still continuing to learn and developing
                                    capabilities as well. Time result management is our next
                                    level of better service we guarantee.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)">Professionalism</h4>
                                </div>
                                <p>
                                    Be honest and dedicated in discipline work. Be loyal and
                                    respect to the client and fully responsible to achieve
                                    similar vision. As a respected consultant, ATSI always be
                                    adaptive, always be sensitive for facing the time-changes,
                                    and be innovative in order to make the best improvements in
                                    all areas by showing the best possible result and more of
                                    that ATSI still continuing to learn and developing
                                    capabilities as well. Time result management is our next
                                    level of better service we guarantee.
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
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
</body>

</html>
