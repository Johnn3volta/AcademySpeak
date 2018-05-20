jQuery(document).ready(function() {
	
	"use strict";
    $('ul.breadcrumb li a').each(function () {
        if (this.href === location.href) $(this).addClass('active');
    });

    $('.popup-with-form').magnificPopup({
        type: 'inline',
        focus: '#name'
    });

});