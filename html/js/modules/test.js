/**
 * init
 */

var moduleTest = (function () {

    var ready = function (elem) {

        console.info(`le module test a été init au DOMReady via l'élément`, elem);

    };
    var load = function (elem) {
        console.info(`le module test a été init au LOAD via l'élément`, elem);

    };

    return {
        ready: ready,
        load: load
    }

})();

export default moduleTest;