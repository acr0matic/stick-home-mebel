const mainImage = document.querySelector(".product-gallery__primary");
const otherImages = document.querySelectorAll(".product-gallery__secondary");

for (const image of otherImages) {
  image.addEventListener("click", () => {
    let source = image.querySelector("img").src;
    let imageBlock = mainImage.querySelector("img");
    let imageLink = mainImage.querySelector("[data-fslightbox]");

    imageBlock.src = source;
    imageLink.setAttribute("href", source);
    refreshFsLightbox();

    image.classList.add("product-gallery__secondary--active");
    for (const active of otherImages) {
      if (active != image) {
        active.classList.remove("product-gallery__secondary--active");
      }
    }
  })
}