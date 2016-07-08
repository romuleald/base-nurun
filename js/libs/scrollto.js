var scrollto = function (arg, paddingTop) {
    var argument = arg;
    var destination = 0;
    var $scrollToThisElem;
    var duration = 500;
    var $trigger;
    var headerHeight = $('#header').outerHeight();

    if (/click|scrollto/.test(arg.type)) {
        $trigger = $(this);
        argument = $trigger.data('scrollto');
        arg.preventDefault();
    }

    if (typeof argument === 'number') {
        destination = argument;
    }
    if (typeof argument === 'string') {
        if (argument === '{top}') {
            destination = 0;
        }
        else if (argument === '{bottom}') {
            destination = $(document).innerHeight() - $(window).height();
        }
        else if (argument[0] === '.') {
            argument = $(argument);
        }
        else {
            $scrollToThisElem = $('#' + argument);
            $trigger = $scrollToThisElem;
            if ($scrollToThisElem.length) {
                destination = $scrollToThisElem.offset().top - headerHeight;
            }
            else {
                pm.debug && console.error('No ID element found, selector was: #', argument);
            }
        }

    }
    if (typeof argument === 'object') {
        $scrollToThisElem = argument;
        $trigger = $scrollToThisElem;
        if ($scrollToThisElem.length) {
            destination = $scrollToThisElem.offset().top;
        }
        else {
            pm.debug && console.error('No jQuery element found, selector was: ', $scrollToThisElem.selector);
        }
    }
    paddingTop = paddingTop ? paddingTop : 0;
    var $scroller = $('html,body');
    $scroller.animate(
        {
            scrollTop: destination - paddingTop
        },
        {
            easeing: 'easeout',
            duration: duration
        }
    ).promise().done(
        function () {
            $trigger ? $trigger.trigger('scrolledto') : $scroller.trigger('scrolledto');
        }
    );
    return $scroller;
};

export default scrollto;