document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-offers").forEach(button => {
        button.addEventListener("click", function () {
            let offers = this.nextElementSibling;
            offers.style.display = offers.style.display === "none" ? "block" : "none";
        });
    });
});
