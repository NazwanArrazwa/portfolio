(function ($) {

  "use strict";

  // COLOR MODE
  $('.color-mode').click(function () {
    $('.color-mode-icon').toggleClass('active')
    $('body').toggleClass('dark-mode')
  })

  // HEADER
  $(".navbar").headroom();

  // PROJECT CAROUSEL
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true
  });

  // SMOOTHSCROLL
  $(function () {
    $('.nav-link, .custom-btn-link').on('click', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 49
      }, 1000);
      event.preventDefault();
    });
  });

  // TOOLTIP
  $('.social-links a').tooltip();

  // Menghilangkan preloader setelah halaman selesai dimuat
  $(window).on('load', function () {
    $("#status").fadeOut();
    $("#preloader").delay(350).fadeOut("slow");

    // Menghapus class "preloader-hide" dari navbar
    $(".navbar").removeClass("preloader-hide");
  });

  // Menggunakan jQuery untuk menangani preloader
  $(document).ready(function () {
    // Tambahkan kode JavaScript lain yang Anda butuhkan di sini
  });

})(jQuery);
