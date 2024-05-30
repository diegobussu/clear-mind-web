document.addEventListener("DOMContentLoaded", function() {
    var menuIcon = document.getElementById("menuIcon");
    var navbarMenu = document.querySelector(".navbar1_menu");

    menuIcon.addEventListener("click", function() {
        if (navbarMenu.style.display === "none") {
            navbarMenu.style.display = "block";
        } else {
            navbarMenu.style.display = "none";
        }
    });
});
