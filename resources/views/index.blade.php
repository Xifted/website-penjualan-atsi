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
                                    <h3 class="text-capitalize">At Factory Services</h3>
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

                            <div class="details id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                <div class="icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3 class="text-capitalize">Di Pabrik</h3>
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
                                                • Pemeriksaan Awal
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • Selama Inspeksi Produksi dan
                                            </li>
                                            <li class="list-group-item border-0 text-start mb-0 py-0"
                                                style="font-size: 14px">
                                                • Inspeksi Acak Akhir
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
                    <h3 class="fs-3 fw-bold en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">THE
                        INSIGHT OF OUR SURVEY SERVICES</h3>
                    <h3 class="fs-3 fw-bold id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                        KEUNGGULAN JASA SURVEY KAMI</h3>
                </div>
                <p class="text-wrap p-3 en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">PT. ATLANTIS
                    SERVICES INDONESIA (ATSI) is a national company that
                    was established in 2007. Accredited ISO 17020 and ISO 27001. Focus in field of inspection or
                    verification services for various types of products/goods produced from industry and trade. ATSI has
                    experience in inspection activities for manufacturing industrial products in the form of raw
                    materials and/or auxiliary materials, Semi-Finished Products (Intermediate Goods), Final
                    Products/Finished Goods/Consumer Goods and Import Verification Program (VPTI) Work of Goverment
                    Regulation</p>
                <p class="text-wrap p-3 id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">PT. ATLANTIS
                    SERVICES INDONESIA (ATSI) merupakan perusahaan nasional
                    yang berdiri pada tahun 2007. Terakreditasi ISO 17020 dan ISO 27001. Berfokus dalam bidang jasa
                    inspeksi atau verifikasi berbagai jenis produk/barang yang dihasilkan dari industri dan juga
                    perdagangan. ATSI memiliki pengalaman dalam kegiatan pemeriksaan produk industri manufaktur berupa
                    bahan baku dan/atau bahan pembantu, produk setengah jadi (Intermediate Goods), produk akhir/barang
                    jadi/barang konsumsi (Consumers Goods) dan Pekerjaan Regulasi Pemerintah (VPTI)</p>
                <button
                    class="langToggleBtn changeLangBtn px-4 btn btn-primary rounded-pill fs-4 fw-bold position-absolute start-0 ms-5 {{ session()->get('locale') == 'id' ? 'disabled' : '' }}"
                    style="top: -3em; border: transparent; background-color: #52A347;">BAHASA</button>
                <button
                    class="langToggleBtn changeLangBtn px-4 btn btn-primary rounded-pill fs-4 fw-bold position-absolute end-0 me-5 {{ session()->get('locale') == 'en' ? 'disabled' : '' }}"
                    style="top: -3em; border: transparent; background-color: #52749F;">ENGLISH</button>
            </div>
            <button class="label-btn">
                About Us
            </button>
        </section>
        <!-- End About Us Section -->

        <br>
        <br>
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
                    <button
                        class="btn text-btn changeLangBtn langToggleBtn {{ session()->get('locale') == 'en' ? 'disabled' : '' }}"
                        style="border: transparent">
                        <img src="{{ asset('/assets/img/language-btn/en.png') }}" style="height: 7em">
                    </button>
                    <button
                        class="btn text-btn changeLangBtn langToggleBtn {{ session()->get('locale') == 'id' ? 'disabled' : '' }}"
                        style="border: transparent">
                        <img src="{{ asset('/assets/img/language-btn/id.png') }}" style="height: 7em">
                    </button>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="wch-columns col-lg-5 order-{{ session()->get('locale') == 'en' ? '2' : '1' }}">
                        <div class="about-img mt-0">
                            {{-- <img src="{{ asset('/assets/img/about.jpg')}}" class="img-fluid" alt="" /> --}}
                            <div
                                style="width: 400px; height: 560px; background: center no-repeat url('{{ asset('/assets/img/wch.jpg') }}'); background-size: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="wch-columns col-lg-7 order-{{ session()->get('locale') == 'en' ? '1' : '2' }}">
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)"
                                        class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                        Impartiality</h4>
                                    <h4 style="color: var(--color-primary)"
                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                        Ketidakberpihakan</h4>
                                </div>
                                <p class="en text-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                    We always put our clients first. We are committed to act fairly and responsibly in
                                    every interaction with our customer, partners and employees. Our belief is that
                                    impartiality is the key to building trust and maintaining good relationships with
                                    all parties involved. Our commitment to excellence is what sets us apart from the
                                    rest.
                                </p>
                                <p class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                    Selalu memperhatikan ketidakberpihakan dalam aspek bisnis. ATSI berkomitmen untuk
                                    selalu bertindak secara adil, bertanggung jawab atas ketidakberpihakan secara
                                    objektif dan transparan dalam setiap interaksi dengan pelanggan, mitra dan karyawan.
                                    ATSI percaya bahwa ketidakberpihakan adalah kunci untuk membangun kepercayaan dan
                                    menjaga hubungan yang baik dengan semua pihak yang terlibat.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
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
                                <p class="en text-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                    We always go above and beyond to serve our clients and provide them with the best.
                                    Strive to produce services with the highest standards and implement SOP with detail
                                    in every process, upholding the value of service quality is our principle of
                                    conduct.
                                </p>
                                <p class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                    Selalu melayani dan memberikan yang terbaik untuk klien, berusaha semaksimal mungkin
                                    dalam menghasilkan pelayanan dengan standar yang tinggi, dan ATSI menerapkan SOP
                                    dengan detail di setiap prosesnya dengan menjunjung tinggi nilai kualitas pelayanan.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)"
                                        class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                        Integrity</h4>
                                    <h4 style="color: var(--color-primary)"
                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                        Integritas</h4>
                                </div>
                                <p class="en text-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                    ATSI is a company that values integrity in every aspect of its business. We believe
                                    that integrity is the key of success in upholding the customer's, partner's and
                                    employees' trust. ATSI always strive to meet high ethical standards in every action,
                                    to aim to be a great company in the industry.
                                </p>
                                <p class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                    Selalu berkomitmen untuk bertindak dengan jujur dan transparan dalam aspek bisnis.
                                    ATSI percaya bahwa integritas adalah kunci untuk membangun kepercayaan dengan
                                    pelanggan, mitra dan karyawan. ATSI selalu berusaha untuk memenuhi standar etika
                                    yang tinggi dalam setiap tindakan yang kemi lakukan dan berusaha untuk menjadi
                                    perusahaan yang baik dalam industri.
                                </p>
                            </div>
                            <div class="tab-pane fade show active" id="tab1">
                                <div
                                    class="d-flex {{ session()->get('locale') == 'en' ? 'justify-content-end' : '' }} align-items-center mt-4">
                                    <i class="bi bi-check2" style="color: var(--color-green)"></i>
                                    <h4 style="color: var(--color-primary)"
                                        class="en {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                        Professionalism</h4>
                                    <h4 style="color: var(--color-primary)"
                                        class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                        Profesionalisme</h4>
                                </div>
                                <p class="en text-end {{ session()->get('locale') == 'en' ? 'active' : 'hidden' }}">
                                    ATSI is a professional inspection company which is trustworthy, dedicated and
                                    disciplined. In ATSI we are committed to respect clients and taking full
                                    responsibility for achieving the common goals. ATSI is always adaptive and
                                    responsive to changes in the times innovationg to make improvements in all areas by
                                    demonstrating the best results. We continue to develop our abilities to improve
                                    superior services. Thank you for choosing ATSI as your business partner.
                                </p>
                                <p class="id {{ session()->get('locale') == 'id' ? 'active' : 'hidden' }}">
                                    Jujur dan berdedikasi dalam dislipin kerja. Setia menghormati klien dan bertanggung
                                    jawab penuh untuk tercapainya tujuan bersama. Sebagai inspektor yang profesional,
                                    ATSI selalu adaptif, peka menghadapi perubahan zaman dan berinovasi agar dapat
                                    melakukan perbaikan pada semua area dengan menunjukan hasil terbaik. ATSI terus
                                    mengembangkan kemampuan untuk meningkatkan layanan yang lebih unggul.
                                </p>
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
            $('.wch-columns').toggleClass(['order-1', 'order-2']);
            $('.wch-columns .d-flex').toggleClass('justify-content-end')
            // $('.wch-columns p').toggleClass('text-end')
            $('.langToggleBtn').toggleClass('disabled');
        })
    </script>
</body>

</html>
