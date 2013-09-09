// JavaScript Document
$(document).ready(function() {
  // var $curScene = $("#scene-one");

  var device = navigator.userAgent.toLowerCase();
  var ios = device.match(/(iphone|ipod|ipad)/);
 //function that returns element's y position
    
    $("a[href*=#]").on('click', function(e) {
        // $curScene = $("#scene-two");
        // detectScene($curScene);
      var scrollTarget = $(this.hash).offset().top;
      if(scrollTarget) 
          e.preventDefault();
        if(parseInt(scrollTarget) !== parseInt($(window).scrollTop())) {
          var nav2 = $("nav");
        if (ios) nav2.hide();
          $('html,body').animate({scrollTop:scrollTarget}, 1000, "swing", function(evt) {
          if (ios) {
            if(scrollTarget == 0) 
                nav2.css({position:'absolute', top:$("#intro").height()});
            else
                nav2.css({position:'absolute', top:scrollTarget});
            var nav2clone = $("nav")
            nav2clone.show();
          }
      });
    }
    });

    if (ios) {
        $(document).bind('touchmove',function(){
          var intro = $("#intro"), nav2 = $("nav");
          console.log(nav2.position().top);
        if(intro.height() != nav2.position().top)
        {
            nav2.css({position:'fixed', top:'0px'});
            console.log(nav2.position().top);
        }
        else
        {
            nav2.css({position:'relative', top: ''});
        }
      });   
    }

    // function detectScene(curScene){
    //   console.log(curScene);
    //   // Locks the scroll position of the section
    //   var $main   = $(".main"),
    //       $window    = $(window),
    //       offset     = $main.offset(),
    //       topPadding = 50;

    //   $window.scroll(function() {
    //     if($window.scrollTop() > $curScene.height()) {
    //       // basically this is just saying, that if you've scrolled passed the related
    //       // curScene, we are going to prevent further scrolling
    //       $window.scrollTop($curScene.height());
    //       // $main.stop().css('position', 'fixed');
    //     }
    //   });      
    // }
    // detectScene($curScene);
});