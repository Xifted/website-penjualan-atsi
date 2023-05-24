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
    <title>ATSI - Products List</title>
</head>

<body id="products" class="bg-light">
    <!-- ======= Header ======= -->
    @include('layouts/navbar')

    <div class="container-fluid d-flex flex-column align-items-center justify-content-between mt-5 pt-5 px-5">
        <h1 class="text-muted fw-light text-center my-5 border-bottom" style="width: fit-content">Our Products</h1>
        <div class="container-fluid d-flex justify-content-between">
            <div class="row w-25 py-5">
                <div class="d-flex flex-column bg-white rounded-4 w-100 p-5 gap-3 border"
                    style="height: fit-content; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.103);">
                    <div class="d-flex filters-header align-content-center w-100" style="height: 15%;">
                        <h3 class="fw-4 text-muted" style="height: fit-content">Filters</h3>
                    </div>
                    <div class="d-flex filters-body flex-column" style="height: 85%;">
                        <div class="category d-flex flex-column border-top py-3 gap-1">
                            <h5 class="text-muted fw-light mb-3">Category</h5>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0"><i
                                        class="bi bi-check-circle fs-4 color-green "></i></button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Barang Model
                                    Tidak Baru (BMTB)</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Besi dan Baja</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Elektronika</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Makanan & Minuman</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Ban</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Holtikultura</p>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <button class="btn p-0 m-0">
                                    <i class="bi bi-circle fs-4 color-primary "></i>
                                </button>
                                <p class="text-muted h-100 fs-5 fw-light m-0">Pakaian Jadi</p>
                            </div>
                        </div>
                        <div class="price d-flex flex-column py-3">
                            <div class="category d-flex flex-column border-top py-3 gap-1">
                                <h5 class="text-muted fw-light mb-3">Price</h5>
                                <div class="d-flex gap-3 align-items-center">
                                    <button class="btn p-0 m-0"><i
                                            class="bi bi-check-circle fs-4 color-green "></i></button>
                                    <p class="text-muted h-100 fs-5 fw-light m-0">
                                        < Rp. 100.000</p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <button class="btn p-0 m-0">
                                        <i class="bi bi-circle fs-4 color-primary "></i>
                                    </button>
                                    <p class="text-muted h-100 fs-5 fw-light m-0">Rp. 100.000 - Rp. 1.000.000</p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <button class="btn p-0 m-0">
                                        <i class="bi bi-circle fs-4 color-primary "></i>
                                    </button>
                                    <p class="text-muted h-100 fs-5 fw-light m-0">Rp. 1.000.000 - Rp. 7.000.000</p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <button class="btn p-0 m-0">
                                        <i class="bi bi-circle fs-4 color-primary "></i>
                                    </button>
                                    <p class="text-muted h-100 fs-5 fw-light m-0">Rp. 7.000.000 - Rp. 15.000.000</p>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <button class="btn p-0 m-0">
                                        <i class="bi bi-circle fs-4 color-primary "></i>
                                    </button>
                                    <p class="text-muted h-100 fs-5 fw-light m-0">> Rp. 15.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-75 py-5 px-0 d-flex flex-column gap-4">
                <div class="d-flex justify-content-between mb-0" style="height: fit-content;">
                    <h5 class="text-muted fw-light">Atsi / Products</h5>
                    <button class="btn border text-start fw-light d-flex justify-content-between align-items-center"
                        style="background-color: var(--color-white); width: 210px; height: fit-content; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.103);">
                        Sort By
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </div>
                <div class="products w-100 d-flex flex-column mt-0 gap-4">
                    <div class="bg-white border rounded-4 d-flex justify-content-between align-items-center p-5 gap-3"
                        style="box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.103);">
                        <div class="col-md-3"
                            style="width: 300px; height: 300px; background: center no-repeat url('https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939'); background-size: cover;">
                        </div>
                        <div class="col-md-5 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold mb-0">Pancake Enak</h4>
                            <p class="text-muted mt-0 mb-0">Foods</p>
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
                            <div class="mt-1 mb-1 spec-1">
                                <span>100% cotton</span><span class="dot"></span><span>Light weight</span><span
                                    class="dot"></span><span>Best finish<br /></span>
                            </div>
                            <div class="mt-1 mb-1 spec-1">
                                <ul class="list-group ms-0">
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> An item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A second item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A third item</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1"><strong>Rp 13000,00</strong></h4>
                                <span class="strike-text text-muted"><strike>Rp 20000,00</strike></span>
                            </div>
                            <h6 style="color: var(--color-green);">Free shipping</h6>
                            <p class="text-justify text-truncate para mb-0">
                                There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even
                                slightly believable.<br /><br />
                            </p>
                        </div>
                        <div class="w-25 d-flex flex-column justify-content-between align-items-end product-btn h-100">
                            <button class="bg-transparent border-0" style="width: fit-content; height: fit-content;">
                                <i class="bi bi-heart fs-5"></i>
                            </button>
                            <button class="btn btn-primary btn-sm"
                                style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;"
                                type="button">
                                Details</button>
                        </div>
                    </div>
                    <div class="bg-white border rounded-4 d-flex justify-content-between align-items-center p-5 gap-3"
                        style="box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.103);">
                        <div class="col-md-3"
                            style="width: 300px; height: 300px; background: center no-repeat url('https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939'); background-size: cover;">
                        </div>
                        <div class="col-md-5 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold mb-0">Pancake Enak</h4>
                            <p class="text-muted mt-0 mb-0">Foods</p>
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
                            <div class="mt-1 mb-1 spec-1">
                                <span>100% cotton</span><span class="dot"></span><span>Light weight</span><span
                                    class="dot"></span><span>Best finish<br /></span>
                            </div>
                            <div class="mt-1 mb-1 spec-1">
                                <ul class="list-group ms-0">
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> An item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A second item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A third item</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1"><strong>Rp 13000,00</strong></h4>
                                <span class="strike-text text-muted"><strike>Rp 20000,00</strike></span>
                            </div>
                            <h6 style="color: var(--color-green);">Free shipping</h6>
                            <p class="text-justify text-truncate para mb-0">
                                There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even
                                slightly believable.<br /><br />
                            </p>
                        </div>
                        <div class="w-25 d-flex flex-column justify-content-between align-items-end product-btn h-100">
                            <button class="bg-transparent border-0" style="width: fit-content; height: fit-content;">
                                <i class="bi bi-heart fs-5"></i>
                            </button>
                            <button class="btn btn-primary btn-sm"
                                style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;"
                                type="button">
                                Details</button>
                        </div>
                    </div>
                    <div class="bg-white border rounded-4 d-flex justify-content-between align-items-center p-5 gap-3"
                        style="box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.103);">
                        <div class="col-md-3"
                            style="width: 300px; height: 300px; background: center no-repeat url('https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939'); background-size: cover;">
                        </div>
                        <div class="col-md-5 d-flex flex-column justify-content-center">
                            <h4 class="fw-bold mb-0">Pancake Enak</h4>
                            <p class="text-muted mt-0 mb-0">Foods</p>
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
                            <div class="mt-1 mb-1 spec-1">
                                <span>100% cotton</span><span class="dot"></span><span>Light weight</span><span
                                    class="dot"></span><span>Best finish<br /></span>
                            </div>
                            <div class="mt-1 mb-1 spec-1">
                                <ul class="list-group ms-0">
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> An item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A second item</li>
                                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4"
                                            style="color: var(--color-green);"></i> A third item</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <h4 class="mr-1"><strong>Rp 13000,00</strong></h4>
                                <span class="strike-text text-muted"><strike>Rp 20000,00</strike></span>
                            </div>
                            <h6 style="color: var(--color-green);">Free shipping</h6>
                            <p class="text-justify text-truncate para mb-0">
                                There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even
                                slightly believable.<br /><br />
                            </p>
                        </div>
                        <div class="w-25 d-flex flex-column justify-content-between align-items-end product-btn h-100">
                            <button class="bg-transparent border-0" style="width: fit-content; height: fit-content;">
                                <i class="bi bi-heart fs-5"></i>
                            </button>
                            <button class="btn btn-primary btn-sm"
                                style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;"
                                type="button">
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="mt-5 pt-5 mb-5 px-0 mx-0 d-flex justify-content-between">
      <div class="d-flex justify-content-center row gap-3">
        <div class="col-md-10 d-flex justify-content-between">
          <h6 class="text-muted">Atsi/Products</h6>
          <button class="btn text-start d-flex justify-content-between" style="background-color: var(--color-white); width: 210px; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.103);">
            Sort By
            <i class="bi bi-caret-down-fill"></i>
          </button>
        </div>
        <div class="col-md-10 d-flex flex-column gap-3">
          <div class="row bg-white border rounded d-flex justify-content-center align-items-center">
            <div class="col-md-3 m-3" style="width: 300px; height: 300px; background: center no-repeat url('https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939'); background-size: cover;">
            </div>
            <div class="col-md-5 my-2 mt-4 d-flex flex-column justify-content-center">
              <h4 class="fw-bold mb-0">Pancake Enak</h4>
              <p class="text-muted mt-0 mb-0">Foods</p>
              <div class="d-flex flex-row">
                <div class="ratings me-2 d-flex gap-1">
                    <i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-half text-warning fs-5"></i>
                </div>
                <span>310</span>
              </div>
              <div class="mt-1 mb-1 spec-1">
                <span>100% cotton</span><span class="dot"></span
                ><span>Light weight</span><span class="dot"></span
                ><span>Best finish<br /></span>
              </div>
              <div class="mt-1 mb-1 spec-1">
                <ul class="list-group ms-0">
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> An item</li>
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> A second item</li>
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> A third item</li>
                  </ul>
              </div>
              <div class="d-flex flex-row align-items-center">
                <h4 class="mr-1"><strong>Rp 13000,00</strong></h4>
                <span class="strike-text text-muted"><strike>Rp 20000,00</strike></span>
              </div>
              <h6 style="color: var(--color-green);">Free shipping</h6>
              <p class="text-justify text-truncate para mb-0">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable.<br /><br />
              </p>
            </div>
            <div
              class="w-25 d-flex flex-column justify-content-between align-items-end py-3 product-btn" style="height: 350px;"
            >
                <button class="bg-transparent border-0" style="width: fit-content; height: fit-content;">
                  <i class="bi bi-heart fs-5"></i>
                </button>
                <button class="btn btn-primary btn-sm" style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;" type="button">
                  Details</button
                >
            </div>
          </div>
          <div class="row bg-white border rounded d-flex justify-content-center align-items-center">
            <div class="col-md-3 m-3" style="width: 300px; height: 300px; background: center no-repeat url('https://www.figma.com/file/8W3dPdx2K2XtF3Lj1Xpv6J/image/c957e3732cc67a477e4e2d06b4adddd11c436044?fuid=1156448676563229939'); background-size: cover;">
            </div>
            <div class="col-md-5 my-2 mt-4 d-flex flex-column justify-content-center">
              <h4 class="fw-bold mb-0">Pancake Enak</h4>
              <p class="text-muted mt-0 mb-0">Foods</p>
              <div class="d-flex flex-row">
                <div class="ratings me-2 d-flex gap-1">
                    <i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-fill text-warning fs-5"></i><i class="bi bi-star-half text-warning fs-5"></i>
                </div>
                <span>310</span>
              </div>
              <div class="mt-1 mb-1 spec-1">
                <span>100% cotton</span><span class="dot"></span
                ><span>Light weight</span><span class="dot"></span
                ><span>Best finish<br /></span>
              </div>
              <div class="mt-1 mb-1 spec-1">
                <ul class="list-group ms-0">
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> An item</li>
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> A second item</li>
                    <li class="list-group-item border-0 m-0 p-0"><i class="bi bi-check2-circle fs-4" style="color: var(--color-green);"></i> A third item</li>
                  </ul>
              </div>
              <div class="d-flex flex-row align-items-center">
                <h4 class="mr-1"><strong>Rp 13000,00</strong></h4>
                <span class="strike-text text-muted"><strike>Rp 20000,00</strike></span>
              </div>
              <h6 style="color: var(--color-green);">Free shipping</h6>
              <p class="text-justify text-truncate para mb-0">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by
                injected humour, or randomised words which don't look even
                slightly believable.<br /><br />
              </p>
            </div>
            <div
              class="w-25 d-flex flex-column justify-content-between align-items-end py-3 product-btn" style="height: 350px;"
            >
                <button class="bg-transparent border-0" style="width: fit-content; height: fit-content;">
                  <i class="bi bi-heart fs-5"></i>
                </button>
                <button class="btn btn-primary btn-sm" style="background-color: var(--color-green); border-color: var(--color-green); height: 40px !important; width: 170px;" type="button">
                  Details</button
                >
            </div>
          </div>
        </div>
      </div>
    </div> --}}

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
