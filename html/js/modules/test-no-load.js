/**
 * init
 * example with module.parse()
 * webmodule v1.2.1
 */

import {webModule} from 'nu6tils';

let moduleTest = function (elem, data) {
    let ready = function () {

        // console.info(`le module test-no-load a été init au DOMReady via l'élément`, elem);
        $(elem).on('click', function () {
            elem.insertAdjacentHTML('afterEnd', `<h2 class="js-module" data-module="test-no-load" data-module-test-no-load--id="${data.id}">Test no-load ${data.id}</h2>`);
            webModule.parse($('.js-module'));
        });

    };

    return {
        init: ready
    }

};

export default moduleTest;