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
    .scripts('resources/js/scripts.js', 'public/js/script.js')
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

mix.styles([
    'resources/css/styles.css',
    'resources/css/admin.css',
    
], 'public/css/adminuserlist.css');


mix.styles('resources/css/styles.css','public/css/adminstyle.css');
mix.styles([
    'resources/css/ionicons.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/footer.css',
    'resources/css/counter.css',
    'resources/css/style.css',
    'resources/css/responsive.css',
    'resources/css/modal.css',
    'resources/css/Navbar_No_Account.css',
    'resources/css/style1.css',
    'resources/css/shape.css',
], 'public/css/welcome.css')
.scripts([
    'resources/js/jquery.min.js',
    'resources/js/jquery-migrate.min.js',
    'resources/js/typed.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/magnific-popup.min.js',
    'resources/js/isotope.pkgd.min.js',
    'resources/js/main.js'

], 'public/js/welcome.js');

