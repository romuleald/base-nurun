/**
 * init
 */
var popinToggler = (function () {

    /*
     *  use escape key to close popin
     */

    var $popin = $('[data-toggler-type="popin"]');
    var popinTab = [];

    var openedPopin = function (e) {
        var $currentToggler = $(e.target);

        if($currentToggler.data('toggler-type') == 'popin') {
            //when several popins opened, add class on below ones
            if (popinTab.length > 0) {
                popinTab[popinTab.length - 1].addClass('under');
            }
            //store popin
            popinTab.push($currentToggler);
        }
    };

    var closedPopin = function (e) {
        if($(e.target).data('toggler-type') == 'popin') {
            //remove tab last push
            popinTab.splice(-1,1);

            //remove class on previous popin
            if(popinTab.length > 0) {
                popinTab[popinTab.length - 1].removeClass('under');
            }
        }
    };

    var escapeKey = function (e) {
        if (popinTab.length > 0 && e.keyCode == 27) {
            //close last open popin
            popinTab[popinTab.length - 1].find('.popin-close').trigger('click');
        }
    };

    var init = function () {
        $(document).on('open.content', $popin, openedPopin).on('close.content', $popin, closedPopin).on('keyup', escapeKey);
    };

    return {
        init: init
    }

})();

export default popinToggler;