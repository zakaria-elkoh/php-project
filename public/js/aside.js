const links = document.querySelectorAll("ul li a span");

links.forEach((link) => {
    link.addEventListener("click", () => {
        links.forEach((link) => {
            link.classList.remove("active");
        });
        link.classList.add("active");
    });
});