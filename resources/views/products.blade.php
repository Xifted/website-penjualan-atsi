<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link href="{{ asset('/assets/css/products.css') }}" rel="stylesheet" />
    <title>ATSI - Products List</title>
</head>

<body id="products" class="bg-light" style="overflow-y: auto !important;">
    <!-- ======= Header ======= -->
    @include('layouts/navbar')

    <div class="container-fluid d-flex flex-column align-items-center justify-content-between mt-5 pt-5 px-5">
        <h1 class="text-muted fw-light text-center my-5 border-bottom" style="width: fit-content">
            {{ $currentCategory['category_name'] ?? 'Our Products' }}</h1>
        <div class="container-fluid d-flex justify-content-between">
            <button
                class="btn btn-light shadow position-fixed rounded-0 p-3 d-none justify-content-center align-items-center py-2"
                id="toggle-filter-btn">
                <i class="bi bi-sliders fs-3 color-green pb-1 px-1"></i>
            </button>
            <div class="filter row w-25 py-5">
                <div class="filter-row d-flex flex-column bg-white rounded-4 w-100 p-5 gap-3 border"
                    style="height: fit-content; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.103);">
                    <div class="d-flex filters-header align-content-center w-100" style="height: 15%;">
                        <h3 class="fw-4 text-muted" style="height: fit-content">Filters</h3>
                    </div>
                    <div class="d-flex filters-body flex-column" style="height: 85%;">
                        <div class="category d-flex flex-column border-top py-3 gap-1">
                            <h5 class="text-muted fs-4 fw-light mb-3">Category</h5>
                            <div class="">
                                <button class="btn p-0 m-0">
                                    <a href="{{ url('/products') }}" class="d-flex gap-3 align-items-center">
                                        @if (Request::get('category') == null)
                                            <i class="bi bi-check-circle fs-4 color-green"></i>
                                        @else
                                            <i class="bi bi-circle fs-4 color-primary"></i>
                                        @endif
                                        <p class="text-muted h-100 fs-5 fw-light m-0 text-start">All Products</p>
                                    </a>
                                </button>
                            </div>
                            @foreach ($categories as $item)
                                <div class="">
                                    <button class="btn p-0 m-0">
                                        <a href="{{ url('/products?category=' . $item->category_id) }}"
                                            class="d-flex gap-3 align-items-center">
                                            @if (Request::get('category') == $item->category_id)
                                                <i class="bi bi-check-circle fs-4 color-green"></i>
                                            @else
                                                <i class="bi bi-circle fs-4 color-primary"></i>
                                            @endif
                                            <p class="text-muted h-100 fs-5 fw-light m-0 text-start">
                                                {{ $item->category_name }}
                                            </p>
                                        </a>
                                    </button>
                                </div>
                            @endforeach
                            {{-- <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-check-circle fs-4 color-green"></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Besi dan Baja</p>
                            </div> --}}
                        </div>
                        <div class="price d-flex flex-column py-3 pb-0">
                            <div class="category d-flex flex-column border-top py-3 pb-0 gap-1">
                                <h5 class="text-muted fs-4 fw-light mb-3">Price</h5>
                                <div class="d-flex gap-2 flex-column justify-content-center">
                                    <label for="min-price" class="form-label text-muted fw-light">Min Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input oninput="formatPriceFilter()" onchange="priceFilter()" type="text"
                                            class="form-control" id="min-price">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 mt-2 flex-column justify-content-center">
                                    <label for="min-price" class="form-label text-muted fw-light">Max Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input oninput="formatPriceFilter()" onchange="priceFilter()" type="text"
                                            class="form-control" id="max-price">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-container row w-75 py-5 px-0 d-flex flex-column gap-4">
                <div class="d-flex justify-content-between mb-0" style="height: fit-content;">
                    <h5 class="text-muted fw-light">Atsi / Products</h5>
                    <select onchange="sortProducts()" id="sortButton" class="form-select w-25">
                        <option value="" selected>Sort By</option>
                        {{-- <option value="price">Price</option> --}}
                        <option value="ASC">Lowest Price</option>
                        <option value="DESC">Highest Price</option>
                    </select>
                </div>
                <div class="products w-100 d-flex flex-column mt-0 gap-4">
                    @foreach ($products as $item)
                        <div class="product-item bg-white border rounded-4 d-flex justify-content-between align-items-center p-5 gap-3"
                            style="box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.103);">
                            <div class="col-md-3"
                                style="width: 300px; height: 300px; background: center no-repeat url('{{ $item->product_image == null || '' ? 'https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939' : asset('storage/' . $item->product_image) }}'); background-size: cover;">
                            </div>
                            <div class="product-detail col-md-5 d-flex flex-column justify-content-center">
                                <h4 class="fw-bold mb-0">{{ $item->product_name }}</h4>
                                <p class="text-muted mt-0 mb-0">{{ $item->category_name }}</p>
                                <div class="d-flex flex-row">
                                    <div class="ratings me-2 d-flex gap-1">
                                        <i class="bi bi-star-fill text-warning fs-5"></i><i
                                            class="bi bi-star-fill text-warning fs-5"></i><i
                                            class="bi bi-star-fill text-warning fs-5"></i><i
                                            class="bi bi-star-fill text-warning fs-5"></i><i
                                            class="bi bi-star-half text-warning fs-5"></i>
                                    </div>
                                    <span>310</span>
                                </div>
                                <div class="my-1 mt-2 spec-1">
                                    <p class="p-0 m-0">Stock : <span class="fw-bold">{{ $item->stock }}</span>
                                    </p>
                                </div>
                                <div class="mb-1 spec-1">
                                    <ul class="list-group ms-0">
                                        @if ($item->category_id == 4)
                                            <li
                                                class="d-flex align-items-center gap-1 list-group-item border-0 m-0 p-0">
                                                <i class="bi bi-check2-circle fs-4"
                                                    style="color: var(--color-green);"></i>Quality Checked
                                            </li>
                                        @else
                                            <li
                                                class="d-flex align-items-center gap-1 list-group-item border-0 m-0 p-0">
                                                <i class="bi bi-check2-circle fs-4"
                                                    style="color: var(--color-green);"></i>Quality Checked
                                            </li>
                                            <li
                                                class="d-flex align-items-center gap-1 list-group-item border-0 m-0 p-0">
                                                <i class="bi bi-check2-circle fs-4"
                                                    style="color: var(--color-green);"></i>1 Year Warranty
                                            </li>
                                            <li
                                                class="d-flex align-items-center gap-1 list-group-item border-0 m-0 p-0">
                                                <i class="bi bi-check2-circle fs-4"
                                                    style="color: var(--color-green);"></i>100% Original
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1 fw-bold item-price">{{ $item->product_price }}</h4>
                                    <span class="strike-text text-muted"><strike>Rp 20000000,00</strike></span>
                                </div>
                                <h6 style="color: var(--color-green);">Free shipping</h6>
                                <p class="text-justify text-truncate para mb-0">
                                    {{ $item->product_description }}<br /><br />
                                </p>
                            </div>
                            <div
                                class="w-25 d-flex flex-column justify-content-between align-items-end product-btn h-100">
                                <button class="bg-transparent border-0"
                                    style="width: fit-content; height: fit-content;">
                                    <i class="bi bi-heart fs-5"></i>
                                </button>
                                <button class="btn btn-primary btn-sm"
                                    style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;"
                                    type="button">
                                    Details</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
    <script src="{{ asset('/assets/js/products.js') }}"></script>
</body>

</html>
