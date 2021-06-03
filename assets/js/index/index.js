var swiper = new Swiper(".video_slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".VS_next",
        prevEl: ".VS_prev",
    },
});

var swiper = new Swiper(".CO_slider", {
    autoplay:true,
    loop:true,
    speed:1500,
    navigation: {
        nextEl: ".CO_next",
        prevEl: ".CO_prev",
    },
});