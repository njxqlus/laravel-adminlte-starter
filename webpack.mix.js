let mix = require('laravel-mix');

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

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    //admin-lte
    .js('resources/assets/admin-lte/js/admin-lte.js', 'public/admin-lte/dist/js')
    .sass('resources/assets/admin-lte/sass/admin-lte.scss', 'public/admin-lte/dist/css')
;