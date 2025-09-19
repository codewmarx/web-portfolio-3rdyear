// script for sidebar toggling

document.addEventListener("DOMContentLoaded", function() {
    const sidebarToggle = document.querySelector("#sidebar-toggle");

    // checking if it exists
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        })
    }
});