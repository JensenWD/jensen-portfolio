const mix = require('laravel-mix');

mix.browserSync({proxy: 'portfolio.test'});

// mix.js('resources/assets/js/sample-decision.js', 'public/js').sourceMaps();

mix.sass('resources/sass/custom.sass', 'public/css');
