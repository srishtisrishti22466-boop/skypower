
  let swipers = () => {
  let swiper = new Swiper(".mySwiper", {
    // Default Mobile ke liye 
    slidesPerView: 1, 
    spaceBetween: 10,
    loop: true, 
    
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Desktop/Tablet ke liye
    breakpoints: {
      // 768px se badi screen
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // Jab screen 1024px se badi ho
      1024: {
        slidesPerView: 3,
        spaceBetween: 25,
      },
    }
  });
};

swipers(); 


 let abcd = () => {  
document.addEventListener("DOMContentLoaded",function(){
  let enquiry = document.querySelectorAll(".navs");
  enquiry.forEach(det => {
    det.addEventListener("mouseenter", function() {
        this.classList.add("active-nav");
    });
    det.addEventListener("mouseleave", function() {
        this.classList.remove("active-nav");
    });
  });
}); 
} ;
  abcd();

 
let enquery = () => {
    let bton = document.querySelector(".btn")
    let close = document.querySelector("#cross")
    let show = document.querySelector(".full-width")
     bton.addEventListener("click", function(){
       show.classList.remove("none")
     });
     
     close.addEventListener("click", function(){
       show.classList.add("none")
     });
    };
     enquery();


    let form = document.querySelector("form");
    form.addEventListener("submit", function(event){
      event.preventDefault();
      alert("Form submitted successfully!");
    });

    let fall = () => {
      let fallcont = document.querySelector(".fall")
      let menu = document.querySelector("#menu")
      menu.addEventListener("click", function(e){
        e.preventDefault();
        fallcont.classList.toggle("active");
      });
    };
    fall();


  


