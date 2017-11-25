/**
 * Created by Kevin on 14.08.2017.
 */


+function($) {

    var $MainPageElements = $('#logo, .navigation, #artists, #events, #contact, #footer');

    if ($.cookie('startpageOverlay') || !$('#startpageOverlay').length) {
        // Layer wurde schon einmal aktiviert -> Abbruch
        return false;
    }
    else {
        // Layer muss angezeigt werden
        $('#startpageOverlay').removeClass('hidden');
        $MainPageElements.addClass('hidden');
        $('body, html').css('overflow', 'hidden');
        $('body').addClass('layer-active');
    }

    $('#startpageOverlay').on('click', function () {
        $(document).scrollTop(0);
        $(this).remove();
        $MainPageElements.removeClass('hidden');
        $('body, html').css('overflow', 'auto');
        $('body').addClass('layer-active');

        $.cookie('startpageOverlay', '1', { expires: 1 });
    });

}(jQuery);