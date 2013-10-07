$( document ).ready(function() {
  //This space is for mute and unmute function
  //function check on click whether the mute class is in place and performs appropriate function
  $(".audio-button").click( function () {
    //this toggles the mute class, performs the check logic
    $(this).toggleClass("mute");
    //after altering the class, run the appropriate howler function.
    if ($(".audio-button").hasClass("mute") === true) {
        Howler.mute();
    }
    else {
        Howler.unmute();
    }
  });



  $('#scene1').bind('inview', function (event, visible) {
    if (visible) {
      scene1sounds.pause().fadeIn(0.7, 1000);
			scene1sounds.loop(false);
		} else {
			scene1sounds.fadeOut(0, 5000);
    	}
  	});

	$('#scene2').bind('inview', function (event, visible) {
    	if (visible) {
        scene2sounds.pause().fadeIn(0.7, 3000);
  		  scene2sounds.loop(true);
    	} else {
        scene2sounds.fadeOut(0, 2000);
    	}
  	});

  $('#scene3').bind('inview', function (event, visible) {
      if (visible) {
        scene3sounds.pause().fadeIn(0.7, 3000);
        scene3sounds.loop(true);
      } else {
        scene3sounds.fadeOut(0, 2000);
      }
  	});

  $('#scene4').bind('inview', function (event, visible) {
      if (visible) {
        scene4sounds.pause().fadeIn(0.7, 3000);
        scene4sounds.loop(true);
      } else {
        scene4sounds.fadeOut(0, 2000);
      }
    });

  $('#intermission4').bind('inview', function (event, visible) {
      if (visible) {
        scene4sounds.pause().fadeIn(0.7, 3000);
        scene4sounds.loop(true);
      } else {
        scene4sounds.fadeOut(0, 2000);
      }
    });

});

var scene1sounds = new Howl({
  urls: ['sounds/scene1-combined.ogg', 'sounds/scene1-combined.mp3'],
  buffer: true,
  volume: 0.7
});
var scene2sounds = new Howl({
  urls: ['sounds/scene2-combined.ogg', 'sounds/scene2-combined.mp3'],
  buffer: true,
  volume: 0.7
});
var scene3sounds = new Howl({
  urls: ['sounds/scene3-combined.ogg', 'sounds/scene3-combined.mp3'],
  buffer: true,
  volume: 0.7
});
var scene4sounds = new Howl({
  urls: ['sounds/scene4-combined.ogg', 'sounds/scene4-combined.mp3'],
  buffer: true,
  volume: 0.7
});