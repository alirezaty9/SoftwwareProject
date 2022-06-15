
window.$ = window.jQuery = require('jquery');
window.Popper = require('@popperjs/core');
window.bootstrap = require('bootstrap');
window.Shuffle = require('shufflejs').default;
require("sweetalert");
// require('persian-date');
// require('persian-datepicker/dist/js/persian-datepicker');
require('jquery-ui');
require('md.bootstrappersiandatetimepicker/dist/mds.bs.datetimepicker');
require('./owl-carousel-min');
require('./owl-custom-main');




// Footer Items Collapse On Mobile ------------------------------
var coll = document.getElementsByClassName("collapsible-trigger");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("collapse-active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

// Change Service Box Display On Scroll ---------------------------------------
let toggleBtn = false;
let togglerBtn = document.getElementById("navbarTogglerBtn");
togglerBtn.addEventListener('click', togglerTrigger)

function togglerTrigger() {
  this.toggleBtn=!this.toggleBtn;
}
$(document).ready(function () {
  $(window).scroll(function () {
    if(toggleBtn === false){
      if ($(window).scrollTop() > 780) {
        $(".service-icons-mobile").css({ display: "block" });
      } else {
        $(".service-icons-mobile").css({ display: "none" });
      }
    }else{
      if ($(window).scrollTop() > 850) {
        $(".service-icons-mobile").css({ display: "block" });
      } else {
        $(".service-icons-mobile").css({ display: "none" });
      }
    }

  });

  console.log('hello alireza')
});

// Active Mobile Bottom Menu Link ------------------------------------
// Get the container element
var navContainer = document.getElementById("navContainer");

// Get all buttons with class="btn" inside the container
var links = navContainer.getElementsByClassName("nav__link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("---active");
    current[0].className = current[0].className.replace(" ---active", "");
    this.className += " ---active";
  });
}

// Website Pre-Loader------------------

(function ($) {
  "use strict";
  $(window).on("load", function () {
    if ($(".pre-loader").length > 0) {
      $(".pre-loader").fadeOut("slow");
    }
  });
})(jQuery);
