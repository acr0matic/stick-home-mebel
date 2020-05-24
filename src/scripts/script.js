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
  if (
    !target.closest(".callback-action") &&
    !target.closest(".form-callback") &&
    !target.closest("[data-button-action=order")
  )
    callbackForm.classList.remove("form-callback--visible");
});

let modalListeners = document.querySelectorAll("[data-material]");

if (modalListeners)
  for (const modal of modalListeners) {
    modal.addEventListener("click", () => {
      MicroModal.show("materialModal");
    });
  }

if (hamburger)
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("mobile-menu--open");
  });

let actionButtons = document.querySelectorAll("[data-button-action]");
for (const button of actionButtons) {

  button.addEventListener("click", () => {
    callbackForm.classList.toggle("form-callback--visible");
  });
}

let scrollButton = document.querySelectorAll("[data-button-scroll]");
for (const button of scrollButton) {
  let anchor = button.getAttribute("data-button-scroll");

  button.addEventListener("click", () => {
    SmoothScroll(anchor);
  });
}

function SmoothScroll(blockID) {
  var section = document.getElementById(blockID.substr(1));

  if (section) {
    section.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }
}
