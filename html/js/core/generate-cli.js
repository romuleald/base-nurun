"use strict";

const prompt = require('prompt');
const schema = require('./generate-module-conf');
const generateModule = require('./generate-module');

prompt.start();

console.info('Name your file and it will create a');
console.info('JS (web)module, the unit test, a CSS (SCSS) and a Twig file');
console.info('New files will be automaticaly added to git');
prompt.get(schema, function (err, result) {

    if (err) {
        return onErr(err);
    }
    generateModule(result);
});

function onErr(err) {
    console.log(err);
    return 1;
}
