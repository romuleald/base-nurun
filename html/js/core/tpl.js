module.exports = function tpl(type, name, nameClean) {

    let config = {
        module_name: {
            ext: '.js',
            path: 'js/modules',
            tpl: `/**
 * init
 * module ${name} with init and load function
 * webmodule v1.2.1
 */

let ${nameClean} = function (elem, data) {
    let ready = function () {};
    let load = function () {};
    return {
        ready: ready,
        load: load
    }
};
export default ${name};`
        },
        has_unit_test: {
            ext: '.js',
            path: 'js/test/modules',
            tpl: `import {modules} from 'nu6tils';
document.body.insertAdjacentHTML('afterBegin', '<a href="#" class="js-module test-module-${name}" data-module="${name}">module ${name}</a>');

describe("test ${name} module", function () {
    it('"do something', function () {
        let elem = document.querySelector('.test-module-${name}');
        modules.init();
        expect(elem.classList.contains('js-module-init')).toBeTruthy();
    });
});
`
        },
        has_css: {
            ext: '.scss',
            path: 'css/modules',
            tpl: `.module-${name}{}`
        },
        has_twig: {
            ext: '.twig',
            path: 'twig/modules',
            tpl: `{% macro ${nameClean}() %}
    <a href="#" class="js-module module-${name}" data-module="${name}">${name}</a>
{% endmacro %}`
        }

    };
    return config[type];
};

