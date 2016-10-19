var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: [
        'babel-polyfill',
        './js/base'
    ],
    plugins: [
        // new webpack.PrefetchPlugin(null, './js/libs/scrollto.js'),
        // new webpack.PrefetchPlugin(null, './node_modules/gettpl/index.js'),
        // new webpack.PrefetchPlugin(null, './node_modules/gettpl/gettpl.js'),
        // new webpack.PrefetchPlugin(null, './node_modules/babel-polyfill/lib/index.js'),
        // new webpack.PrefetchPlugin(null, './node_modules/babel-polyfill/node_modules/core-js/shim.js'),
        new webpack.DefinePlugin({
            'debug': false //set it to true in dev mode
        }),
        new webpack.optimize.UglifyJsPlugin({
            compress:{
                warnings: true
            }
        })
    ],
    output: {
        path: path.join(__dirname, 'scripts'),
        filename: 'bundle.js',
        publicPath: ''
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel',
                query: {
                    compact: false,
                    presets: ['es2015']
                }
            }
        ]
    }
};


