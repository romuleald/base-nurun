/**
 * init
 */

var moduleTest = (function () {

    var init = function (elem) {

        console.info(`le module test a été init via l'élément`, elem);

    };

    return {
        init: init
    }

})();

export default moduleTest;