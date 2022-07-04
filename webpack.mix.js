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
    .js('resources/js/uikit.js', 'public/js/app.js')
    .js('resources/js/jquery-3.3.1.min.js', 'public/js/app.js')
    .js('resources/js/custom.js', 'public/js/app.js')
    .js('resources/js/tippy.all.min.js', 'public/js/app.js')
    .js('resources/js/simplebar.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .sourceMaps();
