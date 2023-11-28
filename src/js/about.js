


$(function () {
  //@prepros-prepend plugin/swiper-bundle.min.js

  //swiper
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        return '<span class="' + currentClass + '"></span>' +
          '<span ><img src="dist/images/about/slash.png"></span> ' +
          '<span class="' + totalClass + '"></span>';
      },
    },
    breakpoints: {
      375: {
        slidesPerView: 1.13,
        spaceBetween: 20,
        centeredSlides: false,
      },
      768: {
        slidesPerView: 1.2,
        spaceBetween: 32,
        centeredSlides: false,
      },
      991: {
        slidesPerView: 1.8,
        spaceBetween: 32,
        centeredSlides: false,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 32,
      },
      1200: {
        slidesPerView: 2.94,
        spaceBetween: 32,
      },
    },
  });
})