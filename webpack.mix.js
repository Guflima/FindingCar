const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | O Mix fornece uma API limpa e fluente para definir algumas etapas de compilação do Webpack
 | para a sua aplicação Laravel. Por padrão, estamos compilando o Sass
 | arquivo para o aplicativo, bem como agrupar todos os arquivos JS.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
