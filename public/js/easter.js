
new Swiper("#image-carousel",
{

  // Slide Formatting
    slidesPerView: 1.25,
    centeredSlides: true,

    // Extra Properties
    lazyLoading: true,
    loop: true,
    keyboard:{
        enabled: true,
    },
    

    // Navbutton Enabled
    navigation: {
        nextEl: ".swiper-button-right",
        prevEl: ".swiper-button-left",
      },


      // Breakpoints
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 20
        },
    }
});