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

function handleErrors(errors) {
    $.each(errors, function(field, message) {
        var element = $('.'+field);
        var span = $('.'+field+'-error');
        element.addClass('is-invalid');
        span.html(message);
        element.focus(function() {
            element.removeClass('is-invalid');
            span.html('');
        });
    });
}

function handleForm(info = {}) {
    var form = info.form;
    var button = $('.'+info.button);
    var spinner = $('.'+info.spinner);
    var message = $('.'+info.message);
    button.attr('disabled', true);
    spinner.removeClass('d-none');
    message.hasClass('d-none') ? '' : message.fadeOut();

    $.ajax({
        method: form.attr('method'),
        url: form.attr('data-action'),
        data: form.serializeArray(),
        dataType: 'json',

        success: function(response) {
            if (response.status === 0) {
                if($.isEmptyObject(response.error)){
                    handleButton(button, spinner);
                    message.removeClass('d-none alert-success').addClass('alert-danger');
                    message.html(response.info).fadeIn();
                }else{
                    handleErrors(response.error);
                    handleButton(button, spinner);
                }
            }else if(response.status === 1) {
                handleButton(button, spinner);
                message.removeClass('d-none alert-danger').addClass('alert-success');
                message.html(response.info).fadeIn();
                console.log(response.redirect);
                return window.location.href = response.redirect;

            }else {
                handleButton(button, spinner);
                alert('Network error. Try again.');
            }
        },

        error: function() {
            handleButton(button, spinner);
            alert('Network error. Try again.');
        },
    });
}

function handleAjax(info = {}) {
    if (confirm('Very sure?')) {
        var button = $('.'+info.button);
        var spinner = $('.'+info.spinner);
        button.attr('disabled', true);
        spinner.removeClass('d-none');
        $.ajax({
            method: 'post',
            url: info.that.attr('data-url'),
            dataType: 'json',

            success: function(response) {
                if (response.status === 0) {
                    alert(response.info);
                    handleButton(button, spinner)
                }else if(response.status === 1) {
                    alert(response.info);
                    spinner.addClass('d-none');
                    return window.location.href = response.redirect;
                }else {
                    handleButton(button, spinner)
                    alert('Network error. Try again.');
                }
            },

            error: function() {
                handleButton(button, spinner)
                alert('Network error. Try again.');
            },
        });
    }
}


