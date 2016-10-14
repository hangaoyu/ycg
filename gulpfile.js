const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
        .sass(['style.scss','about.scss','entrepreneur.scss','investor.scss','activity.scss','join.scss','animate.scss','project.scss','activity_detail.scss'], 'public/css/style.css')
        .scripts('base.js','public/js/base.js')
        .webpack('app.js').version(['public/js/app.js','public/css/app.css','public/css/style.css','public/js/base.js']);
});
