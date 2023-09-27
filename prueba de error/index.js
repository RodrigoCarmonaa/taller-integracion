const pageHeader = document.getElementById("page-header");
let prevScrollPos = window.pageYOffset;

window.addEventListener("scroll", () => {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        pageHeader.style.top = "0"; // Muestra el encabezado al desplazar hacia arriba
    } else {
        pageHeader.style.top = "-63px"; // Oculta el encabezado al desplazar hacia abajo
    }

    prevScrollPos = currentScrollPos;
});
