'use strict';
let module = require("./core/module").default;
import {getService} from 'nu6tils';
getService.init(jsonendpoint);

module.init();

//other ready/load actions
require('./base/ready.js');
require('./base/load.js');
//debug come from webpack.config.*.js, conditions under debug will be removed on prod
if (debug) {
    console.info('debug is', debug);
}
/* END */