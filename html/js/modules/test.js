/**
 * init
 * module sample with init and load function
 */

let moduleTest = function (elem, data) {

    let ready = function () {
        // console.info(`le module test a été exécuté au DOMReady via l'élément`, elem);
    };
    let load = function () {
        // console.info(data);
        // console.info(`le module test a été exécuté au LOAD via l'élément`, elem);
    };

    return {
        ready: ready,
        load: load
    }

};

export default moduleTest;