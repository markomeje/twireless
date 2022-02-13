(function ($) {

	'use strict';

    $('.signup-form').submit(function(event){
        event.preventDefault();
        var form = $(this);
    	var button = $('.signup-button');
    	var spinner = $('.signup-spinner');
    	var message = $('.signup-message');
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

            } else if (response.status === 0 && response.field === 'password') {
                handleButton(button, spinner);
                handleErrors($('.password'), $('.password-error'), response.info);

            } else if (response.status === 0 && response.field === 'confirmpassword') {
                handleButton(button, spinner);
                handleErrors($('.confirmpassword'), $('.confirmpassword-error'), response.info);

            } else if (response.status === 0 && response.field === 'address') {
                handleButton(button, spinner);
                handleErrors($('.address'), $('.address-error'), response.info);

            } else if (response.status === 0 && response.field === 'agree') {
                handleButton(button, spinner);
                handleErrors($('.agree'), $('.agree-error'), response.info);

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
