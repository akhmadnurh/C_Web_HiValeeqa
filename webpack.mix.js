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

mix.js('resources/js/app.js', 'public/user/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/user/css')
    .postCss('resources/css/app.css', 'public/user/css')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/user/webfonts')
    .copyDirectory('node_modules/boxicons/fonts', 'public/user/fonts')
    .options({
        processCssUrls: false
    });
