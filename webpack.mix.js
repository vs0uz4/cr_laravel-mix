let mix = require('laravel-mix')
let webpack = require('webpack')

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

/*
 Webpack Configurations
 Defining through webpack plugin provider settings, so that the jQuery library stays in the global scope.

 jQuery will be available globally through the variables: '$' and 'jQuery'
 */
mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ]
})

mix.sass('resources/assets/sass/app.scss', 'public/css')

mix.js('resources/assets/js/admin.js', 'public/js')
    .js('resources/assets/js/blog.js', 'public/js')
    .sourceMaps()
    .extract(['jquery', 'bootstrap'])

mix.browserSync({
    proxy: 'app:8080',
    open: false
})