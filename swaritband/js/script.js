var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  centerSlide:'true',
  fade:'true',
  grabCursor:'true',
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets:true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  
});