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
　/*
    ① npm install
    ② resources/sass以下にscssファイル作成、書き込み
    ③ public以下にファイルcssを作成
    ④ Webpack.mixに.sass('resources/sass/app.scss', 'public/css');を記入
    ⑤ npm run watch
    ⑥ ビューに<link href="{{ asset('css/app.css') }}" rel="stylesheet">を追加
    全画面がオレンジ色に！！
  */
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/primary.scss', 'public/css')
    .sass('resources/sass/item.scss', 'public/css')
    .sass('resources/sass/nav.scss', 'public/css');
