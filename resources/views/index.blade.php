<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Atlantis Services Indonesia</title>
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

    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- ======= Alert ======= -->
    @include('layouts/contact-alert')

    <!-- ======= Header ======= -->
    @include('layouts/navbar')

    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="hero carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"> --}}
    <section id="hero" class="hero carousel slide" data-bs-ride="carousel">
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
        <!-- ======= about Section ======= -->
        <section id="about" class="features d-flex justify-content-center">
            <div class="container" style="margin-inline: 0; padding-inline: 0;" data-aos="fade-up">
                <ul class="nav nav-tabs row gy-2 d-flex justify-content-evenly">
                    <li class="nav-item col-lg-3 h-100">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4 class="text-center m-0">
                                {{ session()->get('locale') == 'en' ? 'About Us' : 'Tentang Kami' }}</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-lg-3" style="height: 73px">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4 class="text-center m-0">
                                {{ session()->get('locale') == 'en' ? 'Organization Structure' : 'Struktur Organisasi' }}
                            </h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-lg-3" style="height: 73px">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4 class="text-center m-0">
                                {{ session()->get('locale') == 'en' ? 'Our Values' : 'Nilai-Nilai Perusahaan' }}</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-lg-3 h-100">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4 class="text-center m-0">
                                {{ session()->get('locale') == 'en' ? 'Branch Office' : 'Kantor Cabang' }}</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        {{-- About Us Stylesheet --}}
                        <link href="{{ asset('/assets/css/cp/about.css') }}" rel="stylesheet">
                        <div id="about-container"
                            style="background: left / cover no-repeat url('{{ asset('/assets/img/about-us/about-us.png') }}') fixed">
                            {{-- <img src="{{ asset('/assets/img/about-us/about-us.png') }}" class="img-fluid"> --}}
                            <div id="about-content"
                                class="container bg-white w-75 rounded-2 rounded p-0 position-relative"
                                data-aos="fade-up">
                                <div id="about-head" class="position-relative text-center p-2 rounded-top"
                                    style="background-color: #DCD6D6">
                                    <div class="d-flex flex-row gap-2 fs-5 fw-semibold">
                                        <div class="about-three-button rounded-circle"
                                            style="background-color: #EE6A5E;">
                                        </div>
                                        <div class="about-three-button rounded-circle"
                                            style="background-color: #F6BD4E;">
                                        </div>
                                        <div class="about-three-button rounded-circle"
                                            style="background-color: #62C455;">
                                        </div>
                                    </div>
                                    <h3
                                        class="about-title m-0 p-0 fw-bold en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                        THE INSIGHT OF OUR SURVEY SERVICES</h3>
                                    <h3
                                        class="about-title m-0 p-0 fw-bold id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                        KEUNGGULAN JASA SURVEY KAMI</h3>
                                </div>
                                <p
                                    class="about-paragraph text-wrap p-3 en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                    PT. ATLANTIS
                                    SERVICES INDONESIA (ATSI) is a national company that
                                    was established in 2007. Accredited ISO 17020 and ISO 27001. Focus in field of
                                    inspection or
                                    verification services for various types of products/goods produced from industry and
                                    trade. ATSI has
                                    experience in inspection activities for manufacturing industrial products in the
                                    form of
                                    raw
                                    materials and/or auxiliary materials, Semi-Finished Products (Intermediate Goods),
                                    Final
                                    Products/Finished Goods/Consumer Goods and Import Verification Program (VPTI) Work
                                    of
                                    Goverment
                                    Regulation</p>
                                <p
                                    class="about-paragraph text-wrap p-3 id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                    PT. ATLANTIS
                                    SERVICES INDONESIA (ATSI) merupakan perusahaan nasional
                                    yang berdiri pada tahun 2007. Terakreditasi ISO 17020 dan ISO 27001. Berfokus dalam
                                    bidang jasa
                                    inspeksi atau verifikasi berbagai jenis produk/barang yang dihasilkan dari industri
                                    dan
                                    juga
                                    perdagangan. ATSI memiliki pengalaman dalam kegiatan pemeriksaan produk industri
                                    manufaktur berupa
                                    bahan baku dan/atau bahan pembantu, produk setengah jadi (Intermediate Goods),
                                    produk
                                    akhir/barang
                                    jadi/barang konsumsi (Consumers Goods) dan Pekerjaan Regulasi Pemerintah (VPTI)</p>
                                <div id="about-lang-btns"
                                    class="position-absolute d-flex flex-row justify-content-between">
                                    <button
                                        class="langToggleBtn changeLangBtn about-lang-btn px-4 btn btn-primary rounded-pill fw-bold {{ session()->get('locale') == 'id' ? 'disabled' : '' }}"
                                        style="background-color: #52A347;">INDONESIA</button>
                                    <button
                                        class="langToggleBtn changeLangBtn about-lang-btn px-4 btn btn-primary rounded-pill fw-bold {{ session()->get('locale') == 'en' ? 'disabled' : '' }}"
                                        style="background-color: #52749F;">ENGLISH</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="container">
                                <img class="img-fluid" src="assets/img/about-us/organization-structure.jpg"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            {{-- About Us Stylesheet --}}
                            <link href="{{ asset('/assets/css/cp/nilai-perusahaan.css') }}" rel="stylesheet">
                            <div class="container about position-relative pb-2"
                                style="background: top / cover no-repeat url('{{ asset('/assets/img/experience-bg.png') }}')">
                                <div class="container" data-aos="fade-up">
                                    <div class="section-header">
                                        <button
                                            class="wch-lang-btn btn text-btn changeLangBtn langToggleBtn {{ session()->get('locale') == 'en' ? 'disabled' : '' }}"
                                            style="border: transparent">
                                            <img src="{{ asset('/assets/img/language-btn/en.png') }}">
                                        </button>
                                        <button
                                            class="wch-lang-btn btn text-btn changeLangBtn langToggleBtn {{ session()->get('locale') == 'id' ? 'disabled' : '' }}"
                                            style="border: transparent">
                                            <img src="{{ asset('/assets/img/language-btn/id.png') }}">
                                        </button>
                                    </div>

                                    <div class="row g-4 g-md-5" data-aos="fade-up" data-aos-delay="200">
                                        <div id="wch-img"
                                            class="wch-columns text-center col-md-5 order-md-{{ session()->get('locale') == 'en' ? 'last' : 'first' }}">
                                            <img src="{{ asset('/assets/img/about-us/our-values.jpg') }}"
                                                class="img-fluid mx-auto" alt="" />
                                        </div>
                                        <div id="wch-paragraph"
                                            class="wch-columns col-md-7 mt-0 order-md-{{ session()->get('locale') == 'en' ? 'first' : 'last' }}">
                                            <!-- Tab Content -->
                                            <div class="tab-content row row-cols-2 row-cols-md-1">
                                                <div class="tab-pane fade show active" id="tab1">
                                                    <div
                                                        class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-md-end' : '' }} align-items-center mt-4">
                                                        <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                            Impartiality</h4>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                            Ketidakberpihakan</h4>
                                                    </div>
                                                    <p
                                                        class="en text-md-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                        We always put our clients first. We are committed to act fairly
                                                        and responsibly in
                                                        every interaction with our customer, partners and employees. Our
                                                        belief is that
                                                        impartiality is the key to building trust and maintaining good
                                                        relationships with
                                                        all parties involved. Our commitment to excellence is what sets
                                                        us apart from the
                                                        rest.
                                                    </p>
                                                    <p
                                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                        Selalu memperhatikan ketidakberpihakan dalam aspek bisnis. ATSI
                                                        berkomitmen untuk
                                                        selalu bertindak secara adil, bertanggung jawab atas
                                                        ketidakberpihakan secara
                                                        objektif dan transparan dalam setiap interaksi dengan pelanggan,
                                                        mitra dan karyawan.
                                                        ATSI percaya bahwa ketidakberpihakan adalah kunci untuk
                                                        membangun kepercayaan dan
                                                        menjaga hubungan yang baik dengan semua pihak yang terlibat.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade show active" id="tab1">
                                                    <div
                                                        class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-md-end' : '' }} align-items-center mt-4">
                                                        <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                            Credibility
                                                        </h4>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                            Kredibilitas
                                                        </h4>
                                                    </div>
                                                    <p
                                                        class="en text-md-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                        We always go above and beyond to serve our clients and provide
                                                        them with the best.
                                                        Strive to produce services with the highest standards and
                                                        implement SOP with detail
                                                        in every process, upholding the value of service quality is our
                                                        principle of
                                                        conduct.
                                                    </p>
                                                    <p
                                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                        Selalu melayani dan memberikan yang terbaik untuk klien,
                                                        berusaha semaksimal mungkin
                                                        dalam menghasilkan pelayanan dengan standar yang tinggi, dan
                                                        ATSI menerapkan SOP
                                                        dengan detail di setiap prosesnya dengan menjunjung tinggi nilai
                                                        kualitas pelayanan.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade show active" id="tab1">
                                                    <div
                                                        class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-md-end' : '' }} align-items-center mt-4">
                                                        <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                            Integrity</h4>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                            Integritas</h4>
                                                    </div>
                                                    <p
                                                        class="en text-md-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                        ATSI is a company that values integrity in every aspect of its
                                                        business. We believe
                                                        that integrity is the key of success in upholding the
                                                        customer's, partner's and
                                                        employees' trust. ATSI always strive to meet high ethical
                                                        standards in every action,
                                                        to aim to be a great company in the industry.
                                                    </p>
                                                    <p
                                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                        Selalu berkomitmen untuk bertindak dengan jujur dan transparan
                                                        dalam aspek bisnis.
                                                        ATSI percaya bahwa integritas adalah kunci untuk membangun
                                                        kepercayaan dengan
                                                        pelanggan, mitra dan karyawan. ATSI selalu berusaha untuk
                                                        memenuhi standar etika
                                                        yang tinggi dalam setiap tindakan yang kemi lakukan dan berusaha
                                                        untuk menjadi
                                                        perusahaan yang baik dalam industri.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade show active" id="tab1">
                                                    <div
                                                        class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-md-end' : '' }} align-items-center mt-4">
                                                        <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                            Professionalism</h4>
                                                        <h4 style="color: var(--color-primary)"
                                                            class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                            Profesionalisme</h4>
                                                    </div>
                                                    <p
                                                        class="en text-md-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                                        ATSI is a professional inspection company which is trustworthy,
                                                        dedicated and
                                                        disciplined. In ATSI we are committed to respect clients and
                                                        taking full
                                                        responsibility for achieving the common goals. ATSI is always
                                                        adaptive and
                                                        responsive to changes in the times innovationg to make
                                                        improvements in all areas by
                                                        demonstrating the best results. We continue to develop our
                                                        abilities to improve
                                                        superior services. Thank you for choosing ATSI as your business
                                                        partner.
                                                    </p>
                                                    <p
                                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                                        Jujur dan berdedikasi dalam dislipin kerja. Setia menghormati
                                                        klien dan bertanggung
                                                        jawab penuh untuk tercapainya tujuan bersama. Sebagai inspektor
                                                        yang profesional,
                                                        ATSI selalu adaptif, peka menghadapi perubahan zaman dan
                                                        berinovasi agar dapat
                                                        melakukan perbaikan pada semua area dengan menunjukan hasil
                                                        terbaik. ATSI terus
                                                        mengembangkan kemampuan untuk meningkatkan layanan yang lebih
                                                        unggul.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End wch Section -->

                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane mt-5" id="tab-4">
                        {{-- Branch Stylesheet --}}
                        <link href="{{ asset('/assets/css/cp/branch.css') }}" rel="stylesheet">
                        <div class="row gy-4 border border-5 border-green rounded"
                            style="border-color: var(--color-green);">
                            <div class="mt-0 bg-white d-flex justify-content-between" style="height: 20%;">
                                <div class="w-25 d-flex">
                                    <img class="img-fluid" style="width: 45%"
                                        src="{{ asset('/assets/img/logo.png') }}" alt="logo" />
                                    <img class="img-fluid" style="width: 45%"
                                        src="{{ asset('/assets/img/logo2.png') }}" alt="logo" />
                                </div>
                                <div class="w-50 d-flex justify-content-center align-items-center">
                                    <div class="bg-primary w-100" style="height: 5px";></div>
                                    <div class="bg-green position-absolute rounded-5"
                                        style="height: 30px; width: 30px; right: 0;";></div>
                                    <div class="bg-green position-absolute rounded-5"
                                        style="height: 30px; width: 30px; right: 3em;";></div>
                                    <div class="bg-green position-absolute rounded-5"
                                        style="height: 30px; width: 30px; right: 6em;";></div>
                                </div>
                            </div>
                            <div id="branch-paragraph"
                                class="container-fluid row row-cols-2 g-3 gy-md-5 bg-primary px-4 py-5"
                                style="height: 80%;">
                                {{-- <div class="row gy-2 d-flex flex-column w-50 justify-content-between"> --}}
                                <h2 class="color-white">ATLANTIS SERVICES INDONESIA<br>(HONG KONG) LIMITED</h2>
                                <h2 class="color-white">ATLANTIS SERVICES INDONESIA<br>(XIAMEN) LIMITED</h2>
                                <div>
                                    <p class="color-white">
                                        <strong>{{ session()->get('locale') == 'en' ? 'Address:' : 'Alamat:' }}
                                        </strong>UNIT 2302, 23/F, NEW WORLD TOWER 1, 18 QUEEN'S ROAD CENTRAL,
                                        CENTRAL, HONG KONG.
                                    </p>
                                    <p class="color-white">
                                        <strong>{{ session()->get('locale') == 'en' ? 'Phone:' : 'Telepon:' }}
                                        </strong>(+852) 60725630
                                    </p>
                                    <p class="color-white"><strong>Fax: </strong>(+852) 26683288</p>
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="row gy-2 d-flex flex-column w-50 justify-content-between"> --}}
                                <div>
                                    <p class="color-white">
                                        <strong>{{ session()->get('locale') == 'en' ? 'Address:' : 'Alamat:' }}
                                        </strong>FREE TRADE TIMES SQUARE, Unit 211-2, No.35 Xiangxing 4 Road, (Free
                                        Trade Zone), XIAMEN AREA OF CHINA (FUJIAN) PILOT FREE TRADE ZONE, XIAMEN,
                                        CHINA.
                                    </p>
                                    <p class="color-white">
                                        <strong>{{ session()->get('locale') == 'en' ? 'Phone:' : 'Telepon:' }}
                                        </strong>(+86 592) 5662136
                                    </p>
                                    <p class="color-white"><strong>Fax: </strong>(+86 592) 5662138</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <img src="assets/img/about-us/hk-1.jpg" alt="office" class="img fluid"
                                        style="width: 44%">
                                    <div class="d-flex flex-column justify-content-between" style="width: 55%">
                                        <img src="assets/img/about-us/hk-2.jpg" alt="office" class="img fluid"
                                            style="height: 49%">
                                        <img src="assets/img/about-us/hk-3.jpg" alt="office" class="img fluid"
                                            style="height: 49%">
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse justify-content-between">
                                    <img src="assets/img/about-us/xm-3.jpg" alt="office" class="img fluid"
                                        style="width: 44%">
                                    <div class="d-flex flex-column justify-content-between" style="width: 55%">
                                        <img src="assets/img/about-us/xm-1.jpg" alt="office" class="img fluid"
                                            style="height: 49%">
                                        <img src="assets/img/about-us/xm-2.jpg" alt="office" class="img fluid"
                                            style="height: 49%">
                                    </div>
                                </div>
                                {{-- </div> --}}

                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                </div>

            </div>
        </section><!-- End About us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services"
            style="background: top / cover no-repeat url('{{ asset('/assets/img/services/service-bg.jpg') }}') fixed;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2 class="text-capitalize text-light">Layanan Kami</h2>
                    <div style="height: 0.2rem; width: 15rem;" class="bg-white mx-auto"></div>
                    <h2 class="text-capitalize text-light">Our Services</h2>
                </div>

                <div class="row gy-5 d-flex justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-1.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3 class="text-capitalize">Inspection Goods at Factory</h3>
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
                                                - Initial Check
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                - During Production Inspection and
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                - Final Random Inspection
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3 class="text-capitalize">Pemeriksaan Barang di Pabrik</h3>
                                </a>

                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Penilaian dan Audit Pabrik
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan Bengkel dan Gudang
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Inspeksi Produksi
                                        <ol class="list-group">
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                - Pemeriksaan Awal
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                - Selama Inspeksi Produksi dan
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                - Inspeksi Acak Akhir
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-2.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Export Product Inspection</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Product/Goods Quantity and Quality Check
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Supervision of Stuffing (Container)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Loading Supervision (Ship)
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Pemeriksaan Ekspor Produk/Barang</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan Kuantitas dan Kualitas Produk/Barang
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengawasan Pengisian (masuk ke kontainer)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengawasan Pemuatan (masuk ke Kapal)
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-3.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-check2-circle"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Import Product Inspection Services</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Unloading Supervision (Ship)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Unstuffing (Containers)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Inspection of Quantity, Quality and Condition of Products/Goods
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-check2-circle"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Pemeriksaan Impor Produk/Barang</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengawasan Bongkar Muat (dari Kapal)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengawasan Unstuffing (dari Kontainer)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan Kuantitas, Kualitas dan Kondisi Produk/Barang
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-4.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Cargo Insurance Services</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Product Loss and Damage Survey
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Claim Adjustment
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Inspeksi Cargo Insurance</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Survei Kerugian dan Kerusakan Produk
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Penyesuaian Klaim
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-5.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>International Standard Product Quality Asurance Service</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Quantity and Quality Inspection According To Agreement (ANZI, ASTM and JIS)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Take Samples For Laboratory Analysis
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Standar Internasional Mutu Produk/Barang</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pemeriksaan Kuantitas dan Kualitas Sesuai Kesepakatan (ANZI, ASTM dan JIS)
                                    </li>
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Pengambilan Sampel Untuk Analisa Laboratorium
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item changeLangBtn">
                            <div class="img">
                                <div
                                    style="height: 290px; background: center no-repeat url('{{ asset('/assets/img/services/service-6.jpg') }}'); background-size: cover;">
                                </div>
                            </div>
                            <div class="details en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Import Technical Tracebility Verification Services (VPTI)</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        To Ensure Compliance Between Imported Goods and Documents Accordingly To The
                                        Aplicable Regulations From The Ministry of Trade of The Republic of Indonesia
                                    </li>
                                </ol>
                            </div>

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-calendar4-week"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>VPTI (Verifikasi Penelusuran Teknis Impor) Services</h3>
                                </a>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 text-start mb-0 py-0" style="font-size: 14px">
                                        Memastikan Kesesuaian Antara Dokumen dan Barang Yang Diimpor Dengan Mengikuti
                                        Regulasi Dari Kementrian Perdagangan Republik Indonesia Yang Berlaku. Barang
                                        dan/atau Negara Tujuan.
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

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact vh-100 d-flex flex-column justify-content-end position-relative"
            style="background: center / cover no-repeat url('{{ asset('/assets/img/contact-bg.png') }}')">
            <button class="label-btn" style="top: 5em !important">Contact Us</button>

            <div class="container">
                <div class="row gy-6 gx-lg-5 d-flex justify-content-between">
                    <div class="col-lg-5">
                        <div class="info bg-white rounded">
                            <h3>{{ session()->get('locale') == 'en' ? 'Get In Touch' : 'Hubungi Kami' }}</h3>
                            <p>
                                {{ session()->get('locale') == 'en' ? 'We Help You to Survey Everything You Needed' : 'Kami Membantu Anda Mensurvei Semua yang Anda Butuhkan' }}
                            </p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>{{ session()->get('locale') == 'en' ? 'Address:' : 'Alamat:' }}</h4>
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
                                    <h4>{{ session()->get('locale') == 'en' ? 'For Any Requests, Contact:' : 'Untuk Setiap Permintaan Hubungi:' }}
                                    </h4>
                                    <p>Phone: (+62) 2127099176</p>
                                    <p>Mobile: <a href="tel:+6288708874455">(+62) 88708874455</a></p>
                                    <p>WhatsApp me: <a href="http://wa.me/6288708874455" target="_blank"
                                            rel="noopener noreferrer">http://wa.me/6288708874455</a></p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                            <div class="info-item d-flex justify-content-center">
                                <button onclick="document.getElementById('modal').style.display='flex'"
                                    class="order-btn position-relative"><i
                                        class="bi bi-file-earmark-arrow-up color-white"></i>Order Now</button>
                            </div>
                            <!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-7 map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87995324115198!2d106.78172993833786!3d-6.253288657897372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f18308bbf15b%3A0x7cdb3177b122531b!2sPT.%20ATLANTIS%20SERVICES%20INDONESIA!5e0!3m2!1sid!2sid!4v1695917303680!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen class="rounded"></iframe>
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
        <div id="modal" class="justify-content-center"
            style="display: none; position: fixed; height: 100vw; width:100vw !important; top:0; left:0; background-color: #00000077; z-index: 1000000;">
            <div class="d-flex flex-column w-75 bg-white mt-3"
                style="border-radius: 10px 10px 10px 10px; overflow:hidden; height:fit-content;">
                <header
                    class="d-flex flex-row-reverse justify-content-between bg-primary align-items-center overflow-hidden">
                    <span onclick="document.getElementById('modal').style.display='none'"
                        class="d-flex justify-content-center align-items-center fs-3 bg-green text-white"
                        style="width: 85px; height: 75px; cursor: pointer;">&times;</span>
                    <h5 class="text-white p-3 pt-4">Order Form</h5>
                </header>
                <form action="{{ route('actionOrders') }}" enctype="multipart/form-data" method="POST">
                    <div class="d-flex justify-content-between align-items-end">
                        <h6 class="p-3 pt-4" style="width: 80%">
                            {{ session()->get('locale') == 'en' ? 'If you would like us to contact you, please leave information by filling in the form below' : 'Jika anda ingin kami hubungi, silahkan tinggalkan informasi dengan mengisi form dibawah ini' }}
                        </h6>
                        <div class="d-flex align-items-center justify-content-center pr-3" style="width: 17%">
                            <img class="img-fluid" style="width: 70px" src="{{ asset('/assets/img/logo.png') }}"
                                alt="logo" />
                            <img class="img-fluid" style="width: 100px" src="{{ asset('/assets/img/logo2.png') }}"
                                alt="logo" />
                        </div>
                    </div>
                    @csrf
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="text" name="companyName" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Company Name' : 'Nama Perusahaan' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="text" name="picName" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'PIC Name' : 'Nama PIC' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="text" name="serviceType" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Type of Services' : 'Jenis Jasa yang Dibutuhkan' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="text" name="companyPhone" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Company Phone Number' : 'No. Telp Perusahaan' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="text" name="phoneNumber" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Phone Number/WhatsApp' : 'No. Handphone/WhatsApp' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group">
                            <input type="email" name="emailCompany" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Email' : 'Alamat Email' }}"
                                value="" required>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex w-100 p-3 pe-5">
                        <div class="input-group">
                            <textarea name="companyAddress" class="form-control"
                                placeholder="{{ session()->get('locale') == 'en' ? 'Company Address' : 'Alamat Lengkap Perusahaan' }}"></textarea>
                        </div>
                    </div>
                    {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                            <div class="input-group">
                                <select name="categoryName" onchange="fetchProvinces()" class="form-select" required>
                                    <option value="" disabled>{{ session()->get('locale') == 'en' ? 'Country' : 'Negara' }}</option>
                                </select>
                            </div>
                        </div> --}}
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-100 p-3 pe-5">
                        <div class="input-group d-flex justify-content-center">
                            <button type="submit" class="order-btn"><i
                                    class="bi bi-file-earmark-arrow-up color-white"></i>Order Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- ======= Thank You Page ======= -->
        <section class="min-vh-100 d-flex flex-column justify-content-center align-items-center position-relative"
            style="background: center / cover no-repeat url('{{ asset('/assets/img/thankyou-bg.png') }}')">
            <img src="{{ asset('/assets/img/thankyou-fg.png') }}" class="w-75">
            <div class="top-50 left-0 translate-middle-y w-75 text-center p-3"
                style="background-color: rgb(100, 100, 100)">
                <span
                    class="fw-bold text-light h1">{{ session()->get('locale') == 'en' ? 'Thank You For Choosing ATSI As Your Business Partner' : 'Terima Kasih Telah Memilih ATSI Sebagai Mitra Bisnis Anda' }}</span>
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
        let url = "{{ route('changeLang') }}";
        let lastLang = "{{ session()->get('locale') }}"

        $(".changeLang").change(function() {
            window.location.href = `${url}?lang=${$(this).val()}&prev=${window.location.hash.replace('#', '')}`;
        });
        $(".changeLangBtn").click(function() {
            if (lastLang == 'en') {
                lastLang = 'id';
            } else {
                lastLang = 'en';
            }
            fetch(`${url}?lang=${lastLang}&prev=${window.location.hash.replace('#', '')}`);
            $('.en').toggleClass(['active', 'hidden']);
            $('.id').toggleClass(['active', 'hidden']);
            $('.wch-columns').toggleClass(['order-md-first', 'order-md-last']);
            $('.wch-columns .d-flex').toggleClass('justify-content-end')
            // $('.wch-columns p').toggleClass('text-end')
            $('.langToggleBtn').toggleClass('disabled');
        });
    </script>
</body>

</html>
