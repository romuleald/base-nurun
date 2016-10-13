/**
 * init
 */
var scrollTo = require("../libs/scrollto").default;
var bp = require("../base/basics").getDevice;

var rescrollTab = (function () {

    var rescroll = function (e) {
        if (/t|m/.test(bp())) {
            setTimeout(() => {
                scrollTo(this.offsetTop - $('#header').height());
            },200);
        }
    };

    var init = function () {
        $('.js-toggler[data-rescroll-tab]').on('click', rescroll);
    };

    return {
        init: init
    }

})();

export default rescrollTab;