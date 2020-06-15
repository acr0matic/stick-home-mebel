let slider = document.querySelector(".swiper-wrapper");

let filters = document.querySelectorAll(".button-gallery");
let filterItems = document.querySelectorAll("[data-filter]");

for (const filter of filters) {
  let count = filter.querySelector("span");
  let counter = 0;

  let filterType = filter.getAttribute("data-filter-type");

  if (filterType == "all")
    count.innerHTML = filterItems.length;

  for (const item of filterItems) {
    let itemType = item.getAttribute("data-filter");
    if (filterType == itemType) {
      counter++;
      count.innerHTML = counter;
    }
  }

  filter.addEventListener("click", () => {
    filter.classList.add("button-active");

    for (const button of filters) {
      if (button !== filter)
        button.classList.remove("button-active");
    }

    for (const item of filterItems) {
      let itemType = item.getAttribute("data-filter");

      item.style.display = "block";
      if (itemType != filterType && filterType != "all") {
        item.style.display = "none";
      }
    }

    // let slides = document.querySelectorAll(".gallery-slider__slide");
    // for (const slide of slides) {
    //   let slideItems = slide.querySelectorAll(".gallery__image");

    //   for (const item of slideItems) {
    //     if (item.style.display != "none") {

    //     }
    //   }
    // }
  })
}

// AppendItem();
// function AppendItem() {
//   let slides = slider.querySelectorAll(".gallery-slider__slide");

//   for (const slide of slides) {
//     let items = slide.querySelectorAll(".gallery__image");

//   }
// }