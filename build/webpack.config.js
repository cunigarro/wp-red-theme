const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');

module.exports = {
  entry: ['./src/js/main.js'],
  output: {
    filename: './dist/js/main.min.js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {
              loader: 'css-loader', options: { importLoaders: 1 }
            },
            {
              loader: 'postcss-loader'
            },
            {
              loader: 'sass-loader',
              options: {
                plugins: () => [autoprefixer()]
              }
            }
          ],
          fallback: 'style-loader'
        })
      },
      {
        test: /\.(png|jp(e*)g|svg)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'dist/img/'
          }
        }]
      },
      {
        test: /\.(woff|woff2)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'dist/fonts/',
            publicPath: '../fonts'
          }
        }]
      },
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: './dist/css/style.css',
      allChunks: true
    })
  ]
}
