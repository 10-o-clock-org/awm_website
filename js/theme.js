/*------------------------------------------------------------------
https://www.ai-week.de/
Version: 1.0;
Author: jo’s büro für Gestaltung GmbH
Author-URI: https://jos-buero.de/
Copyright: 10 o´clock GmbH

/*-----------------------------------------------------------------*/

/*-----------------------------------------------------------------*/

// MAIN
//------------------------------------------------------------------
(function($) {
    'use strict';
        $(window).on('load', function () {
    
        // Fixed Top Bar & Navigation
        /*-------------------------------------------------------------*/
        var scrolled;
        var lastScrollTop = 0;
        var delta = 5;
        var topHeight = $('.top').outerHeight();
        var headerHeight = 60;

        $(this).scroll(function(){
            scrolled = true;
            if ($(this).scrollTop() >= headerHeight) {
                //$('.top, .wrapper').addClass('down');
            }
            else {
                $('.top, .wrapper').removeClass('down');
            }
        });
        setInterval(function() {
            if (scrolled) {
                hasScrolled();
                scrolled = false;
            }
        }, 50);

        function hasScrolled() {
            var st = $(window).scrollTop();
            // Make sure window gets scrolled > delta value
            if(Math.abs(lastScrollTop - st) <= delta) {
                return;
            }
            if (st > lastScrollTop && st > topHeight){
                // Scroll Down
                //$('.top').addClass('shrink');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('.top').removeClass('shrink');
                }
            }
            lastScrollTop = st;
        }
        $(this).scroll();

        // Menu Icon / Overlay / Sidebar
        /*-------------------------------------------------------------*/
        $('.top .navigation').on('click', function() {
            $('#nav-icon').toggleClass('open');
            $('.overlay').toggleClass('active');
            $('.top').toggleClass('force');
            $('.logo').toggleClass('active');
            // reset Navigation
            $('.mainnavigation ul').hide();
            $('.mainnavigation li').find(".expand").removeClass('active');
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w >= 1024) {
                $('#nav-icon').removeClass('open');
                $('.overlay').removeClass('active');
                $('.top').removeClass('force');
            }
        });

        // Navigation (Overlay / Sidebar)
        /*-------------------------------------------------------------*/
        $('.menu li:has(ul)').addClass('has-child');
        // Expand Submenus via Expander
        $('.mainnavigation li:has("ul")').append('<span class="expand"></span>');
        $('.mainnavigation .expand').on('click', function() {
            $(this).parent().siblings().find(".expand").removeClass('active');
            $(this).parent().siblings().find("ul").slideUp(400);
            $(this).toggleClass('active');
            $(this).prev("ul").slideToggle(400);
        });
            
        // Animated dots
        const dotsContainer = document.getElementById('animatedDots');
        const numberOfDots = 50;
        const colors = ['gray', 'white', 'blue'];

        for (let i = 0; i < numberOfDots; i++) {
          const dot = document.createElement('div');
          dot.classList.add('dot');
          const colorClass = `dot-${colors[Math.floor(Math.random() * colors.length)]}`;
          dot.classList.add(colorClass);
          dot.style.left = `${Math.random() * 100}%`;
          dot.style.top = `${Math.random() * 100}%`;
          dot.style.animationDelay = `${Math.random() * 3}s`;
          dotsContainer.appendChild(dot);
        }
            
    
    });
})(jQuery);