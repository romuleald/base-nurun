/**
 * init
 * todo refactor to a module
 */
let scrollTo = require("../libs/scrollto").default;
let bp = require("../base/basics").getDevice;

let rescrollTab = (function () {

    let rescroll = function (e) {
        if (/t|m/.test(bp())) {
            setTimeout(() => {
                scrollTo(this.offsetTop - $('#header').height());
            },200);
        }
    };

    let init = function () {
        $('.js-toggler[data-rescroll-tab]').on('click', rescroll);
    };

    return {
        init: init
    }

})();

export default rescrollTab;