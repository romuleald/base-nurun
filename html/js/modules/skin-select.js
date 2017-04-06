/**
 * init
 * module sample with init and load function
 * webmodule v1.2.1
 */

let skinSelect = function (elem, data) {

    let ready = function () {

        let $elem = $(elem);

        $elem.select2();

    };

    return {
        ready: ready
    }

};

export default skinSelect;