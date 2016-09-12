
$(window).on('load', function () {
    pm.debug && console.log('jquery:document load');
    console.info('load:file');
    $(window).trigger('appisload');

    $('body').addClass('document-loaded');

});

