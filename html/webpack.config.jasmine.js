var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: [
        './js/test/test',
    ],
    plugins: [
        new webpack.DefinePlugin({
            'debug': false //set it to true in dev mode
        })
    ],
    output: {
        path: path.join(__dirname, 'js/test'),
        filename: 'test-bundle.js',
        publicPath: ''
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel',
                query: {
                    presets: ['es2015']
                }
            }
        ]
    }
};


