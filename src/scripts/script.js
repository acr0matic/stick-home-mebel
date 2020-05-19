/* global MicroModal */

let callbackButton = document.querySelector(".callback-action");
let callbackForm = document.querySelector(".form-callback");

callbackButton.addEventListener("click", () => {
  callbackForm.classList.toggle("form-callback--visible");
});

window.addEventListener("click", (e) => {
  let target = e.target;
  if (!target.closest(".callback-action") && !target.closest(".form-callback"))
    callbackForm.classList.remove("form-callback--visible");
});

let modalListeners = document.querySelectorAll("[data-material]");
for (const modal of modalListeners) {
  modal.addEventListener("click", () => {
    MicroModal.show("materialModal");
  })
}
