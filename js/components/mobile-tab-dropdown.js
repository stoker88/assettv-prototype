function mobileDropdown() {
  var mobileBreakpoint = 768,
          $window = $(window);
  $('.mobile-dropdown-menu').toggleClass('dropdown-menu', ($window.width() < mobileBreakpoint))
}

$(document).ready(function () {

  mobileDropdown();
  $(window).on('resize', mobileDropdown); // when window is resized

  //@todo Change .prev('button') to use active text form within dropdown
});