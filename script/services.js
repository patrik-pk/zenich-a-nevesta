
$(document).ready(function() {

  let desktop_only = window.matchMedia("(min-width: 1200px)");

  if (desktop_only.matches) { // Load only on desktop
    
    // FIX NAVBAR POSITION ON TOP OF THE PAGE WHEN USER SCROLLS DOWN
    
    
    $(window).scroll(function(){
    
      var a = 200;
      var pos = $(window).scrollTop();
    
      if (pos > a) {
        $(".position_navigation").css({
          position: 'fixed',
          marginTop:'-200px'
        });
      }
    
      else {
        $(".position_navigation").css({
          position: 'absolute',
          marginTop:'0px'
        });
      }
    
    });
    
    // CHANGE NAVBAR IMAGE ON HOVER + SCROLL FUNCTION
    
    var li_up = $(".nav_container > ul > li:first-child");
    li_up.on("click", function() { nav_click("header", 100); });
  
    var li_loc = $(".nav_container > ul > li:nth-child(2)");
    li_loc.on("click", function () { nav_click(".locations_section", 100); });
  
    var li_dec = $(".nav_container > ul > li:nth-child(3)");
    li_dec.on("click", function () { nav_click(".ceremony_section", 100); });
  
    var li_food = $(".nav_container > ul > li:nth-child(4)");
    li_food.on("click", function () { nav_click(".menu_section", 100); });
  
    var li_cam = $(".nav_container > ul > li:nth-child(5)");
    li_cam.on("click", function () { nav_click(".photo_section", 100); });
  
    var li_add = $(".nav_container > ul > li:nth-child(6)");
    li_add.on("click", function () { nav_click(".offer_section", 100); });
  
    var li_down = $(".nav_container > ul > li:last-child");
    li_down.on("click", function () { nav_click(".vat_section", 500); });
  
    // Li scroll to function
  
    function nav_click(element, scroll_offset) {
      window.scrollTo({
        top: $(element).offset().top - scroll_offset,
        left: 0,
        behavior: "smooth"
      })
    }
    
    // Li hover
  
    $(li_up).hover(
      function() { $(".nav_container > ul > li:first-child > img").attr("src","./img/icons/services_nav/up_colored.png"); },
      function() { $(".nav_container > ul > li:first-child > img").attr("src","./img/icons/services_nav/up_black.png"); }
    );
    
    $(li_loc).hover(
      function() { $(".nav_container > ul > li:nth-child(2) > img").attr("src","./img/icons/services_nav/location_colored.png"); },
      function() { $(".nav_container > ul > li:nth-child(2) > img").attr("src","./img/icons/services_nav/location_black.png"); }
    );
    
    $(li_dec).hover(
      function() { $(".nav_container > ul > li:nth-child(3) > img").attr("src","./img/icons/services_nav/decoration_colored.png"); },
      function() { $(".nav_container > ul > li:nth-child(3) > img").attr("src","./img/icons/services_nav/decoration_black.png"); }
    );
    
    $(li_food).hover(
      function() { $(".nav_container > ul > li:nth-child(4) > img").attr("src","./img/icons/services_nav/food_colored.png"); },
      function() { $(".nav_container > ul > li:nth-child(4) > img").attr("src","./img/icons/services_nav/food_black.png"); }
    );
    
    $(li_cam).hover(
      function() { $(".nav_container > ul > li:nth-child(5) > img").attr("src","./img/icons/services_nav/camera_colored.png"); },
      function() { $(".nav_container > ul > li:nth-child(5) > img").attr("src","./img/icons/services_nav/camera_black.png"); }
    );
    
    $(li_add).hover(
      function() { $(".nav_container > ul > li:nth-child(6) > img").attr("src","./img/icons/services_nav/addition_colored.png"); },
      function() { $(".nav_container > ul > li:nth-child(6) > img").attr("src","./img/icons/services_nav/addition_black.png"); }
    );
    
    $(li_down).hover(
      function() { $(".nav_container > ul > li:last-child > img").attr("src","./img/icons/services_nav/down_colored.png"); },
      function() { $(".nav_container > ul > li:last-child > img").attr("src","./img/icons/services_nav/down_black.png"); }
    );
  }
});

