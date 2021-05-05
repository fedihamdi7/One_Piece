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
    .js('resources/js/club.js','public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.styles('resources/css/clubs.css','public/css/clubs.css');
mix.styles([
    'resources/css/fontawesome.css',
    'resources/css/templatemo-style.css',
    'resources/css/lightbox.css',
    'resources/css/card_rotate.css',
    'resources/css/one_club.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/owl.theme.default.min.css',
], 'public/css/club.css');
