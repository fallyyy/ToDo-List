const mix = require('laravel-mix');

// Mix Asset
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
