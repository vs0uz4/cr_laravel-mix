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

mix.copy('node_modules/font-awesome/fonts', 'public/fonts')
   .copy('node_modules/bootstrap/dist/fonts', 'public/fonts');

mix.styles([
    'node_modules/font-awesome/css/font-awesome.min.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/css/app.css',
    'resources/assets/css/panel.css'
],  'public/css/style.css')

mix.copy('resources/assets/css/admin.css', 'public/css/admin.css');
mix.copy('resources/assets/css/blog.css', 'public/css/blog.css');

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/js/app.js'
],  'public/js/scripts.js')

mix.copy('resources/assets/js/admin.js', 'public/js/admin.js');
mix.copy('resources/assets/js/blog.js' , 'public/js/blog.js');