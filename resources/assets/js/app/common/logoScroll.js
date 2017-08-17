/**
 * Created by Kevin on 14.08.2017.
 */


+function($) {

    var $ScrollElement = $('.navigation');

    // no scroll element -> no
    if (!$ScrollElement.length) {
        return false
    }

    $('section#logo').on('click', function () {
        $('body').animate({scrollTop: $ScrollElement.position().top}, '1000');
    });

}(jQuery);