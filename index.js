var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 15;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.bg').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();
const year = (new Date().getFullYear());
//please enter one month lesser for the date to count due to some technical error in the clock
const fourthOfJuly = new Date(2019, 1, 21).getTime();

// countdown
let timer = setInterval(function() {

  // get today's date
  const today = new Date().getTime();

  // get the difference
  const diff = fourthOfJuly - today;

  // math
  let days = Math.floor(diff / (1000 * 60 * 60 * 24));
  let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((diff % (1000 * 60)) / 1000);

  // display

function myFunction(x) {
  if (x.matches) {
    function myFunction(t) {
  if (t.matches) {
  document.getElementById("timer").innerHTML =
    "<div class=\"days\"> \
  <div class=\"numbers\">"+days+"</div>D</div> \
<div class=\"hours\"> \
  <div class=\"numbers\">"+hours+"</div>H</div> \
<div class=\"minutes\"> \
  <div class=\"numbers\">"+minutes+"</div>M</div> \
<div class=\"seconds\"> \
  <div class=\"numbers\">"+seconds+"</div>S</div> \
</div>";

  } else {
  document.getElementById("timer").innerHTML =
    "<div class=\"days\"> \
  <div class=\"numbers\">"+days+"</div>days</div> \
<div class=\"hours\"> \
  <div class=\"numbers\">"+hours+"</div>hours</div> \
<div class=\"minutes\"> \
  <div class=\"numbers\">"+minutes+"</div>mins</div> \
<div class=\"seconds\"> \
  <div class=\"numbers\">"+seconds+"</div>secs</div> \
</div>";

  }
}

var t = window.matchMedia("(max-width: 376px)")
myFunction(t) // Call listener function at run time
t.addListener(myFunction)


  } else {
  document.getElementById("timer").innerHTML =
    "<div class=\"days\"> \
  <div class=\"numbers\">"+days+"</div>days</div> \
<div class=\"hours\"> \
  <div class=\"numbers\">"+hours+"</div>hours</div> \
<div class=\"minutes\"> \
  <div class=\"numbers\">"+minutes+"</div>minutes</div> \
<div class=\"seconds\"> \
  <div class=\"numbers\">"+seconds+"</div>seconds</div> \
</div>";

  }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
}, 1000);
