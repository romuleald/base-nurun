/**
 * init
 * module sample with init and load function
 * webmodule v1.2.1
 */

let slickSlider = function (elem, data) {

    var ready = function () {

        $(elem).slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1
        });

    };

    return {
        ready: ready
    }

};

export default slickSlider;