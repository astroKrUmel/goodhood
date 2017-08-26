
var elixir = require("laravel-elixir");
    //task = require('laravel-elixir-task'),
    //gulp = require("gulp"),
    //shell = require("gulp-shell");

//require('laravel-elixir-vue-2');
require('laravel-elixir-uglify');

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
    mix
    // SASS
        .sass('app.scss')

        // JS
        .scripts([
            'frameworks/jquery.min.js',
            'frameworks/jquery.cookie.js',

            'app/*.js',
            'app/**/*.js'
        ], 'public/js/app.js')
    ;

        //.uglify(['**/*.js', '!**/*.min.js'], 'public/js', {
        //    mangle: true,
        //    suffix: '.min.js'
        //});
});

