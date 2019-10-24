const mix = require('laravel-mix');

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

mix.js(['resources/js/app.js', 'resources/js/bootstrap-formhelpers.min.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/css/bootstrap-formhelpers.min.css', 'public/css/formhelpers.css')
    .minify('public/js/app.js')
    .minify('public/css/app.css');

mix.browserSync('optform.test');
