var dir, elixir = require('laravel-elixir');

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

dir = {
  asset: {
    css: 'public/css',
    img: 'public/img',
    js: 'public/js'
  },
  theme: 'resources/html',
  vendor: 'vendor/bower_components'
};

elixir(function(mix) {
  mix.sass('app.scss')
    .copy(dir.theme+'/assets/css/ionicons.css', dir.asset.css+'/vendor/ionicons.css')
    .copy(dir.theme+'/assets/js/ie10-viewport-bug-workaround.js', dir.asset.js+'/ie.js')
    .copy(dir.vendor+'/jquery/dist/jquery.min.js', dir.asset.js+'/vendor/jquery.js')
    .copy(dir.vendor+'/jquery/dist/jquery.min.map', dir.asset.js+'/vendor/jquery.min.map')
    .copy(dir.vendor+'/bootstrap-sass-official/assets/javascripts/bootstrap.js', dir.asset.js+'/vendor/bootstrap.js')
    .copy(dir.vendor+'/font-awesome/css/font-awesome.min.css', dir.asset.css+'/vendor/font-awesome.css')
    .copy(dir.vendor+'/font-awesome/fonts', dir.asset.css+'/fonts');
});
