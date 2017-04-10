/**
 * Created by Kevin on 02.03.2017.
 */

+function ($) {
    $('.navigation .menu-mobile-button').on('click', function () {
        $('.menu-mobile ul')
            .slideToggle('slow');
    });
} (jQuery, undefined);