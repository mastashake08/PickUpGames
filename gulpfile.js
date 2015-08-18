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
});

elixir(function(mix) {
    mix.scripts([
      '../../bower_components/angular/angular.js',
      '../../bower_components/angularjs-geolocation/dist/angularjs-geolocation.min.js',
        '../../bower_components/ngmap/build/scripts/ng-map.js',
        'app.js'

    ]);
});
