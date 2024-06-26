$(document).ready(function () {

  AOS.init({
    disable: function () {
      var maxWidth = 1200;
      return window.innerWidth < maxWidth;
    }
  });

  if ($(window).width() <= 1200) {
    $(".nav-item.dropdown .nav-link").removeAttr("data-bs-hover");
    $(".nav-item.dropdown .nav-link").removeClass("dropdown-hover");
    $(".nav-item.dropdown .nav-link").attr("data-bs-toggle", "dropdown");
    $(".nav-item.dropdown .nav-link").addClass("dropdown-toggle");
  }

  $('input').focus(function () {
    $(this).parents('.box-anim').addClass('focused');
  });
  $('textarea').focus(function () {
    $(this).parents('.box-anim').addClass('focused');
  });
  $('input').blur(function () {
    var inputValue = $(this).val();
    if (inputValue == "") {
      $(this).removeClass('filled');
      $(this).parents('.box-anim').removeClass('focused');
    } else {
      $(this).addClass('filled');
    }
  });
  $('textarea').blur(function () {
    var inputValue = $(this).val();
    if (inputValue == "") {
      $(this).removeClass('filled');
      $(this).parents('.box-anim').removeClass('focused');
    } else {
      $(this).addClass('filled');
    }
  });


  $('.available-slider').slick({
    dots: false,
    arrows: true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right-2.svg' class='slick-next slick-arrow'>",
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  AOS.refresh();
});

$(function () {

  $('#list').click(function () {
    $('#list img').addClass('active');
    $('#grid img').removeClass('active');
    $('#offerList').removeClass('grid');
    $('#offerList').addClass('list');
  });
  $('#grid').click(function () {
    $('#grid img').addClass('active');
    $('#list img').removeClass('active');
    $('#offerList').removeClass('list');
    $('#offerList').addClass('grid');
  });

});

//get the current year for the Copyright
$('#year').text(new Date().getFullYear());

