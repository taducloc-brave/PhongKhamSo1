const menu = document.querySelector("#mobile__menu");
const menuLinks = document.querySelector(".navbar__menu");
const navLogo = document.querySelector(".navbar__logo");
const body = document.querySelector("body");
// display mobile menu
const mobileMenu = () => {
  menu.classList.toggle("is-active");
  menuLinks.classList.toggle("active");
  body.classList.toggle("active");
};
menu.addEventListener("click", mobileMenu);

// animations
gsap.registerPlugin(ScrollTrigger);

gsap.from(".animation__hero", {
  duration: 0.6,
  x: -150,
  opacity: 0,
  stagger: 0.3,
});
gsap.from(".animation__service", {
  scrollTrigger: ".animation__service",
  duration: 0.6,
  y: -150,
  opacity: 0,
  stagger: 0.3,
});
gsap.from(".animation__membership", {
  scrollTrigger: ".animation__membership",
  duration: 0.6,
  x: -150,
  opacity: 0,
  stagger: 0.3,
});
gsap.from(".animation__team", {
  scrollTrigger: ".animation__team",
  duration: 0.6,
  y: -150,
  opacity: 0,
  stagger: 0.3,
});
