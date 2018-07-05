
const imageOfCardService = document.getElementsByClassName('image-of-service');
for (let index = 0; index < imageOfCardService.length; index++) {
    const element = imageOfCardService[index];
    
    element.getElementsByTagName('IMG')[0].classList.add('card-img-top');
    element.getElementsByTagName('IMG')[0].classList.add('rounded-circle');
    element.getElementsByTagName('IMG')[0].classList.add('my-img');
}

const textOfCardService = document.getElementsByClassName('conteudo-card');
for (let index = 0; index < textOfCardService.length; index++) {
    const element = textOfCardService[index];
    element.getElementsByTagName('P')[0].classList.add('card-text');
    
}

const imgBanner = document.getElementById('banner-1').getElementsByTagName('IMG');
for (let index = 0; index < imgBanner.length; index++) {    
    imgBanner[index].classList.add('img-fluid');
}

(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Hide navbar when modals trigger
  $('.portfolio-modal').on('show.bs.modal', function(e) {
    $(".navbar").addClass("d-none");
  })
  $('.portfolio-modal').on('hidden.bs.modal', function(e) {
    $(".navbar").removeClass("d-none");
  })

})(jQuery); // End of use strict
