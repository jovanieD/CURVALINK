document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    navLinks.forEach(link => {
        link.addEventListener("click", () => {
            navLinks.forEach(link => link.classList.remove("active"));
            link.classList.add("active");
        });

        if (window.location.pathname === link.getAttribute("href")) {
            link.classList.add("active");
        }
    });
});