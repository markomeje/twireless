(function ($) {

	'use strict';

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
