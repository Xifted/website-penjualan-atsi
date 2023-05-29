function categorySearch() {
    let searchCategories = document.getElementById("searchCategories").value;
    let url = window.location.href;
    let searchParams = new URLSearchParams(window.location.search);

    if (searchCategories) {
        searchParams.set("search", searchCategories);
    } else {
        searchParams.delete("search");
    }

    let newUrl = url.split('?')[0] + '?' + searchParams.toString();

    window.location.href = newUrl;
}

function confirmDelete() {
    if (confirm("Apakah Anda yakin ingin menghapus?")) {
        return true; // Lanjutkan dengan tautan penghapusan
    } else {
        return false; // Batalkan tautan penghapusan
    }
}