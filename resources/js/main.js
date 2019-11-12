jQuery(document).ready(function($){

    $(window).on('resize', function () {

        var mobileMenuIcon = $('.mobile_menu_icon');
        if ($(window).width() > 768) {

            if(mobileMenuIcon.hasClass('open')) {
                mobileMenuIcon.removeClass('open');
                $('#navbarNav').removeClass('open');
                $('#navToggler').addClass('collapse');
            }
        }

    });


    /*****************************/

    /* Mobile menu */

    $('.mobile_menu_icon').on('click', function (e) {
        e.preventDefault();

        if($(this).hasClass('open')) {
            window.setTimeout(function () {
                $('#navbarNav').toggleClass('open');
            }, 800);
            $('#navToggler').addClass('collapse');
        } else {
            $('#navbarNav').toggleClass('open');
            $('#navToggler').removeClass('collapse');
        }

        $(this).toggleClass('open');

    });

    $('a.jump').on('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var headerHeight = $('#global_header').height();

        console.log(headerHeight);

        if ($(window).width() < 768) {
            headerHeight = (headerHeight - $('#navToggler').height()) + 50;
        } else {
            headerHeight = headerHeight + 30;
        }

        var target = $(this).attr("href"); // Set the target as variable

        console.log(target);
        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').animate({scrollTop: $(target).offset().top - headerHeight}, 1000);
    });

    $(window).scroll(function() {
        headerHeight = $('#global_header').height() - 60;
        var scrollDistance = $(window).scrollTop() - headerHeight;

        // Assign active class to nav links while scolling
        $('.section').each(function(i) {
            if(i === 3) {
                scrollDistance = scrollDistance - 10;
            }
            if( i === 4 ) {
                scrollDistance = scrollDistance - 1400;
            }

            if ($(this).position().top <= scrollDistance) {
                $('.navigation a.active').removeClass('active');
                $('.navigation a').eq(i).addClass('active');
            } else if ($(this).position().top === 0) {
                $('.navigation a.active').removeClass('active');
            }
        });

        /* if ($(window).scrollTop() > 300) {
             $('.header').addClass('scroll');
         } else {
             $('.header').removeClass('scroll');
         }*/

    }).scroll();

    if($(window).width() < 768) {
        $('.navigation a.nav-link').on('click', function(){
            $('#navToggler').addClass('collapse');
            $('#navbarNav').toggleClass('open');
            $('.mobile_menu_icon').toggleClass('open');
        });
    }
});
