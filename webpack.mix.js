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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/css/styles.css', 'public/css/responsable.css')
    .styles('resources/css/admin.css','public/css/admin.css')
    .styles('resources/css/event.css', 'public/css/Style.css')
    .scripts('resources/js/scripts.js', 'public/js/script.js');
