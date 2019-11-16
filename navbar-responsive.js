const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".links-mobile");
const links = document.querySelectorAll(".links-mobile li");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    links.forEach(link =>{
        link.classList.toggle("fade");
    });
});