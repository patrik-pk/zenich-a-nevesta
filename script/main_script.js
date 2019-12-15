
$(document).ready(function() {

  // COOKIES POP-UP 
  
  function cookies() {
    if ($.cookie('dontShowPopUp')) {
      $('.pop-up').hide();
    } 
    else {
      $("#pop-up_close").on("click touchstart", function() {
        $(".pop-up").fadeOut(1000);
        $.cookie('dontShowPopUp', true);
      });
    }
  }
  
  // SHOW SIDE MENU ON MOBILE PHONES
  
  var mobileSizeMin = window.matchMedia("(min-width: 1200px)");
  var mobileSizeMax = window.matchMedia("(max-width: 1200px)");
  
  mobileSizeMax.addListener(showSideMenuOnMobile);
  mobileSizeMin.addListener(showSideMenuOnMobile);
  
  showSideMenuOnMobile(mobileSizeMax, mobileSizeMin);
  
  function showSideMenuOnMobile(mobileSizeMax) {
  
    if (mobileSizeMin.matches) { // Command for more than 1200px
      var cont = $("#nav_sidemenu").contents();
      $("#nav_sidemenu").replaceWith(cont);
    }
  
    if (mobileSizeMax.matches) { // Command for less than 1200px
      $(".navigation > .side_menu_container").wrap("<div id='nav_sidemenu'></div>");
    }
  
  }
  
  // SIDE MENU FUNCTIONS

  $("#nav_btn").on("click touchstart", function() {
    toggleSideMenu();
  });

  $("#close_btn").on("click touchstart", function() {
    closeSideMenu();
  });
  
  function toggleSideMenu() {
    $(".navigation").addClass("active");
    $("body").css("position", "fixed");
  }
  
  function closeSideMenu() {
    $(".navigation").removeClass("active");
    $("body").css("position", "static");
  }

  // EXECUTE

  cookies();
});

