var swiper = new Swiper(".team-swiper", {
  slidesPerView: 4,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  grabCursor: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
      centeredSlides: true,
      loopFillGroupWithBlank: true
    },
    500: {
      slidesPerView: 2
    },
    769: {
      slidesPerView: 3
    },
    1200: {
      slidesPerView: 4
    }
  },
  scrollbar: {
    el: ".swiper-scrollbar"
  }
});
