(function () {
    "use strict";

    var custom = {
        initialize: function () {
            this.addActive();
            this.myMagnificPopup();
        },

        addActive: function () {
            jQuery('.nav.navbar-nav.navbar-right li a').each(function () {
                if (jQuery(this).parents().hasClass('dropdown-menu')) return true;
                else {
                    if (this.href === location.href) jQuery(this).parent().addClass('active');
                }
            });
            jQuery('ul.breadcrumb li a').each(function () {
                if (this.href === location.href) jQuery(this).addClass('active');
            });
        },


        myMagnificPopup: function () {
            jQuery('#popup__toggle').magnificPopup({
                focus: '#callbackform-name'
            });
        }
    };

    jQuery(document).ready(function () {
        custom.initialize();
    });

}(jQuery));


