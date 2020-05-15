let callbackButton = document.querySelector(".callback-action");
let callbackForm = document.querySelector(".form-callback");

callbackButton.addEventListener("click", () => {
  callbackForm.classList.toggle("form-callback--visible");
});
