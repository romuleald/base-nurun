let sharing = (function (elem, data) {

    let ready = function () {

        elem.addEventListener('click', function (e) {
            e.preventDefault();

            const x = screen.width / 2 - data.width / 2;
            const y = screen.height / 2 - data.height / 2;

            let windowFeatures = `width=${data.width},height=${data.height},left=${x},top=${y},scrollbars=yes,status=1`;
            window.open(this.href, "share", windowFeatures);

        });

    };

    return {
        ready: ready
    }

})();

export default sharing;