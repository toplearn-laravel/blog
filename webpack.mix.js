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
    .sass('resources/sass/app.scss', 'public/css');

// mix.styles([
//     'public/css/first.css',
//     'public/css/second.css'
// ], 'public/css/all.css');

// mix.scripts([
//     'public/js/admin.js',
//     'public/js/dashboard.js'
// ], 'public/js/all.js');