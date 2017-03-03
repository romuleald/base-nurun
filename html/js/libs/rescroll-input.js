/**
 * init
 * todo refactor to a module
 */
let scrollTo = require("../libs/scrollto").default;
let bp = require("../base/basics").getDevice;

let rescrollInput = (function () {

    let rescroll = function (e) {
        if (/t|m/.test(bp())) {
            scrollTo('search-bar-catalog');
        }
    };

    let init = function () {
        $('.js-rescroll-input').on('focus', rescroll);
    };

    return {
        init: init
    }

})();

export default rescrollInput;