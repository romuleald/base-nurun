/**
 * init
 * module sample with init and load function
 */

let skinSelect = function (elem, data) {

    var ready = function () {

        let $elem = $(elem);

        $elem.select2();

    };

    return {
        ready: ready
    }

};

export default skinSelect;