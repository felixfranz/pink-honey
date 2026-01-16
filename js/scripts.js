/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
  var w = window, d = document, e = d.documentElement, g = d.getElementsByTagName('body')[0], x = w.innerWidth || e.clientWidth || g.clientWidth, y = w.innerHeight || e.clientHeight || g.clientHeight;
  return { width: x, height: y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
  var timers = {};
  return function (callback, ms, uniqueId) {
    if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
    if (timers[uniqueId]) { clearTimeout(timers[uniqueId]); }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;



jq2 = jQuery.noConflict();
jq2(function ($) {


  // NAVI AUF UND ZU

  // Get the nav toggle element
  var navToggle = document.querySelector('.nav-toggle');

  function toggle_menu() {
    document.body.classList.toggle('body__menu_open');
    document.documentElement.classList.toggle('menu_open'); // 'html' element
  }

  // Add click event listener
  if (navToggle) {
    navToggle.addEventListener('click', function (event) {
      event.preventDefault(); // Equivalent to returning false in jQuery
      toggle_menu();
    });
  }


  ///////////////////////
  // switch header style
  ///////////////////////
  var scrolled_class = "body__scrolled";

  $(function () {
    var pageHeader = 150;

    $(window).scroll(function () {

      var scroll = getCurrentScroll();
      if (scroll >= pageHeader) {
        $('body').addClass(scrolled_class);
      }
      else {
        $('body').removeClass(scrolled_class);
      }

    });

    // function to geht scrol position
    function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
    }
  });


}); 

const svg_top = document.getElementById("svg-top");
const form = document.getElementById("form");

// SVG coordinate space
const WIDTH = 1000;
const HEIGHT = 800;

// limits for moving point 1
const MIN_X_1 = 100;
const MAX_X_1 = 900;
const MIN_Y_1 = 20;
const MAX_Y_1 = 250;

// current + target positions
let current_1 = { x: 700, y: 100 };
let target_1 = { x: 700, y: 100 };

// easing factor (lower = smoother)
const EASE_1 = 0.003;
const EASE_2 = 0.01;

// limits for moving point 2
const MIN_X_2 = 50;
const MAX_X_2 = 950;
const MIN_Y_2 = 100;
const MAX_Y_2 = 750;

// current + target positions
let current_2 = { x: 900, y: 700 };
let target_2 = { x: 900, y: 700 };

// easing factor (lower = smoother)


function handlePointer(clientX, clientY) {
  const rect = svg_top.getBoundingClientRect();

  const x = ((clientX - rect.left) / rect.width) * WIDTH;
  const y = ((clientY - rect.top) / rect.height) * HEIGHT;

  // clamp target 1
  target_1.x = Math.max(MIN_X_1, Math.min(MAX_X_1, x));
  target_1.y = Math.max(MIN_Y_1, Math.min(MAX_Y_1, y));

  // clamp target 2
  target_2.x = Math.max(MIN_X_2, Math.min(MAX_X_2, x));
  target_2.y = Math.max(MIN_Y_2, Math.min(MAX_Y_2, y));
}

svg_top.addEventListener("mousemove", (e) => {
  handlePointer(e.clientX, e.clientY);
});

svg_top.addEventListener("pointermove", (e) => {
  // Only react to direct interaction
  if (e.pointerType === "mouse" || e.pointerType === "touch") {
    handlePointer(e.clientX, e.clientY);
  }
});

function animate() {
  // lerp toward target
  current_1.x += (target_1.x - current_1.x) * EASE_1;
  current_1.y += (target_1.y - current_1.y) * EASE_1;

  current_2.x += (target_2.x - current_2.x) * EASE_2;
  current_2.y += (target_2.y - current_2.y) * EASE_2;

  form.setAttribute(
    "points",
    `0,0 ${current_1.x},${current_1.y} ${WIDTH},0 ${current_2.x},${current_2.y} 0,800`
  );
  requestAnimationFrame(animate);
}

animate();