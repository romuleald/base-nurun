/**
 * webmodule v1.2.1
 */

let video = function (elem, data) {
    const baseURL = elem.src;
    const id = elem.id;

    let binder = function () {
        let $video = $('#' + id);
        $video.on('play', play);
        $video.on('stop', stop);
    };

    let paramSplit = function (url) {
        return /\?/.test(url) ? '&' : '?';
    };

    let play = function () {
        this.src = baseURL + paramSplit(baseURL) + 'autoplay=1';
        this.outerHTML = this.outerHTML;
        binder();
    };

    let stop = function () {
        this.src = baseURL;
        this.outerHTML = this.outerHTML;
        binder();
    };

    let ready = function () {
        if (!id) {
            console.error('no idea defined on', elem);  //
        }
        else {
            binder();
        }
    };

    return {
        ready: ready
    }

};

export default video;