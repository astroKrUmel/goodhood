/**
 * Created by Kevin on 14.08.2017.
 */


+function($) {

    if ($.cookie('startpageOverlay')) {
        // Layer wurde schon einmal aktiviert -> Abbruch
        return false;
    }
    else {
        // Layer muss angezeigt werden
        $('#startpageOverlay').removeClass('hidden');

    }

    $('#startpageOverlay').on('click', function () {
        $(document).scrollTop(0)
        $(this).addClass('fade-out');

        $.cookie('startpageOverlay', '1', { expires: 1 });
    });

}(jQuery);