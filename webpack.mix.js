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

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/js/app.js'
],  'public/js/vendor.js')

mix.copy('resources/assets/js/admin.js', 'public/js/admin.js');
mix.copy('resources/assets/js/blog.js' , 'public/js/blog.js');