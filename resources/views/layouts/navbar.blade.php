<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between px-5">
        <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0 ps-5">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('/assets/img/logo.jpeg') }}" alt="logo" />
            <!-- <h1>HeroBiz<span>.</span></h1> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto" href="/#hero">Home</a>
                </li>

                <li>
                    <a class="nav-link scrollto" href="/#services">Services</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="/#about">About Us</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="/#wch">Why Choose Us</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="/#contact">Contact Us</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="/products#products">Products</a>
                </li>
                <li class="nav-item dropdown" style="list-style: none;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(Lang::locale()) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="lang/id">ID</a></li>
                        <li><a class="dropdown-item" href="lang/en">EN</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <!-- .navbar -->

        <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>

    </div>
</header>
