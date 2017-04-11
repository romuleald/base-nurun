/**
 * init
 * webmodule v1.2.1
 */

import {getService} from 'nu6tils';
let _getService = getService.call;
let moduleTest = function (elem, data) {

    let ready = function () {

        // console.info(`le module test-ajax a été init au DOMReady via l'élément`, elem);

        $(elem).on('click', function () {
            _getService('get_test', {foo: 'bar'}).done(function () {
                console.info('ajax:get_test');
                elem.insertAdjacentHTML('beforeend', data.id)
            });
        });

    };

    return {
        init: ready
    }

};

export default moduleTest;