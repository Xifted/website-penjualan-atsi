<header id="header" class="header sticky-top bg-white" data-scrollto-offset="0">
    <div class="container-fluid navbar-container px-5">
        <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0 ps-5">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('/assets/img/logo.png') }}" alt="logo" />
            <img src="{{ asset('/assets/img/logo2.png') }}" alt="logo" />
            <!-- <h1>HeroBiz<span>.</span></h1> -->
        </a>

        <nav id="navbar" class="navbar mx-auto">
            <ul>
                <li class="d-flex justify-content-center">
                    <a class="nav-link"
                        href="/#hero">{{ session()->get('locale') == 'en' ? 'Home Page' : 'Halaman Beranda' }}</a>
                </li>
                <li class="d-flex justify-content-center">
                    <a class="nav-link"
                        href="/#about">{{ session()->get('locale') == 'en' ? 'About Us' : 'Tentang Kami' }}</a>
                </li>
                <li class="dropdown d-flex flex-column align-items-center justify-content-center">
                    <a href="#">
                        <span class="nav-link">{{ session()->get('locale') == 'en' ? 'Affiliate' : 'Afiliasi' }}</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul class="min-w-100">
                        <li class="d-lg-block d-flex justify-content-center"><a href="#">PT. OMIC CONSULTING
                                SERVICES
                                INDONESIA</a></li>
                        <li class="d-lg-block d-flex justify-content-center"><a href="#">HQTS</a></li>
                        <li class="d-lg-block d-flex justify-content-center"><a href="#">GLOBAL QUALITY TECHNOLOGY
                                GROUP
                                (GQ)</a></li>
                    </ul>
                </li>
                <li class="d-flex justify-content-center">
                    <a class="nav-link"
                        href="/#services">{{ session()->get('locale') == 'en' ? 'Our Services' : 'Layanan Kami' }}</a>
                </li>
                {{-- <li class="d-flex justify-content-center">
                    <a class="nav-link" href="/#wch">{{ session()->get('locale') == 'en' ? 'Experince' : 'Pengalaman' }}</a>
                </li> --}}
                <li class="d-flex justify-content-center">
                    <a class="nav-link"
                        href="/#contact">{{ session()->get('locale') == 'en' ? 'Contact Us' : 'Kontak Kami' }}</a>
                </li>
                <li class="d-flex justify-content-center">
                    <a class="nav-link"
                        href="/products#products">{{ session()->get('locale') == 'en' ? 'Products' : 'Produk' }}</a>
                </li>
                <li class="d-flex justify-content-center">
                    <select class="form-select changeLang border-0 text-center" style="color: var(--color-primary)">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesia
                        </option>
                    </select>
                </li>
                <li class="mt-2 mt-xl-0 d-flex justify-content-center">
                    <a class="btn-getstarted scrollto m-0"
                        href="#">{{ session()->get('locale') == 'en' ? 'Get Started' : 'Gabung Sekarang' }}</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
    </div>
</header>
