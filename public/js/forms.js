(function ($) {

	'use strict';

    $('.start-subscription-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'start-subscription-button', spinner: 'start-subscription-spinner', message: 'start-subscription-message'});
    });

    $('.edit-payment-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'edit-payment-button', spinner: 'edit-payment-spinner', message: 'edit-payment-message'});
    });

    $('.send-sms-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'send-sms-button', spinner: 'send-sms-spinner', message: 'send-sms-message'});
    });

    $('.send-notification-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'send-notification-button', spinner: 'send-notification-spinner', message: 'send-notification-message'});
    });

    $('.extend-subscription-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'extend-subscription-button', spinner: 'extend-subscription-spinner', message: 'extend-subscription-message'});
    });

    $('.edit-subscription-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'edit-subscription-button', spinner: 'edit-subscription-spinner', message: 'edit-subscription-message'});
    });

    $('.add-payment-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'add-payment-button', spinner: 'add-payment-spinner', message: 'add-payment-message'});
    });

    $('.edit-package-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'edit-package-button', spinner: 'edit-package-spinner', message: 'edit-package-message'});
    });

    $('.add-subscription-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'add-subscription-button', spinner: 'add-subscription-spinner', message: 'add-subscription-message'});
    });

    $('.add-package-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'add-package-button', spinner: 'add-package-spinner', message: 'add-package-message'});
    });

    $('.add-bundle-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'add-bundle-button', spinner: 'add-bundle-spinner', message: 'add-bundle-message'});
    });

    $('.add-customer-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'add-customer-button', spinner: 'add-customer-spinner', message: 'add-customer-message'});
    });

    $('.login-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'login-button', spinner: 'login-spinner', message: 'login-message'});
    });

    $('.signup-form').submit(function(event){
        event.preventDefault();
        handleForm({form: $(this), button: 'signup-button', spinner: 'signup-spinner', message: 'signup-message'});
    });

})(jQuery);
