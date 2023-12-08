function orderSearch() {
    let searchCategories = document.getElementById("searchOrder").value;
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