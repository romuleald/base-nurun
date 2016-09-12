
$(window).on('load', function () {
    pm.debug && console.log('jquery:document load');
    $(window).trigger('appisload');

    $('body').addClass('document-loaded');

});

