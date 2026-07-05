
  const swiperEl = document.querySelector(".mySwiper");
  if (swiperEl) {
    new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 16,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 28,
        },
      },
    });
  }

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
      alert("Form submitted successfully!");
    });
  }

  const menu = document.querySelector("#menu");
  const siteNav = document.querySelector(".site-nav");

  if (menu && siteNav) {
    menu.addEventListener("click", function () {
      const isOpen = siteNav.classList.toggle("open");
      this.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    siteNav.querySelectorAll(".navs:not(.nav-toggle)").forEach((navLink) => {
      navLink.addEventListener("click", () => {
        siteNav.classList.remove("open");
        menu.setAttribute("aria-expanded", "false");
      });
    });
  }


  


