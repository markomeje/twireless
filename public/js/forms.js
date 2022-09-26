(function ($) {

	'use strict';

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
