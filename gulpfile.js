var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
        '../../../node_modules/angular/angular.min.js',
        '../../../node_modules/angular-resource/angular-resource.min.js',
        '../../../node_modules/angular-route/angular-route.min.js',
        '../../../node_modules/angular-cookie/angular-cookie.min.js',
        '../../../public/app/app.js'
    ]);
});
