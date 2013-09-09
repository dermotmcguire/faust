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
			sound1.pause().fadeIn(0.5, 2000);
			music1.pause().fadeIn(0.5, 1000);
			music1.loop(false);
    } else {
			sound1.fadeOut(0, 2000);
			music1.fadeOut(0, 5000);
    }
  });

  $('#scene2').bind('inview', function (event, visible) {
    if (visible) {
			sound2a.pause().fadeIn(0.5, 2000);
			sound2b.pause().fadeIn(0.2, 2000);
      music2.pause().fadeIn(0.5, 2000);
      music2.loop(true);
    } else {
			sound2a.fadeOut(0, 2000);
			sound2b.fadeOut(0, 2000);
      music2.fadeOut(0, 2000);

    }
  });

  $('#scene3').bind('inview', function (event, visible) {
    if (visible) {
			sound3.pause().fadeIn(0.5, 2000);
      music3.pause().fadeIn(0.5, 2000);
      music3.loop(true);
    } else {
			sound3.fadeOut(0, 2000);
      music3.fadeOut(0, 2000);

    }
  });

  $('#scene4').bind('inview', function (event, visible) {
    if (visible) {
			sound4.pause().fadeIn(0.5, 2000);
      music4.pause().fadeIn(0.5, 2000);
      music4.loop(true);
    } else {
			sound4.fadeOut(0, 2000);
      music4.fadeOut(0, 2000);
    }
  });

});

var sound1 = new Howl({
  urls: ['sounds/scene-one-windy-city.mp3', 'sounds/scene-one-windy-city.ogg'],
  buffer: true,
  volume: 0.5
});
var sound2a = new Howl({
  urls: ['sounds/scene-two-distant-city-sounds.mp3', 'sounds/scene-two-distant-city-sounds.ogg'],
  buffer: true,
  volume: 0.6
});
var sound2b = new Howl({
  urls: ['sounds/scene-two-muffled-pub-sounds.mp3', 'sounds/scene-two-muffled-pub-sounds.ogg'],
  buffer: true,
  volume: 0.6
});
var sound3 = new Howl({
  urls: ['sounds/scene-three-rainy-city-at-night.mp3', 'sounds/scene-three-rainy-city-at-night.ogg'],
  buffer: true,
  volume: 0.5
});
var sound4 = new Howl({
  urls: ['sounds/scene-four-distant-city-sounds.mp3', 'sounds/scene-four-distant-city-sounds.ogg'],
  buffer: true,
  volume: 0.8
});
var music1 = new Howl({
  urls: ['sounds/scene-one-music-quiet.mp3', 'sounds/scene-one-music-quiet.ogg'],
  buffer: true,
  volume: 0.1
});
var music2 = new Howl({
  urls: ['sounds/scene-two-music-quiet.mp3', 'sounds/scene-two-music-quiet.ogg'],
  buffer: true,
  volume: 0.1
});
var music3 = new Howl({
  urls: ['sounds/scene-three-music-quiet.mp3', 'sounds/scene-three-music-quiet.ogg'],
  buffer: true,
  volume: 0.1
});
var music4 = new Howl({
  urls: ['sounds/scene-four-music-quiet.mp3', 'sounds/scene-four-music-quiet.ogg'],
  buffer: true,
  volume: 0.1
});