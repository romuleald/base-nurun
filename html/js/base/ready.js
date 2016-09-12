//var Utilst = require("../libs/utils6");
var device = require("../base/basics");

var accordion = require("./../libs/accordions").default;
var header_manager = require("../libs/header-manager").default;
var search_manager = require("../libs/search-manager").default;
var slider_manager = require("../libs/slider-manager").default;
// var select2_manager = require("../libs/select2-manager").default;
var form_validation = require("../libs/form-validation").default;
// var switch_view = require("../libs/switch-view").default;
var cookies_cnil = require("../libs/cookies-cnil").default;
var scrollto = require("../libs/scrollto").default;

(function () {
    pm.debug && console.log('jquery:document ready');
    header_manager.init();
    search_manager.init();
    slider_manager.init();
    accordion();
    form_validation.init();
    cookies_cnil.init();

    var $link = $('[data-scrollto]');
    $link.on('click scrollto', scrollto);

    // add data if href and id exist together
    var $linkrte = $('.module-rte a.JS_Scrollto');
    $linkrte.each(function () {
        var hrefvalue = this.href.split("#");
        if (hrefvalue[0] == document.location.href && document.getElementById(hrefvalue[1])) {
            $(this).attr('data-scrollto', hrefvalue[1]);
        }
    });
    $linkrte.on('click scrollto', scrollto);
})();
