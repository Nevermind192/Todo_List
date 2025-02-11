import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const userMenu = document.getElementById("user-menu");
    const dropdownMenu = document.getElementById("dropdown-menu");

    document.getElementById("toggle-sidebar").addEventListener("click", function() {
        document.querySelector(".sidebar").classList.toggle("collapsed");
    });

    document.addEventListener("click", function (event) {
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("toggle-sidebar");

        if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
            sidebar.classList.add("collapsed");
        }
    });

    userMenu.addEventListener("click", function (event) {
        dropdownMenu.classList.toggle("active");
        event.stopPropagation(); // Чтобы клик внутри меню не закрывал его
    });

    document.addEventListener("click", function (event) {
        if (!userMenu.contains(event.target)) {
            dropdownMenu.classList.remove("active");
        }
    });
});
