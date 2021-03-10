let path = require('path');
let mix = require('laravel-mix');

mix.browserSync({
    proxy: 'https://yourdomain.test',
});

mix.options({
    processCssUrls: false
});

mix.setPublicPath('web/theme/dist');

mix.js('web/theme/js/actions.js', '').version();
mix.sass('web/theme/sass/style.scss', '').version();
