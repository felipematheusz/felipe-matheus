

$(document).ready(function() {

  // Funções Header

  var $menu = $('.menu-hamburger-header');
  var $overlay = $("#overlay");

  $('#nav-icon4').click(function(){
    $(this).toggleClass('open-menu-hamburger');
    if ($menu.is(':visible')) {
      $menu.slideUp();
    } else {
      $menu.slideDown();
    }
  });
  
  $("#dropdown-btn").click(function() {
    $("#dropdown-card").show();
    $overlay.css("display", "block");
  });
  
  $("#search-header").click(function() {
    $overlay.css("display", "block");
    $("#dropdown-search").show();
    $("#search-header").addClass("search-header-active");
  });

  $("#button-login-dropdown, #button-login-dropdown-mobile").click(function() {
    $("#dropdown-login").show();
    $overlay.css("display", "block").css("background-color", "rgba(0, 0, 0, 0.5)");
  });
  
  $overlay.click(function() {
    $(this).css("display", "none");
    $("#dropdown-card").hide();
    $("#dropdown-search").hide();
    $("#search-header").removeClass("search-header-active");
    $("#dropdown-login").hide();
    $overlay.css("background-color", "transparent");
  });

  // Funções Header
  
  // Funções Home
  
  $('.carousel-banner-home').slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 3000,
  });
  
  // Funções Home
  
});



