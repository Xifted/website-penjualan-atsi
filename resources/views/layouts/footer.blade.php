<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <div style="width: 75px; height: 75px;">
                            <img class="img-fluid" src="{{ asset('/assets/img/logo.png') }}" alt="logo">
                        </div>
                        <p class="mt-3">
                            <strong>Location:</strong> Jl. Iskandar Muda Raya No.7 | Kebayoran Lama Selatan, Kebayoran
                            Lama | Kota Adm. Jakarta Selatan | DKI Jakarta - 12241<br />
                            <!-- NY 535022, USA<br /><br /> -->
                            <strong>Phone:</strong> (+62) 2127099176<br />
                            <strong>Email:</strong> customerservice@atsi.co.id<br />
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#hero">Home</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#services">Services</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#about">About Us</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#wch">Why Choose Us</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Pemeriksaan ekspor Produk/Barang</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Pemeriksaan impor Produk/Barang</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Perjanjian Manajemen/Layanan CMA Collateralx</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">Standar Internasional Mutu Produk/Barang</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#">VPTI (Verifikasi Penelusuran Teknis Impor) Services</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Products</h4>
                    <ul>
                        @foreach ($categories as $item)
                            <li>
                                <i class="bi bi-chevron-right"></i> <a
                                    href="{{ url('/products?category=' . $item->category_id) }}">{{ $item->category_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>
                        Tamen quem nulla quae legam multos aute sint culpa legam noster
                        magna
                    </p>
                    <form action="" method="post">
                        <input type="email" name="email" /><input type="submit" value="Subscribe" />
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT ATLANTIS SERVICE INDONESIA</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                    Designed by <a target="blank" href="https://github.com/Xifted">Rafi</a>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
