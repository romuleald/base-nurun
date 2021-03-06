window.pm = {debug: false};//used in this project, will be soon replaced by a debug injection via webpack
import {webModule} from 'nu6tils';

//test for module sharing
document.body.insertAdjacentHTML('afterBegin', `<a href="#" class="js-module test-module-sharing" data-module="sharing" data-width="800" data-height="500">lol</a>`);

describe("test sharing module", function () {

    it(`"click on a .js-module[data-module="sharing"] and open a popup`, function () {
        let elem = document.querySelector('.test-module-sharing');
        webModule.init();
        spyOn(window, 'open');
        elem.click();
        expect(window.open).toHaveBeenCalledWith(location.href + '#', 'share', jasmine.any(String));
    });
});
