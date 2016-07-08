var m53_sticky = require("../modules/m-53").default;
var m84 = require("../modules/m-84-menu-fixed").default;

$(window).on('load', function () {
    pm.debug && console.log('jquery:document load');
    $(window).trigger('appisload');

    $('body').addClass('document-loaded');

    m53_sticky.init();
    m84.init();

});

