(function ($) {

	'use strict';

    $('.activate-subscription').on('click', function() {
        handleAjax({that: $(this), button: 'activate-subscription-button', spinner: 'activate-subscription-spinner'});    
    });

})(jQuery);
