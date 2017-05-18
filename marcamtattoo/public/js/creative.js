(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 70)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse>ul>li>a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    if ($("#mainNav").offset().top>120){
      $("#mainNav").addClass("navbar-shrink");
      $('#logo').attr('src', '/imatges/logo_marcam_blanc.png');
      $('#logo').attr('width', '80');
      $('#logo').attr('height', '70');
      $('#logo_header').removeClass("logo_big");
      $('#logo_header').addClass("logo_small");
      $('#nav-left').removeClass("navbar-left");
      $('#nav-left').addClass("navbar-left-small");
      $('#nav-right').removeClass("navbar-right");
      $('#nav-right').addClass("navbar-right-small");
      $("a").addClass("text_blanc");
    }
    // jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
            $("a").addClass("text_blanc");
            $('#logo').attr('src', '/imatges/logo_marcam_blanc.png');
            $('#logo').attr('width', '80');
            $('#logo').attr('height', '70');
            $('#logo_header').removeClass("logo_big");
            $('#logo_header').addClass("logo_small");
            $('#nav-left').removeClass("navbar-left");
            $('#nav-left').addClass("navbar-left-small");
            $('#nav-right').removeClass("navbar-right");
            $('#nav-right').addClass("navbar-right-small");
            $("#mainNav").addClass("text_blanc");

        } else {
            $("#mainNav").removeClass("navbar-shrink");
            $('#logo').attr('src', '/imatges/logo_marcam.png');
            $('#logo').attr('width', '180');
            $('#logo').attr('height', '170');
            $('#logo_header').removeClass("logo_small");
            $('#logo_header').addClass("logo_big");
            $('#nav-left').removeClass("navbar-left-small");
            $('#nav-left').addClass("navbar-left");
            $('#nav-right').removeClass("navbar-right-small");
            $('#nav-right').addClass("navbar-right");
            $("a").removeClass("text_blanc");


        }

    });

    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);



})(jQuery); // End of use strict

// ROTATION CARDS //
$().ready(function(){
     $('[rel="tooltip"]').tooltip();

 });

 function rotateCard(btn){
     var $card = $(btn).closest('.card-container');
     console.log($card);
     if($card.hasClass('hover')){
         $card.removeClass('hover');
     } else {
         $card.addClass('hover');
     }
 }
