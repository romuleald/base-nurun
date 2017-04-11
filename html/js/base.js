'use strict';
import {webModule, getService} from 'nu6tils';

getService.init(window.jsonendpoint);
webModule.init();

//other ready/load actions
require('./base/ready.js');
require('./base/load.js');
//debug come from webpack.config.*.js, conditions under debug will be removed on prod
if (debug) {
    console.info('debug is', debug);
}
/* END */