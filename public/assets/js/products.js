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

function sortProducts(){
    let sortBy = document.getElementById('sortButton').value;
    let url = window.location.href;
    let searchParams = new URLSearchParams(window.location.search);
    
    if (sortBy) {
        searchParams.set('sort', sortBy);
    } else {
        searchParams.delete('sort');
    }

    let newUrl = url.split('?')[0] + '?' + searchParams.toString();

    window.location.href = newUrl;
}

function priceFilter() {
    let minPrice = document.getElementById("min-price").value;
    let maxPrice = document.getElementById("max-price").value;
    let url = window.location.href;
    let searchParams = new URLSearchParams(window.location.search);


    if (minPrice) {
        searchParams.set("min_price", minPrice);
    } else {
        searchParams.delete("min_price");
    }

    if (maxPrice) {
        searchParams.set("max_price", maxPrice);
    } else {
        searchParams.delete("max_price");
    }

    let newUrl = url.split('?')[0] + '?' + searchParams.toString();

    window.location.href = newUrl;
}

// Set selected option based on URL query parameter
document.addEventListener('DOMContentLoaded', function() {
    var searchParams = new URLSearchParams(window.location.search);
    var sortBy = searchParams.get('sort');
    var minPrice = searchParams.get('min_price');
    var maxPrice = searchParams.get('max_price');

    let minPriceValue = document.getElementById("min-price");
    let maxPriceValue = document.getElementById("max-price");
    var select = document.getElementById('sortButton');

    if (sortBy) {
        select.value = sortBy;
    }
    if (minPrice) {
        minPriceValue.value = minPrice
    }
    if (maxPrice) {
        maxPriceValue.value = maxPrice
    }
});