
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        // loop: true,
        autoHeight: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
            autoHeight: true
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
            autoHeight: false,
          },
          1680: {
            slidesPerView: 3,
            spaceBetween: 30,
            autoHeight: false,
          },
        },
      });

    var blog = new Swiper(".blogSwiper", {
            slidesPerView:1,
            spaceBetween: 0,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
          });

