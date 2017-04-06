/**
 * image loader push to window.load
 * webmodule v1.2.1
 */
import  isElementInViewport from '../libs/isElementInViewport';

let lazyLoad = (function (elem) {
    const dataSrcFake = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
    let stackImage = [];

    let ready = function () {
        if (!isElementInViewport(elem)) {
            stackImage.push({elem: elem, src: elem.src});
            elem.src = dataSrcFake;
        }
    };

    let loadImages = function () {
        for (let i = 0; i < stackImage.length; i++) {
            let item = stackImage[i];
            if (isElementInViewport(item.elem)) {
                item.elem.src = item.src;
                stackImage.splice(i, 1);
            }
        }
        if (stackImage.length === 0) {
            window.removeEventListener('scroll', loadImages);
        }
    };
    window.addEventListener('scroll', loadImages);

    return {
        ready: ready
    }

})();

export default lazyLoad;