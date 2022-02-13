(function($) {

    'use strict';

    $('.hanburger-icon').on('click', function() {
        $('.navbar-menu').toggleClass('navbar-toggle');
        $('.hanburger-icon').toggleClass('slide');
    });

    var backendSidebar = $('.backend-sidebar');
    if (backendSidebar) {
        var backendNavigationMenuCloseIcon = $('.backend-navigation-menu-close-icon');
        var backendNavigationMenuIcon = $('.backend-navigation-menu-icon');
        if (backendNavigationMenuIcon) {
            backendNavigationMenuIcon.on('click', function() {
                backendSidebar.removeClass('d-none').addClass('backend-sidebar-toggle');
            });
        }

        if (backendNavigationMenuCloseIcon) {
            backendNavigationMenuCloseIcon.on('click', function() {
                backendSidebar.removeClass('backend-sidebar-toggle').addClass('d-none');
            });
        }
    }

    const $owlCarousel = $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true
    });

    $owlCarousel.on("changed.owl.carousel", function(e) {
        $(".owl-slide-animated").removeClass("is-transitioned");
        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
    });

    function setOwlDotsPosition() {
        const $target = $(".owl-item.active .owl-slide-text");
        doDotsCalculations($target);
    }

    function doDotsCalculations(el) {
        const height = el.height();
        const {top, left} = el.position();
        const res = height + top + 80;
        $(".owl-carousel .owl-dots").css({
            top: `${res}px`,
            left: `${left}px`
        });
    }

    $owlCarousel.on("resize.owl.carousel", function() {
        setTimeout(function() {
            setOwlDotsPosition();
        }, 50);
    });

    $owlCarousel.on("changed.owl.carousel", function(e) { 
        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        const $target = $currentOwlItem.find(".owl-slide-text");
        doDotsCalculations($target);
    });

    $(".owl-carousel").on("initialized.owl.carousel", function() {
        setTimeout(function() {
            $("section.owl-carousel").show();
        }, 200);
    });

    $owlCarousel.trigger("refresh.owl.carousel");

})(jQuery);

function handleButton(button, spinner) {
    button.attr('disabled', false);
    spinner.addClass('d-none');
}

function handleErrors(input, span, message = '') {
    input.addClass('is-invalid');
    span.html(message);
    input.focus(function() {
        input.removeClass('is-invalid');
        span.html('');
    });
}


