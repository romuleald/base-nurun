"use strict";

const fs = require('fs');
const gitAdd = require('./generate-module-git');
const tpl = require('./tpl');
const camelCaser = function (m, w) {
    return w.toUpperCase();
};
//todo use Promise to ensure that files are created
module.exports = function generateModule(result, basePath = '') {
    let files = [];
    for (let obj in result) {
        if (/has/.test(obj) && result[obj] === false) {
            continue;
        }
        let name = result.module_name;
        let nameClean = name.replace(/-([a-z])/g, camelCaser);
        let confTpl = tpl(obj, name, nameClean);
        let path = basePath + confTpl.path;
        let ext = confTpl.ext;
        let text = confTpl.tpl;
        let fileURI = `./${path}/${name}${ext}`,
            buffer = new Buffer(text);
        fs.open(fileURI, 'w', function (err, fd) {
            if (err) {
                throw 'error opening file: ' + err;
            }
            fs.write(fd, buffer, 0, buffer.length, null, function (err) {
                if (err) {
                    throw 'error writing file: ' + err;
                }
                fs.close(fd, function () {
                    // console.log(`file ${fileURI} written`);
                })
            });
        });
        files.push(fileURI);
    }
    gitAdd(files);
    return files;
};

