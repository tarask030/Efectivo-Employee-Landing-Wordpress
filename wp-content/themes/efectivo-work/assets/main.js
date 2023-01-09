(function($) {

    $(window).on("load", function() {
        $('.load').css('opacity', '1');
    });





    // ALL

    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Dynamically import the LazySizes library
        const script = document.createElement('script');
        script.src =
            'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
        document.body.appendChild(script);
    }



    // MENU SIZE - SCROLL DOWN
    var menu = $('body').offset().top + 150
    if ($(window).width() > 992) {

        $(window).scroll(function() {
            if ($(this).scrollTop() >= menu) {
                $('.navbar__fixed').addClass('navbar__fixed--small');
                $('.mobile-overlay').addClass('mobile-overlay--scroll');
            } else {
                $('.navbar__fixed').removeClass('navbar__fixed--small');
                $('.mobile-overlay').removeClass('mobile-overlay--scroll');
            }
        });
    }



    // HEIGHT

    $(window).on('load', function() {
        var maxHeight = Math.max.apply(null, $(".home-blog .blogSwiper .swiper-slide a h3").map(function() {
            return $(this).innerHeight();
        }).get());
        $(".home-blog .blogSwiper .swiper-slide a h3").height(maxHeight);

    });


    // SCROLL

    $('#menu-main-menu-header li a[href^="#"], #menu-main-menu-header-1 li a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        var scroll;

        if ($(window).scrollTop() == 0) {
            scroll = ($target.offset().top) - 100
        } else {
            scroll = ($target.offset().top) - 100
        }
        $('html, body').stop().animate({
            'scrollTop': scroll
        }, 900, 'swing', function() {
            //window.location.hash = target;
        });
    });

    $(".home-packages-box-item .btn-white").on("click", function(e) {
        var $select = $("select");
        $select.val($(this).data("value"));
        $('body').addClass('is-popup');
    });

    $(".footer .txt button").on("click", function(e) {
        $('body').addClass('is-popup');
    });

    $(".popup .close").on("click", function(e) {
        $('body').removeClass('is-popup');
    });


    // FAQ
    var action = "click";
    var speed = "500";

    $(document).ready(function() {
        // Question handler
        $('div.q').on(action, function() {
            // Get next element
            $(this).toggleClass('active')
            $(this).next()
                .slideToggle(speed)
                // Select all other answers
                .siblings('div.a')
                .slideUp();
        });
    });



}(jQuery));