/**
 * init
 */

let skinSelect = (function () {
    
    var ready = function (elem) {

        let $elem = $(elem);

        $elem.select2();
        
    };

    return {
        ready: ready
    }

})();

export default skinSelect;