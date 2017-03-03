
$(window).on('load', function () {
    debug && console.log('jquery:document load');
    $(window).trigger('appisload');

    $('body').addClass('document-loaded');

});

