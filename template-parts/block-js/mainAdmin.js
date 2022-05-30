var swiper = new Swiper(".gallerySwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    centeredSlidesBounds: true,
    spaceBetween: 15,
    loop: true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});