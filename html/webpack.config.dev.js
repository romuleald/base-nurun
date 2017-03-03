var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: [
        './js/base'
    ],
    plugins: [
        new webpack.DefinePlugin({
            'debug': true //set it to true in dev mode
        })
    ],
    devtool: 'cheap-module-eval-source-map',
    output: {
        path: path.join(__dirname, 'scripts'),
        filename: 'bundle.js',
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


