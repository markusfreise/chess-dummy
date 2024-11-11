const mix = require('laravel-mix');
const { max } = require('lodash');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/site.js', './public/js').vue().sass('resources/scss/site.scss','./public/css/site.css').options({processCssUrls: false}).sourceMaps(true, 'source-map').browserSync({watch: true, files: ['./css/*.css','./*.php','./*/*.php'], host: 'chess.test', proxy: {target: 'https://chess.test'}});