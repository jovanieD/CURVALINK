document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    navLinks.forEach(link => {
        link.addEventListener("click", (event) => {
       
            if (!link.classList.contains("dropdown-toggle")) {
                navLinks.forEach(link => link.classList.remove("active"));
                link.classList.add("active");
            }
        });

        if (window.location.pathname === link.getAttribute("href")) {
            link.classList.add("active");
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const menuLinks = document.querySelectorAll(".menu-link");

    menuLinks.forEach(link => {
        link.addEventListener("click", (event) => {
            // Check if the menu is collapsed
            const isCollapsed = document.getElementById('layout-menu').classList.contains('menu-collapsed');

            if (isCollapsed) {
                // Toggle the menu collapse state
                document.getElementById('layout-menu').classList.toggle('menu-collapsed');
            }

            // Remove the 'active' class from all menu items
            document.querySelectorAll('.menu-item').forEach(item => {
                item.classList.remove('active');
            });

            // Add the 'active' class to the clicked menu item
            link.closest('.menu-item').classList.add('active');
        });

        if (window.location.pathname === link.getAttribute("href")) {
            link.closest('.menu-item').classList.add("active");
        }
    });
});

