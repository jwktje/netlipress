let mix = require('laravel-mix');

mix.browserSync({
    proxy: 'https://yourdomain.test',
});

mix.options({
    processCssUrls: false
});

mix.setPublicPath('public/theme/dist');

mix.js('public/theme/js/actions.js', '').version();
mix.sass('public/theme/sass/style.scss', '').version();
