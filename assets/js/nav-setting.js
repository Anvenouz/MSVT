var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar-index").style.top = "0px";
    } else {
        document.getElementById("navbar-index").style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;

}

document.addEventListener("click", function (event) {
    const dropdowns = document.querySelectorAll(".container-fluid");
    dropdowns.forEach(dropdown => {
        if (!dropdown.contains(event.target)) {
            const dropdownMenu = dropdown.querySelector(".navbar-collapse");
            dropdownMenu.classList.remove("show");
        }
    });
});

