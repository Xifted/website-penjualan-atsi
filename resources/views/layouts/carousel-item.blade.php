<div class="carousel-item <?= $active ?? false ? 'active' : '' ?>" style="overflow: visible">
    <img src="{{ asset("/assets/img/hero-carousel/$image") }}" class="img-fluid">
    <a href="#hero" role="button" data-bs-slide="prev" class="position-absolute start-0 top-50 translate-middle-y ms-2">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a href="#hero" role="button" data-bs-slide="next"
        class="position-absolute end-0 top-50 translate-middle-y me-2">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
</div>
