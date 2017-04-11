var fs = require('fs');
var prompt = require('prompt');

prompt.start();

var schema = {
    properties: {
        module_name: {
            description: 'Module name',
            message: 'Name must be only lowercase letters, or dashes',
            pattern: /^[a-z\-]+$/,
            required: true
        },
        has_unit_test: {
            default: 'true',
            description: 'Has unit test',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        },
        has_css: {
            default: 'true',
            description: 'Has CSS (SCSS)',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        },
        has_twig: {
            default: 'true',
            description: 'has Twig',
            message: 'true or false only',
            required: true,
            type: 'boolean'
        }
    }
};

console.info('Name your file and it will create a JS (web)module, the unit test, a CSS (SCSS) and a Twig file');
prompt.get(schema, function (err, result) {

    if (err) {
        return onErr(err);
    }
    for (let obj in result) {
        if (/has/.test(obj) && result[obj] === 'false') {
            continue;
        }
        let path = 'js/modules';
        let name = result.module_name;
        let nameClean = name.replace(/-([a-z])/g, function (m, w) {
            return w.toUpperCase();
        });

        let ext = '.js';
        let text = '';
        if (obj === 'module_name') {
            text = `/**
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
export default ${nameClean};`;
        }
        if (obj === 'has_unit_test') {
            path = 'js/test/modules';
            text = `import {modules} from 'nu6tils';
document.body.insertAdjacentHTML('afterBegin', '<a href="#" class="js-module test-module-${name}" data-module="${name}">module ${name}</a>');

describe("test ${name} module", function () {
    it('"do something', function () {
        let elem = document.querySelector('.test-module-${name}');
        modules.init();
        expect(elem.classList.contains('js-module-init')).toBeTruthy();
    });
});
`;
        }
        if (obj === 'has_css') {
            path = 'css/modules';
            ext = '.scss';
            text = `.${name}{}`

        }
        if (obj === 'has_twig') {
            path = 'twig/modules';
            ext = '.twig';
            text = `{% macro ${nameClean}() %}
    <a href="#" class="js-module" data-module="${name}">${name}</a>
{% endmacro %}`
        }

        let fileURI = `./${path}/${name}${ext}`,
            buffer = new Buffer(text);

        fs.open(fileURI, 'w', function (err, fd) {
            if (err) {
                throw 'error opening file: ' + err;
            }

            fs.write(fd, buffer, 0, buffer.length, null, function (err) {
                if (err) throw 'error writing file: ' + err;
                fs.close(fd, function () {
                    console.log(`file ${fileURI} written`);
                })
            });
        });

    }
});

function onErr(err) {
    console.log(err);
    return 1;
}

