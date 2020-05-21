/* global MicroModal */

let callbackButtons = document.querySelectorAll(".callback-action");
let callbackForm = document.querySelector(".form-callback");

let hamburger = document.querySelector(".hamburger");
let mobileMenu = document.querySelector(".mobile-menu");

for (const button of callbackButtons) {
  button.addEventListener("click", () => {
    callbackForm.classList.toggle("form-callback--visible");

    if (mobileMenu.classList.contains("mobile-menu--open")) {
      mobileMenu.classList.toggle("mobile-menu--open");
      hamburger.classList.toggle("is-active");
    }
  });
}

window.addEventListener("click", (e) => {
  let target = e.target;
  if (!target.closest(".callback-action") && !target.closest(".form-callback"))
    callbackForm.classList.remove("form-callback--visible");
});

let modalListeners = document.querySelectorAll("[data-material]");
for (const modal of modalListeners) {
  modal.addEventListener("click", () => {
    MicroModal.show("materialModal");
  });
}

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  mobileMenu.classList.toggle("mobile-menu--open");
});
