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
                    <a class="nav-link scrollto"
                        href="/#hero">{{ GoogleTranslate::trans('Home Page', app()->getLocale()) }}</a>
                </li>

                <li>
                    <a class="nav-link scrollto text-capitalize"
                        href="/#services">{{ GoogleTranslate::trans('Our Services', app()->getLocale()) }}</a>
                </li>
                <li>
                    <a class="nav-link scrollto"
                        href="/#about">{{ GoogleTranslate::trans('About Us', app()->getLocale()) }}</a>
                </li>
                <li>
                    <a class="nav-link scrollto"
                        href="/#wch">{{ GoogleTranslate::trans('Why Choose Us?', app()->getLocale()) }}</a>
                </li>
                <li>
                    <a class="nav-link scrollto"
                        href="/#contact">{{ GoogleTranslate::trans('Contact Us', app()->getLocale()) }}</a>
                </li>
                <li>
                    <a class="nav-link scrollto"
                        href="/products#products">{{ GoogleTranslate::trans('Products', app()->getLocale()) }}</a>
                </li>
                <li>
                    <select class="form-select changeLang border-0" style="color: var(--color-primary)">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Indonesia</option>
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                    </select>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <!-- .navbar -->

        <a class="btn-getstarted scrollto"
            href="index.html#about">Get Started</a>
    </div>
</header>
