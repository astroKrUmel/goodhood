/**
 * Created by Kevin on 17.09.2017.
 */


+function ($) {

    var initNavigationStyling = function () {
        var $NaviTabs = $('.navigation .menu ul li a'),
            sActiveTabClass = 'active-tab';

        $NaviTabs.on('click', function() {
            $NaviTabs.removeClass(sActiveTabClass);
            $(this).addClass(sActiveTabClass)
        });
    };

    initNavigationStyling();

} (jQuery);