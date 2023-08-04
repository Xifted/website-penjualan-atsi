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

function sortProducts() {
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

function formatPriceFilter() {
    const minPriceValue = document.getElementById("min-price");
    const maxPriceValue = document.getElementById("max-price");
    let formatMinPrice = minPriceValue.value.replace(/\D/g, ""); // Hanya angka saja, tanpa non-digit karakter
    let formatMaxPrice = maxPriceValue.value.replace(/\D/g, ""); // Hanya angka saja, tanpa non-digit karakter

    if (formatMinPrice.length > 0) {
        // Konversi ke angka desimal
        let minPrice = parseFloat(formatMinPrice);

        // Memformat angka menjadi mata uang IDR
        let formattedMinPrice = minPrice.toLocaleString("id-ID");

        minPriceValue.value = formattedMinPrice;
    }else{
        minPriceValue.value = '';
    }

    if (formatMaxPrice.length > 0) {
        // Konversi ke angka desimal
        let maxPrice = parseFloat(formatMaxPrice);

        // Memformat angka menjadi mata uang IDR
        let formattedMaxPrice = maxPrice.toLocaleString("id-ID");

        maxPriceValue.value = formattedMaxPrice;
    }else{
        maxPriceValue.value = '';
    }
}

function priceFilter() {
    const minPriceValue = document.getElementById("min-price");
    const maxPriceValue = document.getElementById("max-price");

    let minPrice = parseInt(minPriceValue.value.replace(/\D/g, ""));
    let maxPrice = parseInt(maxPriceValue.value.replace(/\D/g, ""));

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
document.addEventListener('DOMContentLoaded', function () {
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
        let formatMinPrice = parseFloat(minPrice.replace(/\D/g, "")); // Hanya angka saja, tanpa non-digit karakter
        let formattedMinPrice = formatMinPrice.toLocaleString("id-ID");
        minPriceValue.value = formattedMinPrice;
    }
    if (maxPrice) {
        let formatMaxPrice = parseFloat(maxPrice.replace(/\D/g, "")); // Hanya angka saja, tanpa non-digit karakter
        let formattedMaxPrice = formatMaxPrice.toLocaleString("id-ID");
        maxPriceValue.value = formattedMaxPrice
    }
});