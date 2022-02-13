(function ($) {

	'use strict';

    $('.request-form').submit(function(event){
        event.preventDefault();
        var form = $(this);
    	var button = $('.request-button');
    	var spinner = $('.request-spinner');
    	var message = $('.request-message');
        button.attr('disabled', true);
        spinner.removeClass('d-none');
        message.hasClass('d-none') ? '' : message.fadeOut();

        var request = $.ajax({
            method: form.attr('method'),
            url: form.attr('data-action'),
            data: new FormData(this),
            processData: false,
            contentType: false,
            dataType: 'json'
        });

        request.done(function(response){
            if (response.status === 0 && response.field === 'fullname') {
                handleButton(button, spinner);
                handleErrors($('.fullname'), $('.fullname-error'), response.info);

            } else if (response.status === 0 && response.field === 'state') {
                handleButton(button, spinner);
                handleErrors($('.state'), $('.state-error'), response.info);

            } else if (response.status === 0 && response.field === 'email') {
                handleButton(button, spinner);
                handleErrors($('.email'), $('.email-error'), response.info);

            } else if (response.status === 0 && response.field === 'phone') {
                handleButton(button, spinner);
                handleErrors($('.phone'), $('.phone-error'), response.info);

            } else if (response.status === 0 && response.field === 'designation') {
                handleButton(button, spinner);
                handleErrors($('.designation'), $('.designation-error'), response.info);

            } else if (response.status === 0 && response.field === 'serviceprovider') {
                handleButton(button, spinner);
                handleErrors($('.serviceprovider'), $('.serviceprovider-error'), response.info);

            } else if (response.status === 0 && response.field === 'plan') {
                handleButton(button, spinner);
                handleErrors($('.plan'), $('.plan-error'), response.info);

            } else if (response.status === 0 && response.field === 'address') {
                handleButton(button, spinner);
                handleErrors($('.address'), $('.address-error'), response.info);

            } else if (response.status === 1) {
                handleButton(button, spinner);
                message.removeClass('d-none alert-danger').addClass('alert-success');
                message.html(response.info).fadeIn();
                window.location.href = response.redirect;

            } else if (response.status === 0) {
                handleButton(button, spinner);
                message.removeClass('d-none alert-success').addClass('alert-danger');
                message.html(response.info).fadeIn();

            } else {
                handleButton(button, spinner);
                alert('Network Error. Try Again');
            }
        });

        request.fail(function() {
            handleButton(button, spinner);
            alert('Network Error. Try Again');
        });
    });

})(jQuery);
