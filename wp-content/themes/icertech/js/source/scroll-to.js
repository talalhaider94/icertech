(function($){

$("#banner-scroll").click(function() {
  $('html, body').animate({
      scrollTop: $("#scroll-to-main-content").offset().top
  }, 1200);
});

}(jQuery));
