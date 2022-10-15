(function ($) {

	'use strict';

    $('.add-bundle-eeee').on('click', function() {
        handleAjax({that: $(this), button: 'add-bundle-button', spinner: 'add-bundle-spinner'});    
    });

})(jQuery);
