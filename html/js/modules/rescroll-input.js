/**
 * init
 */
var scrollTo = require("../libs/scrollto").default;
var bp = require("../base/basics").getDevice;

var rescrollInput = (function () {

    var rescroll = function (e) {
        if (/t|m/.test(bp())) {
            scrollTo('search-bar-catalog');
        }
    };

    var init = function () {
        $('.js-rescroll-input').on('focus', rescroll);
    };

    return {
        init: init
    }

})();

export default rescrollInput;