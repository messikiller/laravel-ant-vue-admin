const mix = require('laravel-mix');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/admin.js', 'public/js/admin.js')
mix.js('resources/js/login.js', 'public/js/login.js')

mix.options({
  postCss: [
    require('postcss-css-variables')()
  ]
})

mix.webpackConfig({
  plugins: [],
  resolve: {
    extensions: ['.js', '.json', '.vue'],
    alias: {
      '@': path.join(__dirname, './resources/js/admin')
    }
  },
  output: {
    chunkFilename: 'js/chunk/[name].[chunkhash].js'
  }
})
