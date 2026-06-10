
//   let swipers = () => {
//   new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     loop: true,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     breakpoints: {
//       768: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       1024: {
//         slidesPerView: 3,
//         spaceBetween: 25,
//       },
//     },
//   });
// };
const swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 25,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
    },

    992: {
      slidesPerView: 3,
    },

    1200: {
      slidesPerView: 4,
    }
  }
});

 swiper();

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".navs").forEach((nav) => {
    nav.addEventListener("mouseenter", function () {
      this.classList.add("active-nav");
    });
    nav.addEventListener("mouseleave", function () {
      this.classList.remove("active-nav");
    });
  });

  const form = document.querySelector("form");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      alert("Form submitted successfully!");
    });
  }

  const menu = document.querySelector("#menu");
  const fallcont = document.querySelector(".fall");
  if (menu && fallcont) {
    menu.addEventListener("click", function (e) {
      e.preventDefault();
      fallcont.classList.toggle("active");
    });
  }
});

  


