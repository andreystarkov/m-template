/* M-Template by Andrey Starkov
    im@andreystarkov.ru | github/andreystarkov */

$(document).ready(function() {

        $('.wp1').waypoint(function() {
            $('.wp1').addClass('animated fadeInUp');
        }, {
            offset: '75%'
        });
        $('.wp2').waypoint(function() {
            $('.wp2').addClass('animated fadeInUp');
        }, {
            offset: '75%'
        });
        $('.wp3').waypoint(function() {
            $('.wp3').addClass('animated fadeInRight');
        }, {
            offset: '75%'
        });

        $('.flexslider').flexslider({
            animation: "slide"
        });

        $('.single_image').fancybox({
            padding: 4,
        });

        $('[data-toggle="tooltip"]').tooltip();

        $('.nav-toggle').click(function() {
            $(this).toggleClass('active');
            $('.header-nav').toggleClass('open');
            event.preventDefault();
        });

        $('.header-nav li a').click(function() {
            $('.nav-toggle').toggleClass('active');
            $('.header-nav').toggleClass('open');

        });

        $(function() {
                $(window).scroll(function() {
                        var scroll = $(window).scrollTop();

                        if (scroll >= 20) {
                            $('section.navigation').addClass('fixed');
                            $('#top-navigation .logo').transition({opacity: 1}, 1000);
                            $('header').css({
                                    "border-bottom": "none",
                                    "padding": "26px 0"
                                }); $('header .member-actions').css({
                                    "top": "26px",
                                }); $('header .navicon').css({
                                    "top": "20px",
                                });
                            } else {
                                $('section.navigation').removeClass('fixed');
                                $('header').css({
                                    "padding": "50px 0"
                                });
                                $('header .member-actions').css({
                                    "top": "41px",
                                });
                                $('header .navicon').css({
                                    "top": "48px",
                                });
                            }
                        });
                });

            $(function() {

                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 2000);
                            return false;
                        }
                    }
                });

            });

        });