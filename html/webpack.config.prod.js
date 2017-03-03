var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: [
        './js/base'
    ],
    plugins: [
        new webpack.DefinePlugin({
            'debug': false //set it to true in dev mode
        }),
        new webpack.optimize.UglifyJsPlugin({
            compress: {
                warnings: true
            }
        })
    ],
    output: {
        path: path.join(__dirname, 'scripts'),
        filename: 'bundle.min.js',
        publicPath: ''
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader'
            }
        ]
    }
};


