(function() {
  $(function() {
    $('a.scroll-to').click(function() {
      console.log($(this).data('scroll-to'));
      var $anchor;
      $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.data('scroll-to')).offset().top
      }, 2000, 'easeInOutExpo');
      return event.preventDefault();
    });
    $(window).scroll(function() {
      var top;
      top = $(window).scrollTop();
      if (top >= $('.navigation').outerHeight()) {
        $(".navigation").addClass("fixed-top animated fadeInDown");
        return $("body").addClass('headerfix');
      } else {
        $(".navigation").removeClass("fixed-top animated fadeInDown");
        return $('body').removeClass("headerfix");
      }
    });
    $(window).load(function() {
      'use strict';
      return $('.parallax-section').parallax('50%', 0.3);
    });
    $('.cta-btn').hover(function() {
      if ($(this).hasClass('animated rubberBand')) {
        return $(this).removeClass('animated rubberBand');
      } else {
        return $(this).addClass('animated wobble');
      }
    });
    $('#header_slider.carousel').carousel({
      interval: 5000
    });
    return $(".expandable-photo").click(function() {
      var bigphoto, photo;
      bigphoto = $("#photoModal img");
      photo = $(this).find('img');
      bigphoto.attr('src', photo.attr('src'));
      bigphoto.attr('title', photo.attr('title'));
      bigphoto.attr('alt', photo.attr('alt'));
      $("#photoModal h4").text(photo.attr('title'));
      $("#photoModal .caption").text(photo.attr('alt'));
      return $("#photoModal").modal('show');
    });
  });

}).call(this);
