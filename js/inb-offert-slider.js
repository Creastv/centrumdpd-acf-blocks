var swiper = new Swiper(" .offert", {
  slidesPerView: 2,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      centeredSlides: true,
      loopFillGroupWithBlank: true
    },
    400: {
      slidesPerView: 1
    },
    500: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 1
    },
    1000: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 2
    }
  }
});
