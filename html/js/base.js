/*------------------------------------------------------------------------------
 JS Document (https://developer.mozilla.org/en/JavaScript)

 project:    project name
 created:    YYYY-MM-DD
 author:     johdoe

 ----------------------------------------------------------------------------- */
'use strict';

/*  =CONSTANTES
 ----------------------------------------------------------------------------- */
//jQuery.noConflict();
var d = document;
var w = window;
window.pm = window.pm || {};
pm.debug = /equesto|local|nextdeploy/.test(document.location.host) && typeof console != 'undefined';

var module = require("./core/module").default;

module.init();

//other ready/load actions
require('./base/ready.js');
require('./base/load.js');


/* END */