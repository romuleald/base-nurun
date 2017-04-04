let allModuleName = [];
function requireAll(webpackModules) {
    allModuleName = webpackModules.keys();
    return webpackModules;
}
let allModules = requireAll(require.context('../../modules/', false, /\.js$/));
allModuleName.forEach(function (_module, i) {
    let webpackModule = allModules(_module);
    describe(`check ${allModuleName[i]} JS modules integrity`, function () {
        it(`should have a default function`, function () {
            expect(typeof webpackModule.default).toBe('function');
        });
        if (typeof webpackModule.default === 'function') {
            let webModule = webpackModule.default();
            it(`should have a ready or init function`, function () {
                expect(typeof (webModule.init || webModule.ready)).toBe('function');
            });
            webModule.load && it(`should have a load function`, function () {
                expect(typeof webModule.load).toBe('function');
            });
        }
        else{
            console.error('Module should return a function');
        }
    });
});
