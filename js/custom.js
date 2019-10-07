window.onload= function() {
  Particles.
  init
    ({
      selector: '.background',
      connectParticles:false,
      maxParticles:200,
      color:'#ffffff',
      sizeVariations:4

    });
};

window.onscroll = function() {
  myFunction()
};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$('.toggle').click(function(){
  $('body').toggleClass('opennav');
});

$('.listCol > h4 > span > img').click (function(){
  $('body').toggleClass('listOpen');
});
$('.closefilter').click (function(){
  $('body').removeClass('listOpen');
});


if ( $(window).width() <= 991 ) {
  $('.navMenu ul li a').click(function(){
    $(this).parent('li').find('.d-submenu').slideToggle();
    $(this).parent('li').siblings().find('.d-submenu').slideUp();
  });
}
else {
  // $('.navMenu ul li a').click(function(){
  //   $(this).parent('li').find('.d-submenu').slideDown ();
  // });
};


var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      $(box).addClass('skewed');
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();
