const navList = document.querySelector('.navbar ul');
const navLinks = document.querySelectorAll('.navbar a');
const hamburger = document.querySelector('.navbar__toggler');

hamburger.addEventListener("click", navbarTogglerClick);

function navbarTogglerClick() {
    hamburger.classList.toggle("open-navbar__toggler");
    navList.classList.toggle("open");
}

navLinks.forEach(elem => elem.addEventListener("click", navbarLinkClick));

function navbarLinkClick() {
    if (navList.classList.contains("open")) {
        hamburger.click();
    }
}