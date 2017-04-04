import getTpl from 'gettpl';

//test for module sharing
document.body.insertAdjacentHTML('afterBegin', `<script type="text/template" class="test-gettpl" id="lol1">{{lol}}</script>`);
document.body.insertAdjacentHTML('afterBegin', `<script type="text/template" class="test-gettpl" id="lol2">{{ lol}}</script>`);
document.body.insertAdjacentHTML('afterBegin', `<script type="text/template" class="test-gettpl" id="lol3">{{lol }}</script>`);
document.body.insertAdjacentHTML('afterBegin', `<script type="text/template" class="test-gettpl" id="lol4">{{ lol }}</script>`);

describe("test sharing module", function () {

    it("it get a tpl that should return lol whatsoever the space in the tpl", function () {
        let testedValue = 'lol';
        document.querySelectorAll('.test-gettpl').forEach(function (item) {
            let lol = getTpl({lol: testedValue}, item.id);
            expect(lol).toBe(testedValue);
        });
        let getTplWithError = function () {
            getTpl({lol: testedValue}, 'lolnull')
        };
        expect(getTplWithError).toThrowError();

    });

});
