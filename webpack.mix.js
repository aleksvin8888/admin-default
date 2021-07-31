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

mix.css('resources/css/app.css', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();



// mix.css('resources/dist/assets/css/app.css', 'public/dist/css')
//     .js('resources/dist/assets/js/app.js', 'public/dist/js')
//     .sass('resources/dist/sass/app.scss', 'public/dist/css')
//     .sourceMaps();
