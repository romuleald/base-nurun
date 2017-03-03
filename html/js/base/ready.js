import jsToggler from 'js-toggler';
let cookies_cnil = require("../libs/cookies-cnil").default;
let scrollto = require("../libs/scrollto").default;

(function () {
    debug && console.log('jquery:document ready');
    jsToggler();
    cookies_cnil.init();

    //todo refactor to a module
    let $link = $('[data-scrollto]');
    $link.on('click scrollto', scrollto);

    // todo redactor to a module
    let $linkrte = $('.module-rte a.JS_Scrollto');
    $linkrte.each(function () {
        let hrefvalue = this.href.split("#");
        if (hrefvalue[0] == document.location.href && document.getElementById(hrefvalue[1])) {
            $(this).attr('data-scrollto', hrefvalue[1]);
        }
    });
    $linkrte.on('click scrollto', scrollto);
})();
