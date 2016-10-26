var elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .sass(['style.scss','about.scss','entrepreneur.scss','investor.scss','activity.scss','join.scss','animate.scss','project.scss','activity_detail.scss'], 'public/css/style.css')
        .sass(['admin.scss'],'public/css/skins/myadmin.css')
        .scripts('base.js','public/js/base.js')
        .webpack('app.js')
        .webpack('admin.js','public/js/admin.js')
        .version(['public/css/app.css','public/css/style.css','public/js/base.js']);

});

