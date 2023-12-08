<footer id="footer" class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <div class="d-flex gap-2" style="width: 150px; height: 75px;">
                            <img class="img-fluid" src="{{ asset('/assets/img/logo-white.png') }}" alt="logo">
                            <img class="img-fluid" src="{{ asset('/assets/img/logo2-transparent.png') }}" alt="logo" />
                        </div>
                        <p class="mt-3">
                            <strong>{{ session()->get('locale') == 'en' ? 'Address:' : 'Lokasi:' }}</strong> Jl. Iskandar Muda Raya No.7 | Kebayoran Lama Selatan, Kebayoran
                            Lama | Kota Adm. Jakarta Selatan | DKI Jakarta - 12241<br />
                            <strong>{{ session()->get('locale') == 'en' ? 'Phone:' : 'Telepon:' }}</strong> (+62) 2127099176<br />
                            <strong>Email:</strong> customerservice@atsi.co.id<br />
                        </p>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#hero">Home</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#services">Our Services</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#about">About Us</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#wch">Why Choose Us?</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/#contact">Contact Us</a>
                        </li>
                    </ul>
                </div> --}}

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'Inspection Goods at Factory' : 'Pemeriksaan Barang di Pabrik' }}</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'Export Product Inspection Services' : 'Pemeriksaan Ekspor Produk/Barang' }}</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'Import Product Inspection Services' : 'Pemeriksaan Impor Produk/Barang' }}</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'Cargo Insurance Services' : 'Inspeksi Cargo Insurance' }}</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'International Standard Product Quality Asurance Service' : 'Standar Internasional Mutu Produk/Barang' }}</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#services">{{ session()->get('locale') == 'en' ? 'Import Technical Tracebility Verification Services (VPTI)' : 'VPTI (Verifikasi Penelusuran Teknis Impor) Services' }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT. ATLANTIS SERVICES INDONESIA</span></strong>. All Rights Reserved
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