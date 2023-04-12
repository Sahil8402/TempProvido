window.onscroll = function() {
    scrollFunction();

};

function scrollFunction() {
    let intViewportWidth = window.innerWidth;
    if (
        document.body.scrollTop > 30 ||
        (document.documentElement.scrollTop > 30) & (intViewportWidth > 991)
    ) {
        document.getElementById("navbar").classList.add("top-nav-collapse");
    } else if (
        document.body.scrollTop < 30 ||
        (document.documentElement.scrollTop < 30) & (intViewportWidth > 991)
    ) {
        document.getElementById("navbar").classList.remove("top-nav-collapse");
    }
}

// Navbar on mobile
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", () => {
        document.querySelector(".offcanvas-collapse").classList.toggle("open");
    });
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
    document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

// Hover on desktop
function toggleDropdown(e) {
    const _d = e.target.closest(".dropdown");
    let _m = document.querySelector(".dropdown-menu", _d);

    setTimeout(
        function() {
            const shouldOpen = _d.matches(":hover");
            _m.classList.toggle("show", shouldOpen);
            _d.classList.toggle("show", shouldOpen);

            _d.setAttribute("aria-expanded", shouldOpen);
        },
        e.type === "mouseleave" ? 300 : 0
    );
}





const theModal = document.getElementById('staticBackdrop');

if (theModal !== null) {
    const theModalGen = new bootstrap.Modal(theModal);
    const theModalCtaBtn = document.getElementById('modalCtaBtn');

}