<div class="carousel-item <?= $active ?? false ? 'active' : '' ?>" style="overflow: visible">
    <div class="container-fluid" style="overflow: visible">
        <div class="row justify-content-end" style="overflow: visible">
            <div class="d-flex p-0 m-0 justify-content-end position-relative"
                style="background-color: rgba(34, 74, 126, 0.5); overflow: visible;">
                <div
                    style="background-color: #224A7E; width: 250px; height: 100%; clip-path: polygon(100% 0, 0% 100%, 100% 100%)">
                </div>
                <div class="col-4 position-relative"
                    style="overflow: visible; height: 200px; width: 300px; background: center no-repeat url('{{ asset("/assets/img/hero-carousel/$image") }}'); background-size: cover;">
                    <div class="text-center mt-4 col-4 position-absolute top-100" style="width: 500px; right: -100px">
                        <span><?= $indonesia ?></span>
                        <hr>
                        <span><?= $english ?></span>
                    </div>
                </div>
                <div style="background-color: #224A7E; width: 100px; height: 100%;"></div>

                <a href="#hero" role="button" data-bs-slide="prev"
                    class="position-absolute start-0 top-50 translate-middle-y ms-2">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a href="#hero" role="button" data-bs-slide="next"
                    class="position-absolute end-0 top-50 translate-middle-y me-2">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>
