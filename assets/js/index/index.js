// video slider
var swiper = new Swiper(".video_slider", {

    navigation: {
        nextEl: ".VS_next",
        prevEl: ".VS_prev",
    },
    breakpoints: {
        700: {
            slidesPerView: 2,            
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

    },
});

// offer slider
var swiper = new Swiper(".CO_slider", {
    autoplay: true,
    loop: true,
    speed: 1500,
    navigation: {
        nextEl: ".CO_next",
        prevEl: ".CO_prev",
    },
});