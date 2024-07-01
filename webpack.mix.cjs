const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
    .copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/css/fontawesome.min.css')
    .sourceMaps();

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
], 'public/css/vendor.css');

mix.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/sweetalert2/dist/sweetalert2.js',
], 'public/js/vendor.js');