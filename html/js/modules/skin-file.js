/**
 * init
 * module sample with init and load function
 * webmodule v1.2.1
 */

let skinFile = function (elem) {

    var ready = function () {

        let $elem = $(elem);
        let elemParent = $elem.parents('.form-item-file');

        // hide the original file input
        $elem.addClass('accessibility');
        
        // get the input datas to create the fake file input only width css applied
        let elemDatas = $elem.data();
        if($('body').css('background-color')!='transparent'){
            elemParent.find('.file-name').prop('title', elemDatas.placeholder).html(elemDatas.placeholder);
            elemParent.find('.file-button').html(elemDatas.button);
        }

        // show the fake file input
        elemParent.find('.file-input').removeClass('accessibility');

        $elem.on('change', function () {
            let fileValue;
            let fakeFile = $elem.parents('.form-item-file').find('.file-name');

            if(this.files[0]) {
                fileValue = this.files[0].name;
            } else {
                fileValue = $elem.data('placeholder');
            }

            fakeFile.html(fileValue);
            fakeFile.prop('title', fileValue);
        });

    };

    return {
        ready: ready
    }

};

export default skinFile;