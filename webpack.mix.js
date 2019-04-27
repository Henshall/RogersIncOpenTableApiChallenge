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
//
// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css')
//     .sass("resources/assets/sass/components/responsive-margins.scss", "public/css")
//     .less("node_modules/font-awesome/css/font-awesome.css", "public/css");
mix.combine([
      'public/css/animate.css',
      'public/css/bootstrap.css',
      'public/css/custom.css',
      'public/css/font-awesome.css',
      'public/css/normalize.css'
    ], 'public/css/style.css');
