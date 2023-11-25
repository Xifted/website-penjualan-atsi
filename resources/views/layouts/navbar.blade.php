<header id="header" class="header fixed-top bg-white" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between px-5">
        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0 ps-5">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('/assets/img/logo.png') }}" alt="logo" />
            <!-- <h1>HeroBiz<span>.</span></h1> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link" href="/#hero">{{ 'Home Page' }}</a>
                </li>

                <li>
                    <a class="nav-link text-capitalize" href="/#services">{{ 'Our Services' }}</a>
                </li>
                <li>
                    <a class="nav-link" href="/#about">{{ 'About Us' }}</a>
                </li>
                <li>
                    <a class="nav-link" href="/#wch">{{ 'Why Choose Us?' }}</a>
                </li>
                <li>
                    <a class="nav-link" href="/#contact">{{ 'Contact Us' }}</a>
                </li>
                <li>
                    <a class="nav-link" href="/products#products">{{ 'Products' }}</a>
                </li>
                <li>
                    <select class="form-select changeLang border-0" style="color: var(--color-primary)">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesia
                        </option>
                    </select>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <!-- .navbar -->

        <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>
    </div>
</header>
