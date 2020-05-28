/* global MicroModal */

let request = new XMLHttpRequest();
let materialsData = null;

request.open("GET", "../data/materials.json", false);
request.send(null);

if (request.status == 200) {
  materialsData = JSON.parse(request.responseText);
}

let materials = document.querySelectorAll("[data-material]");
let materialModal = document.getElementById("materialModal");

if (materials) {
  let modalContent = materialModal.querySelector(".modal__content");
  let image = materialModal.querySelector(".modal__image");
  let title = materialModal.querySelector(".modal__title");

  for (const material of materials) {
    material.addEventListener("click", () => {
      image.src = "";
      
      let description = modalContent.querySelectorAll("p");
      for (const item of description) {
        modalContent.removeChild(item);
      }

      let dataType = material.getAttribute("data-material");
      let data = materialsData[dataType];

      title.innerHTML = data.title;
      image.src = data.image;

      for (let index = 0; index < data.description.length; index++) {
        let tag = document.createElement("p");
        let text = document.createTextNode(data.description[index]);

        tag.className = "paragraph";
        tag.appendChild(text);
        modalContent.appendChild(tag);
      }

      MicroModal.show("materialModal");
    });
  }
}