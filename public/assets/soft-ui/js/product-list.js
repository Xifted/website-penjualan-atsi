window.addEventListener("DOMContentLoaded", (event) => {
    // Harga
    let IDRRupiah = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
    });
    document
        .querySelectorAll(".item-price")
        .forEach(
            (element) =>
            (element.textContent =
                IDRRupiah.format(element.textContent))
        );
});

function productSearch() {
    let searchProducts = document.getElementById("searchProducts").value;
    let url = window.location.href;
    let searchParams = new URLSearchParams(window.location.search);

    if (searchProducts) {
        searchParams.set("search", searchProducts);
    } else {
        searchParams.delete("search");
    }

    let newUrl = url.split('?')[0] + '?' + searchParams.toString();

    window.location.href = newUrl;
}

function previewImage(){
    const image = document.querySelector('#productImage');
    const imagePreview = document.querySelector('.img-preview')

    imagePreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imagePreview.src = oFREvent.target.result;
    }
}

function confirmDelete() {
    if (confirm("Apakah Anda yakin ingin menghapus?")) {
        return true; // Lanjutkan dengan tautan penghapusan
    } else {
        return false; // Batalkan tautan penghapusan
    }
}