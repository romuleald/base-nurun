"use strict";

const schema = require('./generate-module-conf');
const generateModule = require('./generate-module');

let result = {};
Object.keys(schema.properties).map(function (item, i) {
    result[item] = process.argv[i + 2]
});

let files = generateModule(result, '../');

console.dir(files.join(','));