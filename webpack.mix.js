let mix = require('laravel-mix');

mix.browserSync({
    proxy: 'https://local-host-name.test',
});

mix.options({
    processCssUrls: false
});

mix.js('web/theme/js/actions.js', '').setPublicPath('web/theme/dist');
mix.sass('web/theme/sass/style.scss', '');
