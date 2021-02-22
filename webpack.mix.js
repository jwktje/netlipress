let mix = require('laravel-mix');

mix.browserSync({
    proxy: 'https://local-host-name.test',
});

mix.options({
    processCssUrls: false
});

mix.js('theme/js/actions.js', '').setPublicPath('theme/dist');
mix.sass('theme/sass/style.scss', '');
