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
    css: 'public/resources/css',
    font: 'public/resources/fonts',
    img: 'public/resources/img',
    js: 'public/resources/js'
  },
  build: 'public/build',
  theme: 'resources/html',
  vendor: 'vendor/bower_components'
};

elixir(function(mix) {
  mix.sass('app.scss', dir.asset.css, {
    includePaths: [dir.vendor+'/bootstrap-sass-official/assets/stylesheets']
  });

  mix.copy(dir.theme+'/assets/js/ie10-viewport-bug-workaround.js', dir.asset.js+'/ie.js')
    .copy(dir.vendor+'/jquery/dist/jquery.min.js', dir.asset.js+'/vendor/jquery.min.js')
    .copy(dir.vendor+'/jquery/dist/jquery.min.map', dir.asset.js+'/vendor/jquery.min.map')
    .copy(dir.vendor+'/bootstrap-sass-official/assets/javascripts/bootstrap.min.js', dir.asset.js+'/vendor/bootstrap.min.js')
    .copy(dir.vendor+'/font-awesome/fonts', dir.asset.font)
    .copy(dir.theme+'/assets/fonts', dir.asset.font)
    .copy(dir.theme+'/assets/img/header.jpg', dir.asset.img+'/header.jpg');

  mix.styles([
      'app.css'
    ], dir.asset.css+'/all.css', dir.asset.css);

  mix.scripts([
      'vendor/jquery.min.js',
      'vendor/bootstrap.min.js'
    ], dir.asset.js+'/all.js', dir.asset.js);

  mix.version([dir.asset.css+'/all.css', dir.asset.js+'/all.js']);
});
